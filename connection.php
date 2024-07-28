<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "dbt_e-auction";

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
   echo "<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>";
   exit();

}
echo "OTP retrieved from session: " . $_SESSION['otp'];
?>