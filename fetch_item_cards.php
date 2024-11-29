<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
//    $('.favorite-icon').on('click', function (e) {
//        e.preventDefault(); // Prevent default anchor click behavior
//        var itemId = $(this).data('item-id');
//        var bidderId = $(this).data('bidder-id');
//        var $icon = $(this).find('i');
//
//        // Check if the item is already favorited by checking the icon class
//        if ($icon.hasClass('far')) {
//            // Not favorited, so insert into favorites
//            $.ajax({
//                url: 'insert_favorites.php',
//                type: 'POST',
//                data: {
//                    action: 'add',
//                    item_id: itemId,
//                    bidder_id: bidderId
//                },
//                success: function (response) {
//                    // Change icon to checked
//                    $icon.removeClass('far').addClass('fas'); // Change to filled star
//                }
//            });
//        } else {
//            // Already favorited, so remove from favorites
//            $.ajax({
//                url: 'insert_favorites.php',
//                type: 'POST',
//                data: {
//                    action: 'remove',
//                    item_id: itemId,
//                    bidder_id: bidderId
//                },
//                success: function (response) {
//                    // Change icon to unchecked
//                    $icon.removeClass('fas').addClass('far'); // Change to empty star
//                }
//            });
//        }
//    });
    $('.favorite-icon').on('click', function (e) {
        e.preventDefault(); // Prevent default anchor click behavior
        var itemId = $(this).data('item-id');
        var bidderId = $(this).data('bidder-id');
        var $icon = $(this).find('i');

        // Check if the item is already favorited by checking the icon class
        if ($icon.hasClass('far')) {
            // Not favorited, so insert into favorites
            $.ajax({
                url: 'insert_favorites.php',
                type: 'POST',
                data: {
                    action: 'add',
                    item_id: itemId,
                    bidder_id: bidderId
                },
                success: function (response) {
                    // Change icon to checked
                    $icon.removeClass('far').addClass('fas'); // Change to filled star
                }
            });
        } else {
            // Already favorited, so remove from favorites
            $.ajax({
                url: 'insert_favorites.php',
                type: 'POST',
                data: {
                    action: 'remove',
                    item_id: itemId,
                    bidder_id: bidderId
                },
                success: function (response) {
                    // Change icon to unchecked
                    $icon.removeClass('fas').addClass('far'); // Change to empty star
                }
            });
        }
    });

</script>
<?php
session_start();
//Find Seller Id        
if (!isset($_SESSION['semail'])) {
//            include 'find_ID.php';
//            $sellerid=find_sellerID($_SESSION['semail']);
//            echo "<script>console.log($sellerid);</script>";
}

include 'connection.php';

