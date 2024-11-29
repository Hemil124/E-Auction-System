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

//$auction_item_id = isset($_GET['auction_item_id']) ? $_GET['auction_item_id'] : null;
$auction_item_id = 16;
// Fetch details from the database
$result = mysqli_query($conn, "SELECT * FROM tblauctionitem WHERE id=$auction_item_id");
$auctionItem_details = mysqli_fetch_assoc($result);

if (!$auctionItem_details) {
    echo "Auction item details not found.";
    exit;
}

// Fetch item details
$result = mysqli_query($conn, "SELECT * FROM tblitem WHERE id=" . $auctionItem_details['item_id']);
$item_details = mysqli_fetch_assoc($result);

// Fetch bidder details
$result = mysqli_query($conn, "SELECT * FROM tblbidders WHERE id=" . $auctionItem_details['winner_id']);
$bidder_details = mysqli_fetch_assoc($result);

// Fetch bid details
$result_bid = mysqli_query($conn, "SELECT MAX(bid_value) AS current_bid FROM tblbid WHERE auction_item_id=" . $auctionItem_details['id'] . " AND bidder_id=" . $auctionItem_details['winner_id']);
$bid_details = mysqli_fetch_assoc($result_bid);

// Fetch seller details
$result_seller = mysqli_query($conn, "SELECT * FROM tblsellers WHERE id=" . $item_details['seller_id']);
$seller_details = mysqli_fetch_assoc($result_seller);

if (isset($_SESSION['txtemail'])) {
    $b_email = $_SESSION['txtemail'];
    include 'find_ID.php';
    $bidder_Id = find_bidderID($b_email);
}

//$invoiceNum = rand(111111, 999999);
// Function to send email with OTP and attached PDF
function sendEmail($recipient_email) {
    try {
        // Generate PDF and get the saved file path
        $pdfPath = generateInvoice();

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
//        $mail->send();

        echo "<script>alert('Email with PDF sent successfully');</script>";
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
    }
}

class InvoicePDF extends FPDF {

    protected $angle = 0;

