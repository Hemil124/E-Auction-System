<?php

session_start();
include 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/SMTP.php';

if (isset($_POST['id']) && is_numeric($_POST['id']) && isset($_POST['action'])) {
    $itemId = $_POST['id'];
    $verifyStatus = '';
    $result = mysqli_query($conn, "Select * from tblitem where id=$itemId");
    $row = mysqli_fetch_assoc($result);
    // Check if the rejection reason is provided
    $reason = isset($_POST['reason']) && !empty(trim($_POST['reason'])) ? $_POST['reason'] : ''; // Ensure reason is not empty
    echo $reason;
    echo '<script>alert("' . $reason . '");</script>';
    // Debugging: Log the form submission
    error_log("Form submitted with reason: " . print_r($_POST, true));

    $statuses = [
        'verify' => 'VERIFIED',
        'reject' => 'REJECTED'
    ];

    if (array_key_exists($_POST['action'], $statuses)) {
        $verifyStatus = $statuses[$_POST['action']];
    } else {
        echo "Invalid action.";
        exit();
    }

    // Update the item status in the database
    $query = "UPDATE tblitem SET verify_status = '$verifyStatus' WHERE id = $itemId";

    if ($conn->query($query) === TRUE) {
        // Send email with the rejection reason if rejected
        sendEmail("22bmiit142@gmail.com", $verifyStatus, $reason,$row['name']);
//        header("Location: admin-item-list.php?message=Status updated successfully.");
    } else {
        echo "Error updating status: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

function sendEmail($recipient_email, $status, $reason,$iname) {
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
        $mail->Body = getEmailTemplate($status, $reason,$iname);

        // Send the email
        $mail->send();

        echo "<script>alert('Email sent successfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

function getEmailTemplate($status, $reason, $itemName) {
    $message = '';
    if ($status === 'VERIFIED') {
        $message = '
            <div class="content">
                <h2>Congratulations!</h2>
                <p>Your item <strong>' . htmlspecialchars($itemName) . '</strong> has been successfully verified for auction.</p>
                <p>To proceed, please enter the auction details:</p>
                <p>Go to your profile, click on "My Items," and then click the "Verified" button next to the item.</p>
                <p>Complete the auction details to list your item.</p>
            </div>';
    } elseif ($status === 'REJECTED') {
        $message = '
            <div class="content">
                <h2>We regret to inform you</h2>
                <p>Your item <strong>' . htmlspecialchars($itemName) . '</strong> could not be verified for auction.</p>';

        // Check if the rejection reason is provided
        if (!empty($reason)) {
            $message .= '<p style="color: red;">Reason: ' . htmlspecialchars($reason) . '</p>';
        } else {
            $message .= '<p style="color: red;">Reason: Not Provided</p>';
        }

        $message .= '
                <p>Please review your item details and resubmit for verification.</p>
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

$conn->close();
?>


