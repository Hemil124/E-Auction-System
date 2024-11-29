<?php

include 'connection.php';
$sellerid = 1;
$status = $_GET['status'];
if (isset($sellerid)) {
    $sql = "SELECT * FROM tblitem WHERE seller_id = $sellerid AND verify_status = '$status'";
}
$result = $conn->query($sql);

// Fetch image
// Convert BLOB to base64


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $result_img = mysqli_query($conn, "SELECT img FROM tblimg WHERE item_id=$id");
        $img = mysqli_fetch_assoc($result_img);
        $imageSrc = isset($img) ? 'data:image/jpeg;base64,' . base64_encode($img['img']) : 'assets/images/product/default_product.png';
        echo '<div class="col-md-6 col-sm-8 card-container mb-6" style="padding: 47px;">';  // Adjust layout for verified status
        echo '    <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">';
        echo '        <div class="auction-thumb">';
        echo '            <a href="product-details.php">';
        echo '                <img src="' . htmlspecialchars($imageSrc) . '" alt="product" class="img-fluid">';
        echo '            </a>';
        echo '        </div>';
        echo '        <div class="auction-content">';
        echo '            <h6 class="title"><a href="#0">' . htmlspecialchars($row['name']) . '</a></h6>';
        echo '            <div class="text-center" style="margin-top:10%;">';
        echo '                <a href="add_auctionitem.php?item_id=' . htmlspecialchars($row['id']) . '" class="custom-button">Enter Auction Details</a>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
}
?>

