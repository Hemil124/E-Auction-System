<?php
include 'connection.php';

// Fetch auction details from the database
$sql = "SELECT id, start_datetime, end_datetime, auction_status, reserve_price, emd_date FROM tblauctionitem WHERE auction_status IN ('PENDING', 'ACTIVE')";
$result = $conn->query($sql);

$auctions = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $auctions[] = [
            'id' => $row['id'],
            'start_datetime' => $row['start_datetime'],
            'end_datetime' => $row['end_datetime'],
            'auction_status' => $row['auction_status'],
            'reserve_price' => $row['reserve_price'],
            'emd_date' => $row['emd_date']
        ];
    }
}

// Send the auction data as JSON
header('Content-Type: application/json');
echo json_encode($auctions);
?>
