<?php
// Database connection
include 'connection.php';

// Get current date and time
$current_datetime = date('Y-m-d H:i:s');
$current_date = date('Y-m-d'); // Current date for end datetime comparison

// Query to find auctions that are still pending or active and check their times, only for verified items
$sql = "SELECT * FROM tblauctionitem 
        WHERE auction_status IN ('PENDING', 'ACTIVE') 
        AND item_id IN (SELECT id FROM tblitem WHERE verify_status = 'verified')";
$result = $conn->query($sql);

while ($auction = $result->fetch_assoc()) {
    $auction_id = $auction['id'];
    $item_id = $auction['item_id']; // Get the item ID for updating its status later
    $start_datetime = $auction['start_datetime'];
    $end_datetime = $auction['end_datetime'];
    $min_bidders = $auction['minimum_bidders'];
    $reserve_price = $auction['reserve_price'];
    $emd_date = $auction['emd_date'];

    // Check if the start time has been reached and update status to ACTIVE
    if ($current_datetime >= $start_datetime && $auction['auction_status'] == 'PENDING') {
        $update_sql = "UPDATE tblauctionitem SET auction_status = 'ACTIVE' WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("i", $auction_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "Auction ID $auction_id has been set to ACTIVE.\n";
        }
    }

    // Check if the end time has been reached
    if ($current_date > $emd_date && $auction['auction_status'] == 'PENDING') {
        // Check how many bidders are registered
        $result_registered = $conn->query("SELECT COUNT(*) as bidders FROM tblbidderpayment WHERE auction_item_id = $auction_id AND emd_refund = 'notApplicable' AND full_payment = 'notApplicable'");
        $registered_users = $result_registered->fetch_assoc();
        $num_bidders = $registered_users['bidders'];

        // If the number of registered bidders is less than the minimum, set auction status to CANCELED
        if ($num_bidders < $min_bidders) {
            $update_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("i", $auction_id);
            $stmt->execute();
            echo "Auction ID $auction_id has been CANCELED due to insufficient bidders.\n";
        } else {
            // Find the highest bid
            $result_highest_bid = $conn->query("SELECT bidder_id, MAX(bid_value) as highest_bid FROM tblbid WHERE auction_item_id = $auction_id GROUP BY bidder_id ORDER BY highest_bid DESC LIMIT 1");
            $highest_bidder = $result_highest_bid->fetch_assoc();

            if ($highest_bidder) {
                $winner_bidder_id = $highest_bidder['bidder_id'];
                $highest_bid = $highest_bidder['highest_bid'];

                // Check if the highest bid meets or exceeds the reserve price
                if ($highest_bid >= $reserve_price) {
                    // Update the auction status to COMPLETED and verify_status to 'sold'
                    $update_sql = "UPDATE tblauctionitem SET auction_status = 'COMPLETED', winner_id = ? WHERE id = ?";
                    $stmt = $conn->prepare($update_sql);
                    $stmt->bind_param("ii", $winner_bidder_id, $auction_id);
                    $stmt->execute();

                    // Update tblitem to mark the item as 'sold'
                    $update_item_sql = "UPDATE tblitem SET verify_status = 'sold' WHERE id = ?";
                    $stmt = $conn->prepare($update_item_sql);
                    $stmt->bind_param("i", $item_id);
                    $stmt->execute();

                    echo "Auction ID $auction_id has been COMPLETED. Winner is bidder ID $winner_bidder_id. Item marked as 'sold'.\n";

                    // Update tblbidderpayment for the winning bidder
                    $update_winner_sql = "UPDATE tblbidderpayment SET emd_refund = 'notApplicable', full_payment = 'pending' WHERE auction_item_id = ? AND bidder_id = ?";
                    $stmt = $conn->prepare($update_winner_sql);
                    $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
                    $stmt->execute();

                    // Update tblbidderpayment for losing bidders
                    $update_loser_sql = "UPDATE tblbidderpayment SET emd_refund = 'pending', full_payment = 'notApplicable' WHERE auction_item_id = ? AND bidder_id != ?";
                    $stmt = $conn->prepare($update_loser_sql);
                    $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
                    $stmt->execute();

                    echo "Bidders updated for auction ID $auction_id. Winner has 'full_payment = pending' and losers have 'emd_refund = pending'.\n";
                } else {
                    // If reserve price is not met, cancel the auction
                    $update_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
                    $stmt = $conn->prepare($update_sql);
                    $stmt->bind_param("i", $auction_id);
                    $stmt->execute();

                    echo "Auction ID $auction_id has been CANCELED because the reserve price was not met.\n";
                }
            }
        }
    }
}
?>