// Get filters from request
$itemName = isset($_GET['itemName']) ? $_GET['itemName'] : '';
$status = isset($_GET['status']) ? $_GET['status'] : '';
$bidder_id = 2;
$sellerid = 1;
//$status = "mybids";
//Wrong Query Change the QUery
if ($status == "Bidder") {
//$sql = "SELECT * FROM tblauctionitem WHERE 1=1";
//    include 'find_ID.php';
//    $bidder_id=find_bidderID($_SESSION['txtemail']);

    if (isset($bidder_id)) {
        $sql = "
    SELECT 
        tai.* 
    FROM 
        tblauctionitem tai
    JOIN 
        tblbidderpayment tbp ON tai.id = tbp.auction_item_id
    WHERE 
        tbp.bidder_id = $bidder_id
        AND tai.auction_status = 'ACTIVE';
    ";
    }
} elseif ($status == "Seller") {
    if (isset($sellerid)) {
        $sql = "SELECT tblauctionitem.*, tblitem.name, tblitem.seller_id, tblitem.category_id, tblitem.description, tblitem.starting_price FROM tblauctionitem INNER JOIN tblitem ON tblauctionitem.item_id = tblitem.id WHERE tblauctionitem.auction_status = 'active' AND tblitem.seller_id = $sellerid;";
    }
} elseif ($status == "verified") {
    if (isset($sellerid)) {
        $sql = "SELECT 
                tai.* 
            FROM 
                tblauctionitem tai
            JOIN 
                tblitem ti ON ti.id = tai.item_id
            WHERE 
                ti.seller_id = $sellerid
                AND ti.verify_status = 'verified'";
    }
} elseif ($status == "rejected") {
    if (isset($sellerid)) {
        $sql = "SELECT 
                tai.* 
            FROM 
                tblauctionitem tai
            JOIN 
                tblitem ti ON ti.id = tai.item_id
            WHERE 
                ti.seller_id = $sellerid
                AND ti.verify_status = 'rejected'";
    }
} elseif ($status == "mybids") {
    $sql = "SELECT a.*
FROM tblauctionitem a
JOIN tblbidderpayment b ON a.id = b.auction_item_id
WHERE b.bidder_id = $bidder_id
AND a.winner_id = b.bidder_id;
";
}
//fetch Upcoming item
elseif ($status == "Upcoming") {
    $sql = "SELECT tblauctionitem.* 
        FROM tblauctionitem
        JOIN tblitem ON tblauctionitem.item_id = tblitem.id 
        WHERE tblauctionitem.auction_status = 'PENDING' 
        AND tblitem.verify_status = 'verified'";
//    echo '<script>alert("upcoming");</script>';
} elseif ($status == "myfavorites") {
    $sql = "SELECT `tblitem`.*, `tblauctionitem`.*, `tblfavoriteitem`.*
    FROM `tblitem` 
    LEFT JOIN `tblauctionitem` ON `tblauctionitem`.`item_id` = `tblitem`.`id` 
    LEFT JOIN `tblfavoriteitem` ON `tblfavoriteitem`.`item_id` = `tblitem`.`id`
    WHERE `tblfavoriteitem`.`bidder_id` = $bidder_id;";
}
if (!empty($itemName)) {

    // Ensure the SQL query has correct syntax
    $sql .= " AND item_id IN (SELECT id FROM tblitem WHERE name LIKE '%" . $conn->real_escape_string($itemName) . "%')";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Fetch item details
        $result_item = mysqli_query($conn, 'SELECT * FROM tblitem WHERE id=' . $row['item_id']);
        $row2 = mysqli_fetch_assoc($result_item);

        // Check for empty item data
        if (!$row2) {
            echo "No item found for auction ID: " . $row['item_id'];
            continue; // Skip to the next iteration
        }

        // Fetch image
//        $result_img = mysqli_query($conn, 'SELECT img FROM tblimg WHERE item_id=' . $row2['id']);
//        $img = mysqli_fetch_assoc($result_img);
        // Convert BLOB to base64
//        $imageSrc = isset($img) ? 'data:image/jpeg;base64,' . base64_encode($img['img']) : 'assets/images/product/default_product.png';
        // Fetch image array
        $imageArray = json_decode($row2['image_id'], true);

        // Get the first image
        $firstImage = !empty($imageArray) ? $imageArray[0] : 'default_image.png';
        // Fetch bid details
        $result_bid = mysqli_query($conn, 'SELECT MAX(bid_value) AS current_bid, COUNT(*) AS bids FROM tblbid WHERE auction_item_id=' . $row['id']);
        $row3 = mysqli_fetch_assoc($result_bid);

        // Display auction card
//        if ($status == "myfavorite") {
//            echo '<div class="col-sm-10 col-md-6 ">';
//        }
        if ($status == "Bidder" || $status == "Seller" || $status == "Upcoming") {
            echo '<div class="col-md-4 col-sm-6 card-container mb-4" style="padding: 47px;">'; // Make sure this is 4 columns wide to display 3 items per row
        } elseif ($status == "verified" || $status == "rejected" || $status == "mybids" || $status == "myfavorites") {
            echo '<div class="col-md-6 col-sm-8 card-container mb-6" style="padding: 47px;">'; // Make sure this is 4 columns wide to display 3 items per row
        }
        echo '    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">';
        echo '        <div class="auction-thumb">';
        echo '            <a href="product-details.php">';
        echo '                <img src="uploads/' . htmlspecialchars($firstImage) . '" alt="product" class="img-fluid">';
        echo '            </a>';
        if ($status == "Upcoming" || $status == "myfavorites") {
            // Check if the item is already in the favorites table
            $checkFavoriteQuery = "SELECT * FROM tblfavoriteitem WHERE item_id = ? AND bidder_id = ?";
            $stmt = $conn->prepare($checkFavoriteQuery);
            $stmt->bind_param("ii", $row['item_id'], $bidder_id);
            $stmt->execute();
            $resultFavorite = $stmt->get_result();

// Determine whether the item is in the favorites
            $favoriteStatus = $resultFavorite->num_rows > 0 ? 'favorite' : 'not-favorite';
// Display the favorite icon
            echo '<a href="#" class="rating favorite-icon ' . $favoriteStatus . '" data-item-id="' . htmlspecialchars($row['item_id']) . '" data-bidder-id="' . htmlspecialchars($bidder_id) . '">';
            echo $favoriteStatus == 'favorite' ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
            echo '</a>';
        }
        echo '        </div>';
        echo '        <div class="auction-content">';
        echo '            <h6 class="title"><a href="#0">' . htmlspecialchars($row2['name']) . '</a></h6>';
        if ($status == "Upcoming" || $status == "myfavorites") {
            echo '            <div class="bid-area">';
            echo '                <div class="bid-amount" style="width:100%;position:inherit;">';
            echo '                    <div class="icon"><i class="flaticon-auction"></i></div>';
//            echo '                    <div class="amount-content">';
            echo '                        <div class="current" style="font-size: 150%; margin:auto;">Starting Price</div>';
            echo '                        <div class="amount"  style="font-size: 100%;  margin-right:20px;">' . htmlspecialchars($row2['starting_price']) . '</div>';
//            echo '                    </div>';
            echo '                </div>';
            echo '            </div>';
        } else {
            echo '            <div class="bid-area">';
            echo '                <div class="bid-amount">';
            echo '                    <div class="icon"><i class="flaticon-auction"></i></div>';
            echo '                    <div class="amount-content">';
            echo '                        <div class="current" style="font-size: 100%;">Current Bid</div>';
            echo '                        <div class="amount"  style="font-size: 100%;">' . htmlspecialchars($row3['current_bid']) . '</div>';
            echo '                    </div>';
            echo '                </div>';
            echo '                <div class="bid-amount">';
            echo '                    <div class="amount-content">';
            echo '                        <div class="amount" style="color: red;">' . htmlspecialchars($row3['bids']) . ' Bids</div>';
            echo '                    </div>';
            echo '                </div>';
            echo '            </div>';
            echo '             <div class="countdown">';
            echo '                 <div id="bid_counter"></div>';
            echo'              </div>';
            echo '            <div class="text-center" style="margin-top:10%;">';
        }
        if ($status == "Seller") {
            echo '                <a href="seller_live_Auction.php?item_id=' . htmlspecialchars($row['item_id']) . '" class="custom-button">View Details</a>';
        } elseif ($status == "Bidder") {
            echo '                <a href="bidder_Bid_placement.php?item_id=' . htmlspecialchars($row['item_id']) . '" class="custom-button">View Details</a>';
        } elseif ($status == "Upcoming") {
            echo '                <a href="bidder_Item_Details.php?item_id=' . htmlspecialchars($row['item_id']) . '" class="custom-button" >View Details</a>';
        } elseif ($status == "mybids") {
            echo '                <a href="payscript.php?a=' . htmlspecialchars($row3['current_bid']) .
            '&auctionitem_id=' . htmlspecialchars($row['id']) .
            '" class="custom-button">Full Payment</a>';
        }
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "No auctions found.";
}
?>