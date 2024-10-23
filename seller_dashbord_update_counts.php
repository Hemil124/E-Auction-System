<?php

include 'connection.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to count active auctions for seller_id = 1
$sqlActiveAuction = "SELECT COUNT(*) AS count FROM tblauctionitem a JOIN tblitem i ON a.item_id = i.id WHERE i.seller_id = 1 AND a.auction_status = 'active';";

// SQL query to count sold items for seller_id = 1
$sqlItemsSold = "SELECT COUNT(*) AS count FROM tblitem WHERE seller_id = 1 AND verify_status = 'sold';";

// SQL query to count total listed items for seller_id = 1
$sqlTotalListedItem = "SELECT COUNT(*) AS count FROM tblitem WHERE seller_id = 1;";

// Execute the queries and store the results
$resultActiveAuction = mysqli_query($conn, $sqlActiveAuction);
$resultItemsSold = mysqli_query($conn, $sqlItemsSold);
$resultTotalListedItem = mysqli_query($conn, $sqlTotalListedItem);

// Fetch the counts from the result sets
$activeAuctionCount = 0;
$itemsSoldCount = 0;
$totalListedItemCount = 0;

if ($resultActiveAuction && mysqli_num_rows($resultActiveAuction) > 0) {
    $row = mysqli_fetch_assoc($resultActiveAuction);
    $activeAuctionCount = $row['count']; // Use 'count' since that's the alias
}

if ($resultItemsSold && mysqli_num_rows($resultItemsSold) > 0) {
    $row = mysqli_fetch_assoc($resultItemsSold);
    $itemsSoldCount = $row['count']; // Use 'count' since that's the alias
}

if ($resultTotalListedItem && mysqli_num_rows($resultTotalListedItem) > 0) {
    $row = mysqli_fetch_assoc($resultTotalListedItem);
    $totalListedItemCount = $row['count']; // Use 'count' since that's the alias
}

// Close the database connection
mysqli_close($conn);

// Output the updated counts in JSON format
echo json_encode(array(
    'activeAuctionCount' => $activeAuctionCount,
    'itemsSoldCount' => $itemsSoldCount,
    'totalListedItemCount' => $totalListedItemCount
));
?>
