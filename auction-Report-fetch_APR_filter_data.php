<?php

include 'connection.php';

$auction_id = $_POST['auction_id'] ?? null; 
$item_name = $_POST['item_name'] ?? null;
$category_name = $_POST['category_name'] ?? null;

if ($auction_id) {
    $qu = "SELECT 
            a.id AS auction_id,
            i.name AS item_name,
            c.name AS category,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            COUNT(b.id) AS number_of_bids,
            MAX(b.bid_value) AS highest_bid,
            (SELECT b2.bid_value FROM tblbid b2 WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS final_auction_price,
            (SELECT CONCAT(b3.firstname, ' ', b3.lastname) FROM tblbid b2 
             INNER JOIN tblbidders b3 ON b2.bidder_id = b3.id 
             WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS winner_name,
            a.auction_status
    FROM 
            tblauctionitem a
    LEFT JOIN 
            tblitem i ON a.item_id = i.`id` 
    LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
    LEFT JOIN 
            tblbid b ON b.auction_item_id = a.id
    JOIN 
            tblsellers s ON i.seller_id = s.id
    WHERE 
            a.id = '$auction_id'
    GROUP BY 
            a.id, i.name, c.name, s.firstname, a.auction_status;";
} elseif ($item_name) {
    $qu = "SELECT 
            a.id AS auction_id,
            i.name AS item_name,
            c.name AS category,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            COUNT(b.id) AS number_of_bids,
            MAX(b.bid_value) AS highest_bid,
            (SELECT b2.bid_value FROM tblbid b2 WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS final_auction_price,
            (SELECT CONCAT(b3.firstname, ' ', b3.lastname) FROM tblbid b2 
             INNER JOIN tblbidders b3 ON b2.bidder_id = b3.id 
             WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS winner_name,
            a.auction_status
    FROM 
            tblauctionitem a
    LEFT JOIN 
            tblitem i ON a.item_id = i.`id` 
    LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
    LEFT JOIN 
            tblbid b ON b.auction_item_id = a.id
    JOIN 
            tblsellers s ON i.seller_id = s.id
    WHERE 
            i.name LIKE '%$item_name%'
    GROUP BY 
            a.id, i.name, c.name, s.firstname, a.auction_status;";
}elseif ($category_name) {
    $qu = "SELECT 
            a.id AS auction_id,
            i.name AS item_name,
            c.name AS category,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            COUNT(b.id) AS number_of_bids,
            MAX(b.bid_value) AS highest_bid,
            (SELECT b2.bid_value FROM tblbid b2 WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS final_auction_price,
            (SELECT CONCAT(b3.firstname, ' ', b3.lastname) FROM tblbid b2 
             INNER JOIN tblbidders b3 ON b2.bidder_id = b3.id 
             WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS winner_name,
            a.auction_status
    FROM 
            tblauctionitem a
    LEFT JOIN 
            tblitem i ON a.item_id = i.`id` 
    LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
    LEFT JOIN 
            tblbid b ON b.auction_item_id = a.id
    JOIN 
            tblsellers s ON i.seller_id = s.id
    WHERE 
            c.name LIKE '%$category_name%'
    GROUP BY 
            a.id, i.name, c.name, s.firstname, a.auction_status;";
} else {
    $qu = "SELECT 
            a.id AS auction_id,
            i.name AS item_name,
            c.name AS category,
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
            COUNT(b.id) AS number_of_bids,
            MAX(b.bid_value) AS highest_bid,
            (SELECT b2.bid_value FROM tblbid b2 WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS final_auction_price,
            (SELECT CONCAT(b3.firstname, ' ', b3.lastname) FROM tblbid b2 
             INNER JOIN tblbidders b3 ON b2.bidder_id = b3.id 
             WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS winner_name,
            a.auction_status
    FROM 
            tblauctionitem a
    LEFT JOIN 
            tblitem i ON a.item_id = i.`id` 
    LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
    LEFT JOIN 
            tblbid b ON b.auction_item_id = a.id
    JOIN 
            tblsellers s ON i.seller_id = s.id
    GROUP BY 
            a.id, i.name, c.name, s.firstname, a.auction_status;";
}

$q = mysqli_query($conn, $qu);

if (!$q) {
    die("Error: " . mysqli_error($conn));
}

$output = '';
while ($r = mysqli_fetch_assoc($q)) {
    $output .= "<tr>
                    <td>{$r['auction_id']}</td>
                    <td>{$r['item_name']}</td>
                    <td>{$r['category']}</td>
                    <td>{$r['seller_name']}</td>
                    <td>{$r['number_of_bids']}</td>
                    <td>{$r['highest_bid']}</td>
                    <td>{$r['final_auction_price']}</td>
                    <td>{$r['winner_name']}</td>
                    <td>{$r['auction_status']}</td>
                </tr>";
}

echo $output;
?>