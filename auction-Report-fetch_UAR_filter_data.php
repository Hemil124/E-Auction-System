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
            a.start_datetime AS start_time, 
            a.end_datetime AS end_time, 
            i.starting_price AS starting_price, 
            a.auction_status AS auction_status
           FROM 
            tblauctionitem a 
           LEFT JOIN 
            tblitem i ON a.item_id = i.id 
           LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
           LEFT JOIN 
            tblsellers s ON i.seller_id = s.id
           WHERE 
            a.id = '$auction_id'";
} elseif ($item_name) {
    $qu = "SELECT 
            a.id AS auction_id, 
            i.name AS item_name, 
            c.name AS category, 
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name, 
            a.start_datetime AS start_time, 
            a.end_datetime AS end_time, 
            i.starting_price AS starting_price, 
            a.auction_status AS auction_status
           FROM 
            tblauctionitem a 
           LEFT JOIN 
            tblitem i ON a.item_id = i.id 
           LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
           LEFT JOIN 
            tblsellers s ON i.seller_id = s.id
           WHERE 
            i.name LIKE '%$item_name%'";
}elseif ($category_name) {
    $qu = "SELECT 
            a.id AS auction_id, 
            i.name AS item_name, 
            c.name AS category, 
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name, 
            a.start_datetime AS start_time, 
            a.end_datetime AS end_time, 
            i.starting_price AS starting_price, 
            a.auction_status AS auction_status
           FROM 
            tblauctionitem a 
           LEFT JOIN 
            tblitem i ON a.item_id = i.id 
           LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
           LEFT JOIN 
            tblsellers s ON i.seller_id = s.id
           WHERE 
            c.name LIKE '%$category_name%'";
} else {
    $qu = "SELECT 
            a.id AS auction_id, 
            i.name AS item_name, 
            c.name AS category, 
            CONCAT(s.firstname, ' ', s.lastname) AS seller_name, 
            a.start_datetime AS start_time, 
            a.end_datetime AS end_time, 
            i.starting_price AS starting_price, 
            a.auction_status AS auction_status
           FROM 
            tblauctionitem a 
           LEFT JOIN 
            tblitem i ON a.item_id = i.id 
           LEFT JOIN 
            tblcategory c ON i.category_id = c.id 
           LEFT JOIN 
            tblsellers s ON i.seller_id = s.id
           WHERE 
            a.auction_status IN('ACTIVE', 'PENDING')";
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
                    <td data-purchase='Category'>{$r['category']}</td>
                    <td data-purchase='Seller'>{$r['seller_name']}</td>
                    <td data-purchase='Start Date'>{$r['start_time']}</td>
                    <td data-purchase='End Date'>{$r['end_time']}</td>
                    <td data-purchase='Starting Price'>{$r['starting_price']}</td>
                    <td data-purchase='Auction Status'>{$r['auction_status']}</td>
                </tr>";
}

echo $output;

?>