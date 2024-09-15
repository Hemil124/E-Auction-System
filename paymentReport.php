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
                        <span>Payment Report</span>
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
                    <div class="col-sm-10 col-md-7 col-lg-4">
                        <div class="dashboard-widget mb-30 mb-lg-0">
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
                                    <span class="username"><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7812171016381f15191114561b1715">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <ul class="dashboard-menu">
                                <li>
                                    <a href="#0" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="toggleCategoryOptions()">
                                        <img src="assets/images/flaticon/list-solid.svg" alt="Manage Category Icon" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;font-size: 2px;">
                                        Manage Category
                                        <span id="arrowIcon" style="float: right; color: #ee4730;">&#x25BC;</span> 
                                    </a>
                                    <ul id="categoryOptions" style="display: none; margin-left: 50px;">
                                        <li>
                                            <a href="allCategory.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                All Categoryes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="insertCategory.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                Insert Category
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <script>
                                    function toggleCategoryOptions() {
                                        var options = document.getElementById("categoryOptions");
                                        var arrowIcon = document.getElementById("arrowIcon");

                                        if (options.style.display === "none") {
                                            options.style.display = "block";
                                            arrowIcon.innerHTML = "&#x25B2;"; // Change to up arrow
                                        } else {
                                            options.style.display = "none";
                                            arrowIcon.innerHTML = "&#x25BC;"; // Change to down arrow
                                        }
                                    }

                                    function toggleReportOptions() {
                                        var options = document.getElementById("reportOptions");
                                        var arrowIcon = document.getElementById("reportArrowIcon");

                                        if (options.style.display === "none") {
                                            options.style.display = "block";
                                            arrowIcon.innerHTML = "&#x25B2;"; // Change to up arrow
                                        } else {
                                            options.style.display = "none";
                                            arrowIcon.innerHTML = "&#x25BC;"; // Change to down arrow
                                        }
                                    }
                                </script>

                                <li>
                                    <a href="my-bid.php"><i class="fa-regular fa-circle-check"></i></i>Item Verify</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="toggleReportOptions()" style="display: flex; align-items: center; justify-content: space-between; text-decoration: none; width: 100%;">
                                        <div style="display: flex; align-items: center;">
                                            <img src="assets/images/flaticon/chart-pie-solid.svg" alt="Generate Report Icon" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px; ">
                                            
                                            Generate Report
                                        </div>
                                        <span id="reportArrowIcon" style="color: #ee4730;">&#x25BC;</span>
                                    </a>

                                    <ul id="reportOptions" style="display: none; margin-left: 50px;">
                                        <li>
                                            <a href="auctionReport.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                Auction Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="paymentReport.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                Payment Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="userRegistrationReport.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                User Registration Report
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="winning-bids.php"><i class="flaticon-best-seller"></i>Manage Payment</a>
                                </li>
<!--                                <li>
                                    <a href="notifications.php"><i class="flaticon-alarm"></i>My Alerts</a>
                                </li>
                                <li>
                                    <a href="my-favorites.php"><i class="flaticon-star"></i>My Favorites</a>
                                </li>
                                <li>-->
                                    <button class="logout" onclick="window.location.href = 'logout.php'">
                                        Logout
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
<!--                        <div class="dashboard-widget mb-40">
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
                                            <h2 class="title"><span class="counter">80</span></h2>
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
                                            <h2 class="title"><span class="counter">15</span></h2>
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
                        </div>-->
                        <div class="dashboard-widget">
                            <h5 class="title mb-10">Purchasing</h5>
                            <div class="dashboard-purchasing-tabs">
                                <ul class="nav-tabs nav">
                                    <li>
                                        <a href="#current" class="active" data-toggle="tab">Current</a>
                                    </li>
                                    <li>
                                        <a href="#pending" data-toggle="tab">Pending</a>
                                    </li>
                                    <li>
                                        <a href="#history" data-toggle="tab">History</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active fade" id="current">
                                        <table class="purchasing-table">
                                            <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane show fade" id="pending">
                                        <table class="purchasing-table">
                                            <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane show fade" id="history">
                                        <table class="purchasing-table">
                                            <thead>
                                            <th>Item</th>
                                            <th>Bid Price</th>
                                            <th>Highest Bid</th>
                                            <th>Lowest Bid</th>
                                            <th>Expires</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                                <tr>
                                                    <td data-purchase="item">2018 Hyundai Sonata</td>
                                                    <td data-purchase="bid price">$1,775.00</td>
                                                    <td data-purchase="highest bid">$1,775.00</td>
                                                    <td data-purchase="lowest bid">$1,400.00</td>
                                                    <td data-purchase="expires">7/2/2024</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
