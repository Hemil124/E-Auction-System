<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    //without login can't open indexpage!!        
    $_SESSION['txtemail'] = "22bmiit142@gmail.com";
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
        <?php include'bidder_Header.php'; ?>
        <!--============= Header Section Ends Here =============-->

        <!--============= Cart Section Starts Here =============-->
        <!--        <div class="cart-sidebar-area">
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
                </div>-->
        <!--============= Cart Section Ends Here =============-->


        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section style-2 pb-lg-400">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index-3.php">Home</a>
                    </li>
                    <li>
                        <a href="#0">My Account</a>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->
        <?php
        include 'connection.php';
        include 'find_ID.php';
        $bidder_id = find_bidderID($_SESSION['txtemail']);
        $result_bid = mysqli_query($conn, 'SELECT COUNT(*) AS active_bids FROM tblbid WHERE id=' . $bidder_id . '');
        $bid_details = mysqli_fetch_assoc($result_bid);

        $result_auctionItem = mysqli_query($conn, 'SELECT COUNT(*) AS won FROM tblauctionitem WHERE winner_id=' . $bidder_id . '');
        $auctionItem_details = mysqli_fetch_assoc($result_auctionItem);
        ?>

        <!--============= Dashboard Section Starts Here =============-->
        <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
            <div class="container">
                <div class="row justify-content-center">
                    <?php include 'bidder_dashboard_sidebar.php'; ?>
                    <div class="col-lg-8">
                        <div class="dashboard-widget mb-40">
                            <div class="dashboard-title mb-30">
                                <h5 class="title">My Activity</h5>
                            </div>
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/01.png" alt="dashboard">
                                        </div>
                                        <div class="content"> 
                                            <h2 class="title"><span class="counter"><?php
                                                    if (isset($bid_details)) {
                                                        echo $bid_details['active_bids'];
                                                    }
                                                    ?></span></h2>
                                            <h6 class="info">Active Bids</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/02.png" alt="dashboard">
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><span class="counter"><?php
                                                    if (isset($auctionItem_details)) {
                                                        echo $auctionItem_details['won'];
                                                    }
                                                    ?></span></h2>
                                            <h6 class="info">Items Won</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/03.png" alt="dashboard">
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><span class="counter">115</span></h2>
                                            <h6 class="info">Favorites</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!--============= Dashboard Section Ends Here =============-->


                        <!--============= Footer Section Starts Here =============-->
                        <?php include 'Footer.php'; ?>
                        <!--============= Footer Section Ends Here =============-->



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