<?php
include 'connection.php'; // Include your database connection

// Set the status for fetching items
$status = "verified"; // You can modify this to 'rejected' as needed

// Prepare the SQL query based on the status
if ($status == 'verified') {
    $sql = "SELECT 
                tai.* 
            FROM 
                tblauctionitem tai
            JOIN 
                tblitem ti ON ti.id = tai.item_id
            WHERE 
                ti.seller_id = 1
                AND ti.verify_status = 'verified'";
} elseif ($status == 'rejected') {
    $sql = "SELECT 
                tai.* 
            FROM 
                tblauctionitem tai
            JOIN 
                tblitem ti ON ti.id = tai.item_id
            WHERE 
                ti.seller_id = 1
                AND ti.verify_status = 'rejected'";
} else {
    // If the status is not recognized, return an error message
    echo "Invalid status requested.";
    exit;
}

// Execute the SQL query
$result = $conn->query($sql);

// Check if there are results

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
        echo '            <div class="text-center">';
        if ($status == "Seller")
        {
                    echo '                <a href="seller_live_Auction.php?item_id=' . htmlspecialchars($row['item_id']) . '" class="custom-button">View Details</a>';
        }elseif ($status == "Bidder")
        {
                                echo '                <a href="bidder_Bid_placement.php?item_id=' . htmlspecialchars($row['item_id']) . '" class="custom-button">View Details</a>';
        }
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "No auctions found.";
}

$conn->close();
?>