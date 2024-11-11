<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    //without login can't open indexpage!!        
//        if (!isset($_SESSION['txtemail']) ) {
//            header("Location: sign-in.php");
//            exit();
//        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Sbidu - Bid And Auction HTML Template</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/owl.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    </head>

    <body>
        <!--============= ScrollToTop Section Starts Here =============-->
        <div class="overlayer" id="overlayer">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--============= ScrollToTop Section Ends Here =============-->


        <!--============= Header Section Starts Here =============-->
        <?php include 'admin_Header.php';?>
        <!--============= Header Section Ends Here =============-->

        <!--============= Cart Section Starts Here =============-->
        <div class="cart-sidebar-area">
            <div class="top-content">
                <a href="index.php" class="logo">
                    <img src="assets/images/logo/logo2.png" alt="logo">
                </a>
                <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
            </div>
            <div class="bottom-content">
                <div class="cart-products">
                    <h4 class="title">Shopping cart</h4>
                    <div class="single-product-item">
                        <div class="thumb">
                            <a href="#0"><img src="assets/images/shop/shop01.jpg" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#0">Color Pencil</a></h4>
                            <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                            <a href="#" class="remove-cart">Remove</a>
                        </div>
                    </div>
                    <div class="single-product-item">
                        <div class="thumb">
                            <a href="#0"><img src="assets/images/shop/shop02.jpg" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#0">Water Pot</a></h4>
                            <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                            <a href="#" class="remove-cart">Remove</a>
                        </div>
                    </div>
                    <div class="single-product-item">
                        <div class="thumb">
                            <a href="#0"><img src="assets/images/shop/shop03.jpg" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#0">Art Paper</a></h4>
                            <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                            <a href="#" class="remove-cart">Remove</a>
                        </div>
                    </div>
                    <div class="single-product-item">
                        <div class="thumb">
                            <a href="#0"><img src="assets/images/shop/shop04.jpg" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#0">Stop Watch</a></h4>
                            <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                            <a href="#" class="remove-cart">Remove</a>
                        </div>
                    </div>
                    <div class="single-product-item">
                        <div class="thumb">
                            <a href="#0"><img src="assets/images/shop/shop05.jpg" alt="shop"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#0">Comics Book</a></h4>
                            <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                            <a href="#" class="remove-cart">Remove</a>
                        </div>
                    </div>
                    <div class="btn-wrapper text-center">
                        <a href="#0" class="custom-button"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Cart Section Ends Here =============-->


        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section style-2 pb-lg-400">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <!--<a href="#0">My Account</a>-->
                    </li>
                    <li>
                        <span>Admin Dashbord</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->


        <!--============= Dashboard Section Starts Here =============-->
        <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
            <div class="container">
                <div class="row justify-content-center">
                    <?php include 'admin_dashbord_sider.php';?>
                    <div class="col-lg-8">
                        <div class="dashboard-widget mb-40">
                            <div class="dashboard-title mb-30">
                                <h5 class="title">Pending Paymnets</h5>
                            </div>
                            <div class="row justify-content-center mb-30-none">
                                <!--                                    <h5 class="title mb-10">Purchasing</h5>-->
                                <div class="dashboard-purchasing-tabs">
                                    <!--                                        <ul class="nav-tabs nav">
                                                                                <li>
                                                                                    <a href="#current" class="active" data-toggle="tab">Current</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#pending" data-toggle="tab">Pending</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#history" data-toggle="tab">History</a>
                                                                                </li>
                                                                            </ul>-->

                                </div>
                                <?php
                                include 'connection.php';
                                $q = mysqli_query($conn, "SELECT seller_id,s.contact,CONCAT(CONCAT(s.firstname,' '),s.lastname)as Name ,SUM(amount) AS pending_Amount FROM tblsellerpayment sp JOIN tblsellers s on sp.seller_id=s.id WHERE status = 'pending' GROUP BY seller_id");
                                if (!$q) {
                                    die("Error: " . mysqli_error($conn));
                                } else {
                                    echo '<form><table class="purchasing-table">
        <thead>
            <tr>
                <th>Seller ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Pending Payment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
                                    while ($r = mysqli_fetch_assoc($q)) {
                                        echo '<tr>
            <td data-purchase="Seller ID">' . $r['seller_id'] . '</td>
            <td data-purchase="Name">' . $r['Name'] . '</td>
            <td data-purchase="Contact Number">' . $r['contact'] . '</td>
            <td data-purchase="Pending Payment">' . $r['pending_Amount'] . '</td>
            <td>
                <input type="button" value="Pay Now" id="payButton" onclick="payNow(' . $r['pending_Amount'] . ', \'' . $r['Name'] . '\', \'' . $r['seller_id'] . '\')">
            </td>
        </tr>';
                                    }
                                    echo '</tbody></table></form>';
                                }
                                ?>
                                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                                <script>
                                    function payNow(amount, name, sellerId) {
                                        // Check if the amount is valid
                                        if (amount <= 0) {
                                            alert('Invalid amount.');
                                            return;
                                        }

                                        // Send the request to the backend to create a Razorpay order
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', 'payment/cheakout.php', true);
                                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                        xhr.onload = function () {
                                            if (xhr.status === 200) {
                                                var response = JSON.parse(xhr.responseText);

                                                // Open Razorpay payment gateway
                                                var options = {
                                                    "key": response.key,
                                                    "amount": response.amount, // Razorpay expects the amount in paise
                                                    "currency": "INR",
                                                    "name": name,
                                                    "description": "Payment for Seller ID " + sellerId,
                                                    "order_id": response.order_id,
                                                    "handler": function (response) {
                                                        console.log(response);
                                                        alert('Payment Successful for Seller ID: ' + sellerId);
                                                        // Handle post-payment activities here
                                                    },
                                                    "theme": {
                                                        "color": "#F37254"
                                                    }
                                                };
                                                var rzp = new Razorpay(options);
                                                rzp.open();
                                            } else {
                                                alert('Something went wrong. Please try again.');
                                            }
                                        };
                                        xhr.send('num=' + encodeURIComponent(amount));
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Dashboard Section Ends Here =============-->


        <?php
        include 'Footer.php';
        ?>



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
    </body>


</html>
