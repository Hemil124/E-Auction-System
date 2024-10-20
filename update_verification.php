<?php
session_start();
include 'connection.php';

if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['action'])) {
    $itemId = $_POST['id'];
    $verifyStatus = '';

    $statuses = [
        'verify' => 'VERIFIED',
        'reject' => 'REJECTED',
        'sold' => 'SOLD'
    ];

    if (array_key_exists($_POST['action'], $statuses)) {
        $verifyStatus = $statuses[$_POST['action']];
    } else {
        echo "Invalid action.";
        exit();
    }

    $query = "UPDATE tblitem SET verify_status = '$verifyStatus' WHERE id = $itemId";

    if ($conn->query($query) === TRUE) {
        header("Location: admin-item-list.php?message=Status updated successfully.");
    } else {
        echo "Error updating status: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>