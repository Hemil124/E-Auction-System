<?php
include 'connection.php';

if (isset($_POST['auction_id']) && isset($_POST['reserve_price'])) {
    $auction_id = $_POST['auction_id'];
    $reserve_price = $_POST['reserve_price'];

    // Fetch the highest bid
    $result_highest_bid = $conn->query("SELECT bidder_id, MAX(bid_value) as highest_bid FROM tblbid WHERE auction_item_id = $auction_id GROUP BY bidder_id ORDER BY highest_bid DESC LIMIT 1");
    $highest_bidder = $result_highest_bid->fetch_assoc();

    if ($highest_bidder) {
        $winner_bidder_id = $highest_bidder['bidder_id'];
        $highest_bid = $highest_bidder['highest_bid'];

        // Check if the highest bid meets or exceeds the reserve price
        if ($highest_bid >= $reserve_price) {
            // Update the auction status to COMPLETED and set winner ID
            $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'COMPLETED', winner_id = ? WHERE id = ?";
            $stmt = $conn->prepare($update_auction_sql);
            $stmt->bind_param("ii", $winner_bidder_id, $auction_id);
            $stmt->execute();

            // Update the item to mark it as sold
            $result_item = $conn->query("SELECT item_id FROM tblauctionitem WHERE id = $auction_id");
            $item = $result_item->fetch_assoc();
            $item_id = $item['item_id'];

            $update_item_sql = "UPDATE tblitem SET verify_status = 'sold' WHERE id = ?";
            $stmt = $conn->prepare($update_item_sql);
            $stmt->bind_param("i", $item_id);
            $stmt->execute();

            // Update bidder payments
            // Winner: Full payment pending
            $update_winner_sql = "UPDATE tblbidderpayment SET emd_refund = 'notApplicable', full_payment = 'pending' WHERE auction_item_id = ? AND bidder_id = ?";
            $stmt = $conn->prepare($update_winner_sql);
            $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
            $stmt->execute();

            // Other bidders: EMD refund pending
            $update_loser_sql = "UPDATE tblbidderpayment SET emd_refund = 'pending', full_payment = 'notApplicable' WHERE auction_item_id = ? AND bidder_id != ?";
            $stmt = $conn->prepare($update_loser_sql);
            $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
            $stmt->execute();

            echo "Auction ID $auction_id COMPLETED. Winner: Bidder ID $winner_bidder_id with bid $highest_bid. Item marked as 'sold'.";
        } else {
            // Reserve price not met, cancel the auction
            $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
            $stmt = $conn->prepare($update_auction_sql);
            $stmt->bind_param("i", $auction_id);
            $stmt->execute();

            echo "Auction ID $auction_id CANCELED. Reserve price not met.";
        }
    } else {
        // No bids placed, cancel the auction
        $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
        $stmt = $conn->prepare($update_auction_sql);
        $stmt->bind_param("i", $auction_id);
        $stmt->execute();

        echo "Auction ID $auction_id CANCELED. No bids were placed.";
    }
}
?>
