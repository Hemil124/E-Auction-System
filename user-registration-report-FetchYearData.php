<?php
include 'connection.php';

if (isset($_GET['year'])) {
    $year = $_GET['year'];

    $query = "SELECT MONTH(created_date) as month, COUNT(*) as user_count FROM tblsellers WHERE YEAR(created_date) = '$year' GROUP BY MONTH(created_date)";
    $result = mysqli_query($conn, $query);
    
    $sellers = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $sellers[] = array("label" => date('F', mktime(0, 0, 0, $row['month'], 10)), "y" => (int)$row['user_count']);
    }

    $query = "SELECT MONTH(created_date) as month, COUNT(*) as user_count FROM tblbidders WHERE YEAR(created_date) = '$year' GROUP BY MONTH(created_date)";
    $result = mysqli_query($conn, $query);

    $bidders = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $bidders[] = array("label" => date('F', mktime(0, 0, 0, $row['month'], 10)), "y" => (int)$row['user_count']);
    }
    echo json_encode(array("sellers" => $sellers, "bidders" => $bidders));

}
?>
