<?php
include 'connection.php';
$sql = "UPDATE `tblauctionitem` SET `winner_id` = 2 WHERE id = 26;";
mysqli_query($conn, $sql);
header("Location:contact.php");
?>
