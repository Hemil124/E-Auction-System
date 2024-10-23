<?php
// Database connection
include 'connection.php';

// Get current date and time
$current_datetime = date('Y-m-d H:i:s');

// Query to find auctions that are still pending or active and check their times
$sql = "SELECT * FROM tblauctionitem WHERE auction_status IN ('PENDING', 'ACTIVE')";
$result = $conn->query($sql);

while ($auction = $result->fetch_assoc()) {
    $auction_id = $auction['id'];
    $start_datetime = $auction['start_datetime'];
    $end_datetime = $auction['end_datetime'];
    $min_bidders = $auction['minimum_bidders'];

    // Check if the start time has been reached and update status to ACTIVE
    if ($current_datetime >= $start_datetime && $auction['auction_status'] == 'PENDING') {
        $update_sql = "UPDATE tblauctionitem SET auction_status = 'ACTIVE' WHERE id = $auction_id";
        $conn->query($update_sql);
        echo "Auction ID $auction_id has been set to ACTIVE.\n";
    }

    // Check if the end time has been reached
    if ($current_datetime >= $end_datetime && $auction['auction_status'] == 'ACTIVE') {
        // Check how many bidders are registered
        $result_registered = mysqli_query($conn, "SELECT COUNT(*) as bidders FROM tblbidderpayment WHERE auction_item_id = $auction_id AND emd_refund = 'notApplicable' AND full_payment = 'notApplicable'");
        $registered_users = mysqli_fetch_assoc($result_registered);
        $num_bidders = $registered_users['bidders'];

        // If the number of registered bidders is less than the minimum, set auction status to CANCELED
        if ($num_bidders < $min_bidders) {
            $update_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = $auction_id";
            $conn->query($update_sql);
            echo "Auction ID $auction_id has been CANCELED due to insufficient bidders.\n";
        } else {
            // Find the highest bid
            $result_highest_bid = mysqli_query($conn, "SELECT bidder_id, MAX(bid_value) as highest_bid FROM tblbid WHERE auction_item_id = $auction_id GROUP BY bidder_id ORDER BY highest_bid DESC LIMIT 1");
            $highest_bidder = mysqli_fetch_assoc($result_highest_bid);

            if ($highest_bidder) {
                $winner_bidder_id = $highest_bidder['bidder_id'];

                // Update the auction status to COMPLETED
                $update_sql = "UPDATE tblauctionitem SET auction_status = 'COMPLETED', winner_id = $winner_bidder_id WHERE id = $auction_id";
                $conn->query($update_sql);

                echo "Auction ID $auction_id has been COMPLETED. Winner is bidder ID $winner_bidder_id.\n";

                // Update tblbidderpayment for the winning bidder
                $update_winner_sql = "UPDATE tblbidderpayment SET emd_refund = 'notApplicable', full_payment = 'pending' WHERE auction_item_id = $auction_id AND bidder_id = $winner_bidder_id";
                $conn->query($update_winner_sql);

                // Update tblbidderpayment for losing bidders
                $update_loser_sql = "UPDATE tblbidderpayment SET emd_refund = 'pending', full_payment = 'notApplicable' WHERE auction_item_id = $auction_id AND bidder_id != $winner_bidder_id";
                $conn->query($update_loser_sql);

                echo "Bidders updated for auction ID $auction_id. Winner has 'full_payment = pending' and losers have 'emd_refund = pending'.\n";
            }
        }
    }
}
?>
