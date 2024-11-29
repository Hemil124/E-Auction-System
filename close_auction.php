<?php

include 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/SMTP.php';
//$_POST['auction_id']=32;
//$_POST['reserve_price']=500;
if (isset($_POST['auction_id']) && isset($_POST['reserve_price'])) {
    $auction_id = $_POST['auction_id'];
    $reserve_price = $_POST['reserve_price'];

    // Fetch the highest bid and the second-highest bid
    $result_highest_bid = $conn->query("SELECT bidder_id, bid_value, bid_datetime FROM tblbid WHERE auction_item_id = $auction_id ORDER BY bid_value DESC, bid_datetime ASC LIMIT 2");
    
    $result = mysqli_query($conn, "Select * from  tblauctionitem where id=$auction_id");
    $auctionItem_details = mysqli_fetch_assoc($result);

    $itemId = $auctionItem_details['item_id'];

    $result1 = mysqli_query($conn, "select * from tblitem where id=$itemId");
    $item_details = mysqli_fetch_assoc($result1);
    $iname = $item_details['name'];

    $seller_id = $item_details['seller_id'];

    $result = mysqli_query($conn, "select * from tblsellers where id=$seller_id");
    $seller_details = mysqli_fetch_assoc($result);
    $semail = $seller_details['email'];

    if ($result_highest_bid->num_rows >= 2) {
        $highest_bidder = $result_highest_bid->fetch_assoc(); // First highest bid
        $second_highest_bidder = $result_highest_bid->fetch_assoc(); // Second highest bid

        $highest_bid = $highest_bidder['bid_value'];
        $second_highest_bid = $second_highest_bidder['bid_value'];
        $highest_bidder_id = $highest_bidder['bidder_id'];
        $second_highest_bidder_id = $second_highest_bidder['bidder_id'];

        // Check if the highest bid meets or exceeds the reserve price
        if ($highest_bid >= $reserve_price) {
            // Check if the highest bid and second highest bid are the same
            if ($highest_bid == $second_highest_bid) {
                // If the bids are the same, check their timestamps
                if ($highest_bidder['bid_datetime'] == $second_highest_bidder['bid_datetime']) {
                    // If the timestamps are the same, select the bidder with the smallest bidder_id (FIFO)
                    if ($highest_bidder_id < $second_highest_bidder_id) {
                        $winner_bidder_id = $highest_bidder_id;
                    } else {
                        $winner_bidder_id = $second_highest_bidder_id;
                    }
                } else {
                    // Select the bid placed first by timestamp
                    $winner_bidder_id = ($highest_bidder['bid_datetime'] < $second_highest_bidder['bid_datetime']) ? $highest_bidder_id : $second_highest_bidder_id;
                }
            } else {
                // If the highest bid is greater than the second-highest, the highest bidder is the winner
                $winner_bidder_id = $highest_bidder_id;
            }

            // Update the auction status to COMPLETED and set winner ID
            $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'CLOSED', winner_id = ? WHERE id = ?";
            $stmt = $conn->prepare($update_auction_sql);
            $stmt->bind_param("ii", $winner_bidder_id, $auction_id);
            $stmt->execute();

            // Update the item to mark it as sold
            $result_item = $conn->query("SELECT item_id FROM tblauctionitem WHERE id = $auction_id");
            $item = $result_item->fetch_assoc();
            $item_id = $item['item_id'];

            $update_item_sql = "UPDATE tblitem SET verify_status = 'sold' WHERE id = ?";
            $stmt = $conn->prepare($update_item_sql);
            $stmt->bind_param("i", $item_id);
            $stmt->execute();

            // Update bidder payments
            // Winner: Full payment pending
            $update_winner_sql = "UPDATE tblbidderpayment SET emd_refund = 'notApplicable', full_payment = 'pending' WHERE auction_item_id = ? AND bidder_id = ?";
            $stmt = $conn->prepare($update_winner_sql);
            $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
            $stmt->execute();

            // Other bidders: EMD refund pending
            $update_loser_sql = "UPDATE tblbidderpayment SET emd_refund = 'pending', full_payment = 'notApplicable' WHERE auction_item_id = ? AND bidder_id != ?";

            $stmt = $conn->prepare($update_loser_sql);
            $stmt->bind_param("ii", $auction_id, $winner_bidder_id);
            $stmt->execute();

            echo "Auction ID $auction_id COMPLETED. Winner: Bidder ID $winner_bidder_id with bid $highest_bid. Item marked as 'sold'.";
            $result = mysqli_query($conn, "select * from tblbidders where id=$winner_bidder_id");
            $bidder_details = mysqli_fetch_assoc($result);

            $reason = "Dear ".$bidder_details['firstname'].",
We are pleased to inform you that you have won the auction for ".$iname." with your bid of ".$highest_bid."";
            sendEmail($bidder_details['email'], "WINNER", $reason, $iname);
        } else {
            // Reserve price not met, cancel the auction
            $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
            $stmt = $conn->prepare($update_auction_sql);
            $stmt->bind_param("i", $auction_id);
            $stmt->execute();

            echo "Auction ID $auction_id CANCELED. Reserve price not met.";
            $reason = "Reserve price not met.";
            sendEmail($semail, "CANCELED", $reason, $iname);
        }
    } else {
        // No bids placed, cancel the auction
        $update_auction_sql = "UPDATE tblauctionitem SET auction_status = 'CANCELED' WHERE id = ?";
        $stmt = $conn->prepare($update_auction_sql);
        $stmt->bind_param("i", $auction_id);
        $stmt->execute();

        echo "Auction ID $auction_id CANCELED. No bids were placed.";
        $reason = "No bids were placed";
        sendEmail($semail, "CANCELED", $reason, $iname);
    }
}

