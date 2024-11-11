<?php
include 'connection.php';

$item_id = $_GET['item_id'];

// Fetch the auction item details (including starting price and increment value)
$result_auctionItem = mysqli_query($conn, "SELECT * FROM tblauctionitem WHERE item_id = $item_id");
$auctionItem_details = mysqli_fetch_assoc($result_auctionItem);

// Fetch the latest bid details
$result_bid = mysqli_query($conn, "SELECT MAX(bid_value) AS current_bid FROM tblbid WHERE auction_item_id = " . $auctionItem_details['id']);
$bid_details = mysqli_fetch_assoc($result_bid);

// Calculate the current price (either starting price + increment or highest bid + increment)
$current_bid = !empty($bid_details['current_bid']) ? $bid_details['current_bid'] : $auctionItem_details['starting_price'];
$next_bid = $current_bid + $auctionItem_details['increment_value'];

// Return the data in JSON format
echo json_encode([
    'current_bid' => $current_bid,
    'next_bid' => $next_bid,
    'active_bidders' => $bid_details['active_bidders'],
    'total_bids' => $bid_details['total_bids']
]);
?>
