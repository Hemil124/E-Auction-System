<?php
include 'connection.php';
// Get auction item ID and bidder ID from form submission (assuming POST method)
$auction_item_id = $_POST['auction_item_id'];  
$bidder_id = $_POST['bidder_id'];

// Insert query for initial registration
$sql = "INSERT INTO tblbidderpayment (auction_item_id, bidder_id, emd_refund, full_payment) 
        VALUES ('$auction_item_id', '$bidder_id', 'notApplicable', 'notApplicable')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful, bidder payment record created.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
