<?php

$id = $_GET['id'];
try {
    include 'connection.php';
    $result = mysqli_query($conn, "update tblcategory set status='Inactive' where id='$id'");
    if ($result) {
        echo "<script>window.location.href = 'All_Category.php'</script>";
    }
} catch (Exception $ex) {
    echo '<script>alert("Some this Went Wrong Database Side");</script>';
}
?>

