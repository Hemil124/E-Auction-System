<?php
include 'connection.php';

$item_id = $_GET['item_id'];

// Fetch the auction item details
$result_auctionItem = mysqli_query($conn, "SELECT * FROM tblauctionitem WHERE item_id = $item_id");
$auctionItem_details = mysqli_fetch_assoc($result_auctionItem);

// Fetch the latest bid details
$result_bid = mysqli_query($conn, "SELECT bid_value, MAX(bid_value) AS current_bid, COUNT(DISTINCT(bidder_id)) AS active_bidders, COUNT(*) AS total_bids FROM tblbid WHERE auction_item_id = " . $auctionItem_details['id']);
$bid_details = mysqli_fetch_assoc($result_bid);

// Return the data in JSON format
echo json_encode([
    'current_bid' => $bid_details['current_bid'],
    'active_bidders' => $bid_details['active_bidders'],
    'total_bids' => $bid_details['total_bids']
]);
?>
