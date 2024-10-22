<?php

function getSuggestions($searchTerm) {

    include 'connection.php';
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $searchTerm = mysqli_real_escape_string($conn, $searchTerm);

    $query = "SELECT name FROM tblitem WHERE name LIKE '$searchTerm%' OR name LIKE '%$searchTerm%' LIMIT 5";
    $result = mysqli_query($conn, $query);

    $suggestions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $suggestions[] = $row['name'];
    }

    mysqli_close($conn);

    return $suggestions;
}

if (isset($_GET['term'])) {
    $term = $_GET['term'];
    $suggestions = getSuggestions($term);
    echo json_encode($suggestions);
    exit();
}
?>
