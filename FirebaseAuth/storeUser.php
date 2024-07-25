<?php
require_once '../../E-Auction-System/dbConnection/dbConn.php';
echo '<script>console.log("inside store");</script>';
echo '<script>alert("inside store");</script>';
// Get the posted user data
$userData = json_decode(file_get_contents('php://input'), true);
// Insert user data into the database
$sql = "INSERT INTO tblusers (Email, MobileNo, FirstName, LastName, UserImage) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $userData['email'], $userData['phoneNumber'], $userData['FirstName'], $userData['LastName'], $userData['photoURL']);
echo '<script>alert("store successfully");</script>';
if (!$stmt->execute()) {
    echo '<script>alert("error");</script>';
    echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();
?>