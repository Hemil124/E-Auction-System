<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    //without login can't open indexpage!!        
//    if (!isset($_SESSION['txtemail'])) {
//        header("Location: sign-in.php");
//        exit();
//    }
//    
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
        <?php
        include 'Header.php';
        ?>
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
        <div class="hero-section style-2">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#0">My Account</a>
                    </li>
                    <li>
                        <span>My Bids</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->


        <!--============= Dashboard Section Starts Here =============-->
        <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-7 col-lg-4">
                        <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                            <div class="user">
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="assets/images/dashboard/user.png" alt="user">
                                    </div>
                                    <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                    <input type="file" id="profile-pic" class="d-none">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#0">Percy Reed</a></h5>
                                    <span class="username"><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb6b3b4b29cbbb1bdb5b0f2bfb3b1">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <ul class="dashboard-menu">
                                <li>
                                    <a href="dashboard.php"><i class="flaticon-dashboard"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="profile.php"><i class="flaticon-settings"></i>Personal Profile </a>
                                </li>
                                <li>
                                    <a href="#0" class="active"><i class="flaticon-auction"></i>My Bids</a>
                                </li>
                                <li>
                                    <a href="winning-bids.php"><i class="flaticon-best-seller"></i>Winning Bids</a>
                                </li>
                                <li>
                                    <a href="notifications.php"><i class="flaticon-alarm"></i>My Alerts</a>
                                </li>
                                <li>
                                    <a href="my-favorites.php"><i class="flaticon-star"></i>My Favorites</a>
                                </li>
                                <button class="logout" onclick="window.location.href = 'logout.php'">
                                    Logout
                                </button>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="dash-bid-item dashboard-widget mb-4">
                            <div class="header">
                                <h4 class="title">My Bids</h4>
                                <span class="notify"><i class="flaticon-alarm"></i> Manage Notifications</span>
                            </div>
                            <ul class="button-area nav nav-tabs">
                                <li>
                                    <a href="#upcoming" data-toggle="tab" class="custom-button">Upcoming</a>
                                </li>
                                <li>
                                    <a href="#past" data-toggle="tab" class="custom-button">Past</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="upcoming">
                                <div class="row mb-30-none justify-content-center">
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="#0">2018 Hyundai Sonata</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter26"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/car/auction-2.jpg" alt="car"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="#0">2018 Nissan Versa, S</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter27"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/product/01.png" alt="product"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="#0">2019 Mercedes-Benz C, 300</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter1"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/product/02.png" alt="product"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="#0">2017 Harley-Davidson XG750,</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter2"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="past">
                                <div class="row justify-content-center mb-30-none">
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="product-details.php">Gold Ring With Clear Stones</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter23"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-2.jpg" alt="jewelry"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="product-details.php">Ring With Clear Stone Accents</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter24"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-3.jpg" alt="jewelry"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="product-details.php">Gold Ring With Clear Stones</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter25"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 col-md-6">
                                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                            <div class="auction-thumb">
                                                <a href="product-details.php"><img src="assets/images/auction/product/04.png" alt="jewelry"></a>
                                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                            </div>
                                            <div class="auction-content">
                                                <h6 class="title">
                                                    <a href="product-details.php">Gold Ring With Clear Stones</a>
                                                </h6>
                                                <div class="bid-area">
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-auction"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Current Bid</div>
                                                            <div class="amount">$876.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="bid-amount">
                                                        <div class="icon">
                                                            <i class="flaticon-money"></i>
                                                        </div>
                                                        <div class="amount-content">
                                                            <div class="current">Buy Now</div>
                                                            <div class="amount">$5,00.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="countdown-area">
                                                    <div class="countdown">
                                                        <div id="bid_counter30"></div>
                                                    </div>
                                                    <span class="total-bids">30 Bids</span>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#0" class="custom-button">Submit a bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Dashboard Section Ends Here =============-->


        <!--============= Footer Section Starts Here =============-->
         <?php
        include 'Footer.php';
        ?>
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