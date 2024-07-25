<?php
echo '<script>console.log("inside db");</script>';
// MySQL connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-auction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
} else {
    echo "<script>alert('Connection successful!');</script>";
}
?>