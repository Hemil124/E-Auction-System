<?php
// Include the database connection
include 'connection.php';

// Check if the state_id parameter is set
if (isset($_GET['state_id'])) {
    $state_id = $_GET['state_id'];

    // Fetch cities based on the selected state
    $query = "SELECT * FROM tblcity WHERE state_id = '$state_id'";
    $result = mysqli_query($conn, $query);

    $cities = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $cities[] = array("id" => htmlspecialchars($row['id']), "name" => htmlspecialchars($row['name']));
    }

    // Return the cities as a JSON response
    echo json_encode($cities);
}

// Close the database connection
mysqli_close($conn);
?>