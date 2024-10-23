<?php

//session_start();
//without login can't open indexpage!!        
//        if (!isset($_SESSION['txtemail']) ) {
//            header("Location: sign-in.php");
//            exit();
//        }
?>
<?php

include 'connection.php';

// Get filters from request
$itemName = isset($_GET['itemName']) ? $_GET['itemName'] : '';
$status = isset($_GET['status']) ? $_GET['status'] : '';

if ($status == "Bidder") {
//$sql = "SELECT * FROM tblauctionitem WHERE 1=1";
    include 'find_ID.php';
//    $bidder_id=find_bidderID($_SESSION['txtemail']);
    $bidder_id = 2;
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
//    $sellerid = find_sellerID($_SESSION['txtemail']);
    $sellerid = 1;
    if (isset($sellerid)) {
        $sql = "SELECT tblauctionitem.*, tblitem.name, tblitem.seller_id, tblitem.category_id, tblitem.description, tblitem.starting_price FROM tblauctionitem INNER JOIN tblitem ON tblauctionitem.item_id = tblitem.id WHERE tblauctionitem.auction_status = 'active' AND tblitem.seller_id = $sellerid;";
    }
}
//fetch Upcoming item
elseif ($status == "Upcoming") {
    $sql = "select * from tblauctionitem where auction_status='PENDING'";
}
// Build the SQL query based on the filters
// Add condition for item name search
if (!empty($itemName)) {
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
        $result_img = mysqli_query($conn, 'SELECT img FROM tblimg WHERE item_id=' . $row2['id']);
        $img = mysqli_fetch_assoc($result_img);

        // Convert BLOB to base64
        $imageSrc = isset($img) ? 'data:image/jpeg;base64,' . base64_encode($img['img']) : 'assets/images/product/default_product.png';

        // Fetch bid details
        $result_bid = mysqli_query($conn, 'SELECT MAX(bid_value) AS current_bid, COUNT(*) AS bids FROM tblbid WHERE auction_item_id=' . $row['id']);
        $row3 = mysqli_fetch_assoc($result_bid);

        // Display auction card
//        echo '<div class="col-sm-10 col-md-6 col-lg-4">';
//        echo '    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">';
        echo '<div class="col-md-4 col-sm-6 card-container mb-4" style="padding: 47px;">'; // Make sure this is 4 columns wide to display 3 items per row
        echo '    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">';
        echo '        <div class="auction-thumb">';
        echo '            <a href="product-details.php">';
        echo '                <img src="' . $imageSrc . '" alt="product" class="img-fluid">';
        echo '            </a>';
        echo '        </div>';
        echo '        <div class="auction-content">';
        echo '            <h6 class="title"><a href="#0">' . htmlspecialchars($row2['name']) . '</a></h6>';
        if ($status == "Upcoming") {
            echo '            <div class="bid-area">';
            echo '                <div class="bid-amount" style="width:100%;position:inherit;">';
            echo '                    <div class="icon"><i class="flaticon-auction"></i></div>';
//            echo '                    <div class="amount-content">';
            echo '                        <div class="current" style="font-size: 150%; margin:auto;">Starting Prince</div>';
            echo '                        <div class="amount"  style="font-size: 100%;  margin-right:20px;">' . htmlspecialchars($row2['starting_price']) . '</div>';
//            echo '                    </div>';
            echo '                </div>';
            echo '            </div>';
        } else {
//            echo '<script src="../E-Auction-System/assets/js/yscountdown.min.js" type="text/javascript"></script>
//        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>';
//            echo '<script>
//                        // PHP Variables
//                        let startDate = "'.$row['start_datetime'].'"; // Fetch start date from PHP
//                        let endDate ='.$row['end_datetime'].'"; // Fetch end date from PHP
//
//                        // Initialize the countdown only if the element exists
//                        if (document.querySelector("#bid_counter")) { // Correct way to check for existence
//                            // Create a new countdown instance
//                            let counterElement = document.querySelector("#bid_counter");
//                            let myCountDown = new ysCountDown(endDate, function (remaining, finished) {
//                                let message = "";
//                                if (finished) {
//                                    message = "Expired";
//                                } else {
//                                    let re_days = remaining.totalDays;
//                                    let re_hours = remaining.hours;
//                                    message += re_days + "d  : ";
//                                    message += re_hours + "h  : ";
//                                    message += remaining.minutes + "m  : ";
//                                    message += remaining.seconds + "s";
//                                }
//                                counterElement.textContent = message;
//                            });
//                        }
//                    </script>';
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