    // Rotate method for watermark
    function Rotate($angle, $x = -1, $y = -1) {
        if ($x == -1)
            $x = $this->x;
        if ($y == -1)
            $y = $this->y;
        if ($this->angle != 0)
            $this->_out('Q');
        $this->angle = $angle;
        if ($angle != 0) {
            $angleRad = $angle * M_PI / 180;
            $c = cos($angleRad);
            $s = sin($angleRad);
            $cx = $x * $this->k;
            $cy = ($this->h - $y) * $this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.5F %.5F cm 1 0 0 1 %.5F %.5F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy));
        }
    }

    function _endpage() {
        if ($this->angle != 0) {
            $this->angle = 0;
            $this->_out('Q');
        }
        parent::_endpage();
    }

    // Custom Header
    function Header() {
        // Add header background
        $this->SetFillColor(105, 63, 245); // Purple header color
        $this->Rect(0, 0, $this->w, 30, 'F');

        // Add logo
        $this->Image('C:/xampp/htdocs/E-Auction-System/assets/images/logo/logo.png', 10, 8, 30);

        // Add watermark
        $this->SetFont('Arial', 'B', 100);
        $this->SetTextColor(220, 220, 220); // Light gray for watermark
// Center watermark by calculating page center
        $x = ($this->w - $this->GetStringWidth('E-Auction')) / 2; // Center horizontally
        $y = $this->h / 2; // Center vertically

        $this->Rotate(60, $this->w / 2, $this->h / 2.5); // Diagonal rotation centered
        $this->Text($x, $y, 'E-Auction'); // Apply centered watermark text
        $this->Rotate(0); // Reset rotation
        // Add header text
        $this->SetFont('Arial', 'B', 14);
        $this->SetTextColor(255, 255, 255); // White text
        $this->Cell(80);
        $this->Cell(30, 10, 'Tax Invoice/Bill of Supply/Cash Memo', 0, 1, 'C');
        $this->Cell(0, 8, '(Original for Recipient)', 0, 1, 'C');
        $this->Ln(5);

        $this->SetTextColor(0, 0, 0); // Reset text color for content
    }

    function Footer() {
        $this->SetY(-30);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Thank you for your business!', 0, 1, 'C');
        $this->Cell(0, 10, 'For queries, contact us at support@e-auction.com', 0, 1, 'C');
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Function to generate the invoice
function generateInvoice() {
    global $auctionItem_details, $item_details, $bidder_details, $bid_details, $seller_details, $invoiceNum;

    $invoiceCounterFile = 'C:\xampp\htdocs\E-Auction-System\Genrate_Bill\invoices\invoice_counter.txt';

    // Check if the invoice counter file exists
    if (file_exists($invoiceCounterFile)) {
        // Read the last invoice number and increment it
        $invoiceNum = (int) file_get_contents($invoiceCounterFile);
        $invoiceNum++; // Increment the last invoice number
    } else {
        // If the file doesn't exist, start from 1
        $invoiceNum = 1;
    }

    // Save the updated invoice number back to the file
    file_put_contents($invoiceCounterFile, $invoiceNum);
//    $invoiceNum = 101; // Static invoice number for now
    $pdf = new InvoicePDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    // Billing and Shipping Information
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 7, 'Bidder Details:', 1, 0);
    $pdf->Cell(95, 7, 'Seller Details:', 1, 1);

    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(95, 7, $bidder_details['firstname'] . ' ' . $bidder_details['lastname'] . "\n" . $bidder_details['address'] . "\n" . $bidder_details['contact'], 1, 'L');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x + 95, $y - 21);
    $pdf->MultiCell(95, 7, $seller_details['firstname'] . ' ' . $seller_details['lastname'] . "\n" . $seller_details['address'] . "\n" . $seller_details['contact'], 1, 'L');
    $pdf->Ln(10);

    // Invoice Details
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(47.5, 7, 'Invoice #: ', 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(47.5, 7, $invoiceNum, 1);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(47.5, 7, 'Date: ', 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(47.5, 7, date('d-m-Y'), 1, 1);
    $pdf->Ln(10);

    // Item Table
//    $pdf->SetFont('Arial', 'B', 12);
//    $pdf->Cell(40, 7, 'Item Name', 1);
//    $pdf->Cell(30, 7, 'HSN Code', 1);
//    $pdf->Cell(20, 7, 'Qty', 1);
//    $pdf->Cell(30, 7, 'Unit Price', 1);
//    $pdf->Cell(30, 7, 'Taxable Value', 1);
//    $pdf->Cell(40, 7, 'Total', 1, 1);
    // Add item details in vertical format
    $pdf->SetFont('Arial', 'B', 12);

    $unitPrice = $bid_details['current_bid'];
    $quantity = 1;
    $taxRate = 0.18; // Example 18% GST (9% CGST + 9% SGST)
    $taxableValue = $unitPrice;
    $cgst = $taxableValue * 0.09;
    $sgst = $taxableValue * 0.09;
    $total = $taxableValue + $cgst + $sgst;
// Item Name
    $pdf->Cell(60, 7, 'Item Name:', 1);
    $pdf->Cell(130, 7, $item_details['name'], 1, 1);

// HSN Code
    $pdf->Cell(60, 7, 'HSN Code:', 1);
    $pdf->Cell(130, 7, '1234', 1, 1); // Replace '1234' with actual HSN code
// Quantity
    $pdf->Cell(60, 7, 'Quantity:', 1);
    $pdf->Cell(130, 7, $quantity, 1, 1);

// Unit Price
    $pdf->Cell(60, 7, 'Unit Price:', 1);
    $pdf->Cell(130, 7, number_format($unitPrice, 2), 1, 1);

// Taxable Value
    $pdf->Cell(60, 7, 'Taxable Value:', 1);
    $pdf->Cell(130, 7, number_format($taxableValue, 2), 1, 1);

// Total Amount
    $pdf->Cell(60, 7, 'Total (Incl. Tax):', 1);
    $pdf->Cell(130, 7, number_format($total, 2), 1, 1);

// Grand Total Row
    $pdf->Ln(5); // Add some spacing before the grand total
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 7, 'Grand Total:', 1);
    $pdf->Cell(130, 7, number_format($total, 2), 1, 1);

    // Footer Notes
    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(0, 7, "Terms & Conditions:\n1. Goods once sold will not be taken back.\n2. This is a system-generated invoice and does not require a signature.\n3. Any queries for delivery purposes, contact the seller directly.");

    if (!is_dir(__DIR__ . '/invoices')) {
        mkdir(__DIR__ . '/invoices', 0777, true);
    }

    $filename = __DIR__ . '/invoices/Invoice_' . $invoiceNum . '.pdf';
    // Save PDF
//    $filename = 'invoices/Invoice_' . $invoiceNum . '.pdf';
    $pdf->Output('F', $filename);

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