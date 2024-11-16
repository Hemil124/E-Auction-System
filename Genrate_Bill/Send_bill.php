<?php

//session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dbt_e-auction";

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    echo "<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>";
    exit();
}
require 'vendor/autoload.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/E-Auction-System/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use setasign\Fpdi\Fpdi;

$auction_item_id = isset($_GET['auction_item_id']) ? $_GET['auction_item_id'] : null;

// Fetch details from the database
$result = mysqli_query($conn, "SELECT * FROM tblauctionitem WHERE id=$auction_item_id");
$auctionItem_details = mysqli_fetch_assoc($result);

if (!$auctionItem_details) {
    echo "Auction item details not found.";
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM tblitem WHERE id=" . $auctionItem_details['item_id']);
$item_details = mysqli_fetch_assoc($result);

$result = mysqli_query($conn, "SELECT * FROM tblbidders WHERE id=" . $auctionItem_details['winner_id']);
$bidder_details = mysqli_fetch_assoc($result);

$result_bid = mysqli_query($conn, "SELECT MAX(bid_value) AS current_bid FROM tblbid WHERE auction_item_id=" . $auctionItem_details['id'] . " AND bidder_id=" . $auctionItem_details['winner_id']);
$bid_details = mysqli_fetch_assoc($result_bid);

if (isset($_SESSION['txtemail'])) {
    $b_email = $_SESSION['txtemail'];
    include 'find_ID.php';
    $bidder_Id = find_bidderID($b_email);
}
$order_Id = rand(111111, 999999);

// Function to send email with OTP and attached PDF
function sendEmail($recipient_email) {
    try {
        // Generate PDF and get the saved file path
        $pdfPath = generatePDF();

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
        $mail->Subject = 'Invoice from E-Auction System';
        $mail->Body = getEmailTemplate();

        // Attach the saved PDF
        $mail->addAttachment($pdfPath, 'invoice.pdf');

        // Send the email
        $mail->send();

        echo "<script>alert('Email with PDF sent successfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

class BillPDF extends Fpdi {

    // Header
    function Header() {
        $this->Image('C:/xampp/htdocs/E-Auction-System/assets/images/logo/logo.png', 10, 6, 30); // Adjust the path as needed
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(50);
        $this->Cell(90, 10, 'E-Auction System', 0, 0, 'C');
        $this->Ln(20);
    }

    // Footer
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

function generatePDF() {
    global $bidder_details;

    // Define the path to store invoices and load the invoice counter
    $invoicesDir = 'invoices';
    $counterFile = $invoicesDir . '/invoice_counter.txt';

    // Create the invoices directory if it doesn't exist
    if (!file_exists($invoicesDir)) {
        mkdir($invoicesDir, 0777, true);
    }

    // Read the current invoice number from the counter file or start from 1
    if (file_exists($counterFile)) {
        $invoiceNum = (int) file_get_contents($counterFile) + 1;
    } else {
        $invoiceNum = 1;
    }

    // Save the new invoice number back to the counter file
    file_put_contents($counterFile, $invoiceNum);

    // Generate the PDF
    $pdf = new BillPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);

    // Customer Information
    $pdf->Cell(0, 10, 'Customer Name: ' . $bidder_details['firstname'] . ' ' . $bidder_details['lastname'], 0, 1);
    $pdf->Cell(0, 10, 'Date: ' . date('d-m-Y'), 0, 1);
    $pdf->Cell(0, 10, 'Invoice #: ' . $invoiceNum, 0, 1);
    $pdf->Ln(10);

    // Table headers
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Item', 1);
    $pdf->Cell(30, 10, 'Quantity', 1);
    $pdf->Cell(40, 10, 'Unit Price', 1);
    $pdf->Cell(40, 10, 'Total', 1);
    $pdf->Ln();

    // Table content
    $pdf->SetFont('Arial', '', 12);
    $items = [
        ['Item 1', 'Description of item 1', 2, 15.00],
    ];

    $total = 0;
    foreach ($items as $item) {
        $lineTotal = $item[2] * $item[3];
        $pdf->Cell(40, 10, $item[0], 1);
        $pdf->Cell(40, 10, $item[1], 1);
        $pdf->Cell(30, 10, $item[2], 1);
        $pdf->Cell(40, 10, '$' . number_format($item[3], 2), 1);
        $pdf->Cell(40, 10, '$' . number_format($lineTotal, 2), 1);
        $pdf->Ln();
        $total += $lineTotal;
    }

    // Total amount
    $pdf->Cell(150, 10, 'Total', 1);
    $pdf->Cell(40, 10, '$' . number_format($total, 2), 1);
    $pdf->Ln(20);

    // Save the PDF with a unique filename in the invoices directory
    $filename = $invoicesDir . '/Invoice_' . $invoiceNum . '.pdf';
    $pdf->Output('F', $filename); // Save file to disk

    return $filename;
}

// HTML email template
function getEmailTemplate() {
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
                <p>Dear User,</p>
                <p>Your Invoice is attached.</p>
            </div>
            <div class="footer">
                <p>© 2024 E-Auction System. All rights reserved.</p>
                <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
            </div>
        </div>
    </body>
    </html>';
}

// Example usage
sendEmail('22bmiit142@gmail.com'); // Call sendEmail with the recipient's email address
?>