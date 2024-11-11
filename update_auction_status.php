<?php
// Database connection
include 'connection.php';

if (isset($_POST['auction_id'])) {
    $auction_id = $_POST['auction_id'];

    // Update the auction status to ACTIVE
    $sql = "UPDATE tblauctionitem SET auction_status = 'ACTIVE' WHERE id = $auction_id";
    if ($conn->query($sql) === TRUE) {
        echo "Auction $auction_id status updated to ACTIVE.";
    } else {
        echo "Error updating auction status: " . $conn->error;
    }
}
?>
