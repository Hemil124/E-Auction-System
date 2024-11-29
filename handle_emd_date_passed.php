
<?php

include 'connection.php';

if (isset($_POST['auction_id'], $_POST['min_bidders'], $_POST['reserve_price'])) {
    $auction_id = $_POST['auction_id'];
    $min_bidders = $_POST['min_bidders'];
    $reserve_price = $_POST['reserve_price'];

    $result = mysqli_query($conn, "Select * from  tblauctionitem where id=$auction_id");
    $auctionItem_details = mysqli_fetch_assoc($result);

    $itemId = $auctionItem_details['item_id '];

    $result1 = mysqli_query($conn, "select * from tblitem where id=$itemId");
    $item_details = mysqli_fetch_assoc($result1);
    $iname = $item_details['name'];

    $seller_id = $item_details['seller_id'];

    $result = mysqli_query($conn, "select * from tblsellers where id=$seller_id");
    $seller_details = mysqli_fetch_assoc($result);
    $semail = $seller_details['email'];
    
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
        sendEmail($semail, $iname);
    }
}

//Email Send Functions

function sendEmail($recipient_email, $iname) {
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
        $mail->Body = getEmailTemplate($iname);

        // Send the email
        $mail->send();

        echo "<script>alert('Email sent successfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

function getEmailTemplate($itemName) {

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
            <div class="content">
                <h2>We regret to inform you</h2>
                <p>Your item <strong>' . htmlspecialchars($itemName) . '</strong> Auction is CANCELED.</p>
                <p style="color: red;">Reason: due to insufficient bidders.</p>
            </div>
            <div class="footer">
                <p>© 2024 E-Auction System. All rights reserved.</p>
                <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
            </div>
        </div>
    </body>
    </html>';
}

?>
