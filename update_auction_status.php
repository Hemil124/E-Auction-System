<?php
include 'connection.php';

if (isset($_POST['auction_id']) && isset($_POST['status'])) {
    $auction_id = $_POST['auction_id'];
    $status = $_POST['status'];

    $sql = "UPDATE tblauctionitem SET auction_status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $auction_id);
    $stmt->execute();

    echo "Auction ID $auction_id updated to $status.";
}
?>
