
<?php
session_start();
include 'connection.php'; // Ensure you have the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $itemId = $_POST['item_id'];
    $bidderId = $_POST['bidder_id'];

    if ($action == 'add') {
        // Insert into favorites
        $sql = "INSERT INTO tblfavoriteitem (item_id, bidder_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $itemId, $bidderId);
        $stmt->execute();
        echo 'Added to favorites';
    } elseif ($action == 'remove') {
        // Remove from favorites
        $sql = "DELETE FROM tblfavoriteitem WHERE item_id = ? AND bidder_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $itemId, $bidderId);
        $stmt->execute();
        echo 'Removed from favorites';
    }
}
?>