<?php
session_start();
//    without login can't open indexpage!!        
if (!isset($_SESSION['semail'])) {
//    header("Location: sign-in.php");
//    exit();
}
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <!--<meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Add Item E-Auction</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <script src="assets/js/main2.js" type="text/javascript"></script>
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/owl.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <script src="./FirebaseAuth/firebaseConn.js" defer type="module"></script>
        <!--<link rel="stylesheet" href="assets/css/main.css">-->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/nice-select.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <style>
            #image-preview-container {
                display: flex;
                flex-direction: column;
                overflow-y: auto;
                max-height: 700px;
            }

            #image-preview-container img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <?php include 'seller_Header.php'; ?>
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <span>Add Item</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->
        <!--header-->
        <!--============= Account Section Starts Here =============-->
        <section class="account-section padding-bottom">
            <div class="container">
                <div class="account-wrapper mt--100 mt-lg--440">
                    <div class="left-side">
                        <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                            <h2 class="title">ADD ITEM FOR AUCTION</h2>
                            <p>We're happy for your item participants in auction!</p>
                        </div>
                        <form class="login-form" method="post" action="" enctype="multipart/form-data" id="itemForm">
                            <p>Start Date Time:</p>
                            <div class="form-group mb-30">
                                <label for="start_datetime"><i class="fa fa-calendar"></i> </label>
                                <input type="datetime-local" id="start_datetime" name="txtstart_datetime" required>
                            </div>
                            <p>End Date Time:</p>
                            <div class="form-group mb-30">
                                <label for="end_datetime"><i class="fa fa-calendar"></i> </label>
                                <input type="datetime-local" id="end_datetime" name="txtend_datetime" required>
                            </div>
                            <p>Reserve Price:</p>
                            <div class="form-group mb-30">
                                <label for="reserve_price"style='font-size:20px;'>&#8377</label>
                                <input type="number" id="reserve_price" placeholder="Reserve Price" name="txtreserve_price" required>
                            </div>
                            <p>Emd Due Date:</p>
                            <div class="form-group mb-30">
                                <label for="emd_date"><i class="fa fa-calendar"></i></label>
                                <input type="date" id="emd_date" name="txtemd_date" required>
                            </div>

                            <p>Emd Amount:</p>
                            <div class="form-group mb-30">
                                <label for="emd_amount" style='font-size:20px;'>&#8377</label>
                                <input type="number" id="emd_amount" placeholder="EMD Amount" name="txtemd_amount" required>
                            </div>

                            <p>Minimum Bidder:</p>
                            <div class="form-group mb-30">
                                <label for="minimum_bidders"><i class="fa fa-users"></i></label>
                                <input type="number" id="minimum_bidders" placeholder="Minimum Bidders" name="txtminimum_bidders" required>
                            </div>

                            <p>Increment Value:</p>
                            <div class="form-group mb-30">
                                <label for="increment_value"><i class="fa fa-arrow-up"></i> </label>
                                <input type="number" id="increment_value" placeholder="Increment Value" name="txtincrement_value" required>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button"  name="btnsubmit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side cl-white">
                        <div class="section-header mb-0">
                            <div id="image-preview-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnsubmit'])) {
                auctionItemSubmit();
            }
        }

//
//        function getCategories() {
//            include 'connection.php';
//            $categories = [];
//
//            $sql = "SELECT id, name FROM tblCategory";
//            $result = $conn->query($sql);
//
//            if ($result->num_rows > 0) {
//                while ($row = $result->fetch_assoc()) {
//                    $categories[] = $row;
//                }
//            }
//
//            $conn->close();
//            return $categories;
//        }

        function auctionItemSubmit() {
            include 'connection.php';
            // Check if item ID is set in session
            if (!isset($_GET['item_id'])) {
                echo '<script>alert("No item found. Please add an item first.")</script>';
                return;
            }
            include 'find_ID.php';
//        $seller_id = find_sellerID($_SESSION['txtemail']);
            $seller_id = 1;

            // tblauctionitem fields
            $item_id = $_GET['item_id'];
            $start_datetime = $_POST['txtstart_datetime'];
            $end_datetime = $_POST['txtend_datetime'];
            $reserve_price = $_POST['txtreserve_price'];
            $emd_date = $_POST['txtemd_date'];
            $emd_amount = $_POST['txtemd_amount'];
            $minimum_bidders = $_POST['txtminimum_bidders'];
            $increment_value = $_POST['txtincrement_value'];

            // Server-side validation for date
            if (strtotime($start_datetime) > strtotime($end_datetime)) {
                echo '<script>alert("End date cannot be earlier than the start date.")</script>';
                return; // Stop execution if validation fails
            }

            // Step 1: Insert into tblitem
            // Step 2: Insert into tblauctionitem
            $query_auction = "INSERT INTO tblauctionitem (item_id, start_datetime, end_datetime, reserve_price, emd_date, emd_amount, minimum_bidders, increment_value, auction_status) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'pending')";
            $stmt_auction = mysqli_prepare($conn, $query_auction);
            mysqli_stmt_bind_param($stmt_auction, "isssdsid", $item_id, $start_datetime, $end_datetime, $reserve_price, $emd_date, $emd_amount, $minimum_bidders, $increment_value);

            if (mysqli_stmt_execute($stmt_auction)) {
                echo '<script type="text/javascript"> 
                      alert("Item and Auction added successfully!"); 
                      window.location.href = "index-2.php"; 
                      </script>';
            } else {
                echo '<script>alert("Error adding auction!")</script>';
            }
            $conn->close();
        }
        ?>
        <script>
            function previewImages(event) {
                const imagePreviewContainer = document.getElementById('image-preview-container');
                imagePreviewContainer.innerHTML = '';
                const files = event.target.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imageContainer = document.createElement('div');
                        imageContainer.style.position = 'relative';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100%';
                        img.style.height = 'auto';
                        img.style.marginBottom = '10px';

                        const removeButton = document.createElement('button');
                        removeButton.innerHTML = '✖';
                        removeButton.style.position = 'absolute';
                        removeButton.style.top = '0px';
                        removeButton.style.left = '0px';
                        removeButton.style.background = 'red';
                        removeButton.style.color = 'white';
                        removeButton.style.border = 'none';
                        removeButton.style.cursor = 'pointer';
                        removeButton.style.zIndex = '5';
                        removeButton.style.fontSize = '16px';
                        removeButton.style.padding = '15';
                        removeButton.style.width = 'auto';
                        removeButton.style.height = 'auto';
                        removeButton.style.lineHeight = 'normal';

                        removeButton.addEventListener('click', function () {
                            imagePreviewContainer.removeChild(imageContainer);
                        });

                        imageContainer.appendChild(removeButton);
                        imageContainer.appendChild(img);
                        imagePreviewContainer.appendChild(imageContainer);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <!--============= Account Section Ends Here =============-->
        <!--footer-->
        <?php
        include 'Footer.php';
        ?>

        <!--============= Footer Section Ends Here =============-->

    </body>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main2.js" type="text/javascript"></script>

</html>