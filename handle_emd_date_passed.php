
<?php

include 'connection.php';

if (isset($_POST['auction_id'], $_POST['min_bidders'], $_POST['reserve_price'])) {
    $auction_id = $_POST['auction_id'];
    $min_bidders = $_POST['min_bidders'];
    $reserve_price = $_POST['reserve_price'];

    // Check registered bidders
    $result = $conn->query("SELECT COUNT(*) as bidders FROM tblbidderpayment WHERE auction_item_id = $auction_id AND emd_refund = 'notApplicable' AND full_payment = 'notApplicable'");
    $registered_users = $result->fetch_assoc();
    $num_bidders = $registered_users['bidders'];

    if ($num_bidders < $min_bidders) {
        $sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $auction_id);
        $stmt->execute();

        echo "Auction ID $auction_id has been CANCELED due to insufficient bidders.";
    }
}
?>
