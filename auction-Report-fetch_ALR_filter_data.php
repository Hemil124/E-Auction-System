<?php

include 'connection.php';

$auction_id = $_POST['auction_id'] ?? null;
$item_name = $_POST['item_name'] ?? null;
$category_name = $_POST['category_name'] ?? null;
$seller_name = $_POST['seller_name'] ?? null;
$auction_status = $_POST['auction_status'] ?? null;

if ($auction_id) {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id
           WHERE a.id = '$auction_id'";
} elseif ($item_name) {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id
           WHERE i.name LIKE '%$item_name%'";
}elseif ($category_name) {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id
           WHERE c.name LIKE '%$category_name%'";
}elseif ($seller_name) {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id
           WHERE s.firstname LIKE '%$seller_name%'";
}elseif ($auction_status) {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id
           WHERE a.auction_status = '$auction_status'";
} else {
    $qu = "SELECT a.id, i.name AS item_name, c.name AS category_name, s.firstname, 
                  a.start_datetime, a.end_datetime, i.starting_price, a.reserve_price, 
                  a.minimum_bidders, a.emd_amount, a.auction_status
           FROM tblauctionitem a
           LEFT JOIN tblitem i ON a.item_id = i.id
           LEFT JOIN tblcategory c ON i.category_id = c.id
           JOIN tblsellers s ON i.seller_id = s.id";
}

$q = mysqli_query($conn, $qu);

if (!$q) {
    die("Error: " . mysqli_error($conn));
}

$output = '';
while ($r = mysqli_fetch_assoc($q)) {
    $output .= "<tr>
                    <td data-purchase='Auction ID'>{$r['id']}</td>
                    <td data-purchase='Item Name'>{$r['item_name']}</td>
                    <td data-purchase='Category'>{$r['category_name']}</td>
                    <td data-purchase='Seller'>{$r['firstname']}</td>
                    <td data-purchase='Start Date'>{$r['start_datetime']}</td>
                    <td data-purchase='End Date'>{$r['end_datetime']}</td>
                    <td data-purchase='Starting Price'>{$r['starting_price']}</td>
                    <td data-purchase='Reserve Price'>{$r['reserve_price']}</td>
                    <td data-purchase='Minimum Bidders'>{$r['minimum_bidders']}</td>
                    <td data-purchase='EMD Amount'>{$r['emd_amount']}</td>
                    <td data-purchase='Auction Status'>{$r['auction_status']}</td>
                </tr>";
}

echo $output;

?>
