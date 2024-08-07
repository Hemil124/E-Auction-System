<?php

//session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



function sendEmail($recipient_email) {
    require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\PHPMailer.php';
    require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\Exception.php';
    require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\SMTP.php';
    try {


         $otp = mt_rand(10000, 99999);
//        $otp = 11111;
        $_SESSION["otp"] = $otp;
        $timestamp = $_SERVER["REQUEST_TIME"];
        $_SESSION["otp_time"] = $timestamp;
       
        $mail = new PHPMailer(true);

        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hemilghori@gmail.com';
        $mail->Password = 'nkagldxfrrntpzuz';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender and recipient
        $mail->setFrom('hemilghori@gmail.com', 'E-Auction');
        $mail->addAddress($recipient_email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification OTP';
        $mail->Body = getEmailTemplate($otp);

        // Send email
        $mail->send();
        // Store OTP in session for verification

        $_SESSION['email'] = $recipient_email;

//        echo "<script>alert('OTP Send Succesfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

function getEmailTemplate($otp) {
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
            .otp-code {
                font-size: 24px;
                font-weight: bold;
                margin: 20px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>E-Auction System</h1>
            </div>
            <div class="content">
                <p>Dear User,</p>
                <p>Your One-Time Password (OTP) for email verification is:</p>
                <div class="otp-code">' . $otp . '</div>
                <p>Please use this OTP to verify your email address.</p>
                <p>If you did not request this OTP, please ignore this email.</p>
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