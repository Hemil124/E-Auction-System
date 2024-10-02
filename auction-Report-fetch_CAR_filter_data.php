<?php

include 'connection.php';

$auction_id = $_POST['auction_id'] ?? null; 
$item_name = $_POST['item_name'] ?? null;
$category_name = $_POST['category_name'] ?? null;

if ($auction_id) {
    $qu = "SELECT 
            ai.id AS auction_id,
            i.name AS item_name,
            c.name AS category_name,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            ai.end_datetime AS auction_endtime,
            b.max_bid_value AS final_auction_price,
            CONCAT(bd.firstname, ' ', bd.lastname) AS winner_bidder_name
           FROM 
            tblauctionitem ai
           LEFT JOIN tblitem i ON ai.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           LEFT JOIN tblsellers s ON i.seller_id = s.id
           LEFT JOIN (
               SELECT auction_item_id, MAX(bid_value) AS max_bid_value, bidder_id
               FROM tblbid
               GROUP BY auction_item_id
           ) b ON b.auction_item_id = ai.id
           LEFT JOIN tblbidders bd ON bd.id = b.bidder_id
           WHERE 
            ai.id = '$auction_id' AND ai.auction_status = 'closed'
           GROUP BY 
            ai.id, i.name, c.name, s.firstname, s.lastname, ai.end_datetime, bd.firstname, bd.lastname";
} elseif ($item_name) {
    $qu = "SELECT 
            ai.id AS auction_id,
            i.name AS item_name,
            c.name AS category_name,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            ai.end_datetime AS auction_endtime,
            b.max_bid_value AS final_auction_price,
            CONCAT(bd.firstname, ' ', bd.lastname) AS winner_bidder_name
           FROM 
            tblauctionitem ai
           LEFT JOIN tblitem i ON ai.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           LEFT JOIN tblsellers s ON i.seller_id = s.id
           LEFT JOIN (
               SELECT auction_item_id, MAX(bid_value) AS max_bid_value, bidder_id
               FROM tblbid
               GROUP BY auction_item_id
           ) b ON b.auction_item_id = ai.id
           LEFT JOIN tblbidders bd ON bd.id = b.bidder_id
           WHERE 
            i.name LIKE '%$item_name%' AND ai.auction_status = 'closed'
           GROUP BY 
            ai.id, i.name, c.name, s.firstname, s.lastname, ai.end_datetime, bd.firstname, bd.lastname";
}elseif ($category_name) {
    $qu = "SELECT 
            ai.id AS auction_id,
            i.name AS item_name,
            c.name AS category_name,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            ai.end_datetime AS auction_endtime,
            b.max_bid_value AS final_auction_price,
            CONCAT(bd.firstname, ' ', bd.lastname) AS winner_bidder_name
           FROM 
            tblauctionitem ai
           LEFT JOIN tblitem i ON ai.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           LEFT JOIN tblsellers s ON i.seller_id = s.id
           LEFT JOIN (
               SELECT auction_item_id, MAX(bid_value) AS max_bid_value, bidder_id
               FROM tblbid
               GROUP BY auction_item_id
           ) b ON b.auction_item_id = ai.id
           LEFT JOIN tblbidders bd ON bd.id = b.bidder_id
           WHERE 
            c.name LIKE '%$category_name%' AND ai.auction_status = 'closed'
           GROUP BY 
            ai.id, i.name, c.name, s.firstname, s.lastname, ai.end_datetime, bd.firstname, bd.lastname";
} else {
    $qu = "SELECT 
            ai.id AS auction_id,
            i.name AS item_name,
            c.name AS category_name,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            ai.end_datetime AS auction_endtime,
            b.max_bid_value AS final_auction_price,
            CONCAT(bd.firstname, ' ', bd.lastname) AS winner_bidder_name
           FROM 
            tblauctionitem ai
           LEFT JOIN tblitem i ON ai.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           LEFT JOIN tblsellers s ON i.seller_id = s.id
           LEFT JOIN (
               SELECT auction_item_id, MAX(bid_value) AS max_bid_value, bidder_id
               FROM tblbid
               GROUP BY auction_item_id
           ) b ON b.auction_item_id = ai.id
           LEFT JOIN tblbidders bd ON bd.id = b.bidder_id
           WHERE 
            ai.auction_status = 'closed'
           GROUP BY 
            ai.id, i.name, c.name, s.firstname, s.lastname, ai.end_datetime, bd.firstname, bd.lastname";
}

$q = mysqli_query($conn, $qu);

if (!$q) {
    die("Error: " . mysqli_error($conn));
}

$output = '';
while ($r = mysqli_fetch_assoc($q)) {
    $output .= "<tr>
                    <td data-purchase='Auction ID'>{$r['auction_id']}</td>
                    <td data-purchase='Item Name'>{$r['item_name']}</td>
                    <td data-purchase='Category'>{$r['category_name']}</td>
                    <td data-purchase='Seller'>{$r['seller_name']}</td>
                    <td data-purchase='Auction End Time'>{$r['auction_endtime']}</td>
                    <td data-purchase='Final Auction Price'>{$r['final_auction_price']}</td>
                    <td data-purchase='Winner Bidder'>{$r['winner_bidder_name']}</td>
                </tr>";
}

echo $output;

?>