//Email Send Functions

function sendEmail($recipient_email, $status, $reason, $iname) {
    try {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'krofficial22@gmail.com';
        $mail->Password = 'wsrfurniipemkhuc';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('krofficial22@gmail.com', 'E-Auction');
        $mail->addAddress($recipient_email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'E-Auction System';
        $mail->Body = getEmailTemplate($status, $reason, $iname);

        // Send the email
        $mail->send();

        echo "<script>alert('Email sent successfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

function getEmailTemplate($status, $reason, $itemName) {
    $message = '';
    if ($status === 'WINNER') {
        $message = '
            <div class="content">
                <h2>Congratulations!</h2>
                <p><strong>' . htmlspecialchars($reason) . '</strong>.</p>
                <p>To proceed, Please make sure to complete the payment within 2 Days:</p>
                <p>Go to your profile, click on "My Wins," and then click the "Make Payment" button.</p>
                <p>Complete the Payment And Get the item Delivery.</p>
            </div>';
    } elseif ($status === 'CANCELED') {
        $message = '
            <div class="content">
                <h2>We regret to inform you</h2>
                <p>Your item <strong>' . htmlspecialchars($itemName) . '</strong> Auction is CANCELED.</p>';

        // Check if the rejection reason is provided
        if (!empty($reason)) {
            $message .= '<p style="color: red;">Reason: ' . htmlspecialchars($reason) . '</p>';
        }
//        else {
//            $message .= '<p style="color: red;">Reason: Not Provided</p>';
//        }

        $message .= '
            </div>';
    }

    return '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .header {
                background-color: #004f9f;
                color: #ffffff;
                padding: 10px;
                text-align: center;
            }
            .content {
                margin-top: 20px;
                text-align: center;
            }
            .footer {
                background-color: #f4f4f4;
                color: #666666;
                padding: 10px;
                text-align: center;
                font-size: 12px;
                border-top: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>E-Auction System</h1>
            </div>
            ' . $message . '
            <div class="footer">
                <p>© 2024 E-Auction System. All rights reserved.</p>
                <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
            </div>
        </div>
    </body>
    </html>';
}

?>
