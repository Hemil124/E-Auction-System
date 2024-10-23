<?php
include 'connection.php'; // Make sure you have a working connection to your database

// Current time
$current_time = date('Y-m-d H:i:s');

// Query to fetch auctions that need to be activated or canceled
$sql = "SELECT * FROM tblauctionitem WHERE auction_status IN ('PENDING', 'ACTIVE')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $auction_id = $row['id'];
        $start_datetime = $row['start_datetime'];
        $end_datetime = $row['end_datetime'];
        $minimum_bidders = $row['minimum_bidders'];
        $current_bidders = $row['current_bidders']; // Assuming you have a field to count current bidders
        $auction_status = $row['auction_status'];

        // Check if auction should be activated
        if ($auction_status == 'PENDING' && $current_time >= $start_datetime) {
            // Update auction status to ACTIVE
            $update_sql = "UPDATE tblauctionitem SET auction_status = 'ACTIVE' WHERE id = $auction_id";
            if ($conn->query($update_sql) === TRUE) {
                echo "Auction ID $auction_id is now ACTIVE.\n";
            } else {
                echo "Error updating auction status for auction ID $auction_id: " . $conn->error . "\n";
            }
        }

        // Check if auction should be canceled
        if ($auction_status == 'ACTIVE' && $current_time >= $end_datetime) {
            if ($current_bidders < $minimum_bidders) {
                // Not enough bidders, cancel the auction
                $update_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = $auction_id";
                if ($conn->query($update_sql) === TRUE) {
                    echo "Auction ID $auction_id has been CANCELED due to insufficient bidders.\n";
                } else {
                    echo "Error updating auction status for auction ID $auction_id: " . $conn->error . "\n";
                }
            } else {
                // Auction is completed, determine winner
                $winner_sql = "SELECT bidder_id FROM tblbid WHERE auction_item_id = $auction_id ORDER BY bid_value DESC LIMIT 1";
                $winner_result = $conn->query($winner_sql);
                if ($winner_result->num_rows > 0) {
                    $winner_row = $winner_result->fetch_assoc();
                    $winner_id = $winner_row['bidder_id'];
                    
                    // Update auction status and set winner
                    $update_sql = "UPDATE tblauctionitem SET auction_status = 'COMPLETED', winner_id = $winner_id WHERE id = $auction_id";
                    if ($conn->query($update_sql) === TRUE) {
                        echo "Auction ID $auction_id has been COMPLETED. Winner is Bidder ID $winner_id.\n";
                    } else {
                        echo "Error updating auction status for auction ID $auction_id: " . $conn->error . "\n";
                    }
                }
            }
        }
    }
} else {
    echo "No auctions found for update.\n";
}

// Close the database connection
$conn->close();
?>
