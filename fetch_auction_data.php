<?php
// Database connection
include 'connection.php';

// Query to get auctions with PENDING status
$sql = "SELECT id, start_datetime,end_datetime FROM tblauctionitem WHERE auction_status = 'PENDING'";
$result = $conn->query($sql);

$auctions = array();

// Fetch all results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $auctions[] = $row;  // Store auction details in array
    }
}

// Return the auction data as a JSON response
echo json_encode($auctions);
?>
