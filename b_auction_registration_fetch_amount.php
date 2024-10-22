<?php
include 'connection.php';

$itemId = $_GET['item_id'];
echo $result = mysqli_query($conn, "SELECT emd_amount FROM tblauctionitem WHERE id = $itemId"); // Adjust the query as needed
$row = mysqli_fetch_assoc($result);

if ($row) {
    echo json_encode(['amount' => $row['amount']]);
} else {
    echo json_encode(['error' => 'Item not found']);
}
?>