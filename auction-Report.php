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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                        <a href="Admin_Dashboard.php">Admin Dashbord</a>
                    </li>
                    <li>
                        <span>Auction Report</span>
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

                    <!--Auction reports-->
                    <div class="col-lg-12" style="padding-bottom: calc(var(--bs-gutter-x)* .5);padding-top: calc(var(--bs-gutter-x)* .5);">
                        <div class="dashboard-widget">
                            <h5 class="title mb-10">Reports</h5>
                            <div class="dashboard-purchasing-tabs">
                                <ul class="nav-tabs nav">
                                    <li>
                                        <a href="#ALR" class="active" data-toggle="tab">Auction Listings Report</a>
                                    </li>
                                    <li>
                                        <a href="#APR" data-toggle="tab">Auction Performance Report</a>
                                    </li>
                                    <li>
                                        <a href="#UAR" data-toggle="tab">Upcoming Auctions Report</a>
                                    </li>
                                    <li>
                                        <a href="#CAR" data-toggle="tab">Closed Auctions Report</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!--Auction Listings Report-->
                                    <div class="tab-pane show active fade" id="ALR">
                                        <div class="col-sm-12">
                                            <label class="mr-2" style="margin: 0px 5px">Select Filter Option:</label>
                                            <select name="dropfilter" id="filter-select" style="width: 20%;height: 30px ;border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required >
                                                <option value="">--Choose an option--</option>
                                                <option value="Auction Id" >Auction Id</option>
                                                <option value="Item name" >Item name</option>
                                                <option value="Category name">Category name</option>
                                                <option value="Seller name">Seller name</option>
                                                <option value="Auction status">Auction status</option>
                                            </select>
                                        </div>

                                        <!--search filter div script-->
                                        <script>
                                            $(document).ready(function () {
                                                $("#filter-select").change(function () {
                                                    var selectedValue = $(this).val();
                                                    $("#AuctionId, #Itemname, #Categoryname, #Sellername, #Auctionstatus").hide();

                                                    if (selectedValue === "Auction Id") {
                                                        $("#AuctionId").show();
                                                    } else if (selectedValue === "Item name") {
                                                        $("#Itemname").show();
                                                    } else if (selectedValue === "Category name") {
                                                        $("#Categoryname").show();
                                                    } else if (selectedValue === "Seller name") {
                                                        $("#Sellername").show();
                                                    } else if (selectedValue === "Auction status") {
                                                        $("#Auctionstatus").show();
                                                    }
                                                });
                                            });
                                        </script>

                                        <!--search with auction id-->
                                        <div id="AuctionId" style="display: none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Auction ID:</label>
                                                <input type="text" id="auction-id-search" placeholder="Enter Auction ID" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                                <!--<button id="search-auction-id-btn" class="logout" style="width: auto ;margin: 0px 5px">Search</button>-->
                                                <!--<div id="auction-id-search-results"></div>-->
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#auction-id-search").on('keyup', function () {
                                                    var auctionId = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_ALR_filter_data.php",
                                                        method: "POST",
                                                        data: {
                                                            auction_id: auctionId
                                                        },
                                                        success: function (data) {
                                                            $("#ALRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with item name-->
                                        <div id="Itemname" style="display: none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Item Name:</label>
                                                <input type="text" id="item-name-search" placeholder="Enter Item Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>                                        
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#item-name-search").on('keyup', function () {
                                                    var itemName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_ALR_filter_data.php",
                                                        method: "POST",
                                                        data: {item_name: itemName},
                                                        success: function (data) {
                                                            $("#ALRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with category-->
                                        <div id="Categoryname" style="display: none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Category Name:</label>
                                                <input type="text" id="category-name-search" placeholder="Enter Category Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#category-name-search").on('keyup', function () {
                                                    var categoryName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_ALR_filter_data.php",
                                                        method: "POST",
                                                        data: {category_name: categoryName},
                                                        success: function (data) {
                                                            $("#ALRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with seller name-->
                                        <div id="Sellername" style="display: none;">
                                            <div class="col-sm-12" style="padding: 10px 0px;">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Seller Name:</label>
                                                <input type="text" id="seller-name-search" placeholder="Enter Seller Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>           
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#seller-name-search").on('keyup', function () {
                                                    var sellerName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_filter_data.php",
                                                        method: "POST",
                                                        data: {
                                                            seller_name: sellerName
                                                        },
                                                        success: function (data) {
                                                            $("#ALRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with auction status-->
                                        <div id="Auctionstatus" style="display: none;">
                                            <div class="col-sm-12" style="padding: 10px 0px;">
                                                <label class="mr-2" style="margin: 0px 5px">Select Auction Status:</label>
                                                <select id="auction-status-search" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px">
                                                    <option value="">Select Status</option>
                                                    <option value="PENDING">PENDING</option>
                                                    <option value="ACTIVE">ACTIVE</option>
                                                    <option value="CANCELED">CANCELED</option>
                                                    <option value="CLOSED">CLOSED</option>
                                                </select>


                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#auction-status-search").on('change', function () {
                                                    var auctionStatus = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_ALR_filter_data.php",
                                                        method: "POST",
                                                        data: {
                                                            auction_status: auctionStatus
                                                        },
                                                        success: function (data) {
                                                            $("#ALRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--table show-->
                                        <div>
                                        <!--<div  style="overflow-y: scroll; height: 770px;">-->
                                            <?php
                                            include 'connection.php';

                                            $qu = "SELECT
                                                    a.id, 
                                                    i.name AS item_name, 
                                                    c.name AS category_name, 
                                                    CONCAT(s.firstname, ' ', s.lastname) AS seller_name, 
                                                    a.start_datetime, 
                                                    a.end_datetime, 
                                                    i.starting_price, 
                                                    a.reserve_price, 
                                                    a.minimum_bidders, 
                                                    a.emd_amount, 
                                                    a.auction_status
                                           FROM 
                                               tblauctionitem a
                                           LEFT JOIN 
                                               tblitem i ON a.item_id = i.id
                                           LEFT JOIN 
                                               tblcategory c ON i.category_id = c.id
                                           JOIN 
                                               tblsellers s ON i.seller_id = s.id;";

                                            $q = mysqli_query($conn, $qu);

                                            if (!$q) {
                                                die("Error:" . mysqli_error($conn));
                                            } else {
                                                ?>
                                                <table class="purchasing-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Auction ID</th>
                                                            <th>Item </th>
                                                            <th>Category </th>
                                                            <th>Seller </th>
                                                            <th>Starting Time</th>
                                                            <th>Ending Time</th>
                                                            <th>Starting Price</th>
                                                            <th>Reserve Price</th>
                                                            <th>Minimum Bidders</th>
                                                            <th>EMD Amount</th>
                                                            <th>Auction Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="ALRDATA">
                                                        <?php while ($r = mysqli_fetch_assoc($q)) { ?>
                                                            <tr>
                                                                <td data-purchase="Auction ID"><?php echo $r['id']; ?></td>
                                                                <td data-purchase="Item Name"><?php echo $r['item_name']; ?></td>
                                                                <td data-purchase="Category Name"><?php echo $r['category_name']; ?></td>
                                                                <td data-purchase="Seller Name"><?php echo $r['seller_name']; ?></td>
                                                                <td data-purchase="Starting Date"><?php echo $r['start_datetime']; ?></td>
                                                                <td data-purchase="Ending Date"><?php echo $r['end_datetime']; ?></td>
                                                                <td data-purchase="Starting Price"><?php echo $r['starting_price']; ?></td>
                                                                <td data-purchase="Reserve Price"><?php echo $r['reserve_price']; ?></td>
                                                                <td data-purchase="Minimum Bidders"><?php echo $r['minimum_bidders']; ?></td>
                                                                <td data-purchase="EMD Amount"><?php echo $r['emd_amount']; ?></td>
                                                                <td data-purchase="Auction Status"><?php echo $r['auction_status']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--Auction Performance Report-->
                                    <div class="tab-pane show fade" id="APR">
                                        <div class="col-sm-12">
                                            <label class="mr-2" style="margin: 0px 5px">Select Filter Option:</label>
                                            <select name="dropfilter" id="APRfilter-select" style="width: 20%;height: 30px ;border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required >
                                                <option value="">--Choose an option--</option>
                                                <option value="Auction Id" >Auction Id</option>
                                                <option value="Item name" >Item name</option>
                                                <option value="Category name">Category name</option>
                                            </select>
                                        </div>

                                        <!--search filter div script-->
                                        <script>
                                            $(document).ready(function () {
                                                $("#APRfilter-select").change(function () {
                                                    var selectedValue = $(this).val();
                                                    $("#APRAuctionId, #APRItemname, #APRCategoryname").hide();

                                                    if (selectedValue === "Auction Id") {
                                                        $("#APRAuctionId").show();
                                                    } else if (selectedValue === "Item name") {
                                                        $("#APRItemname").show();
                                                    } else if (selectedValue === "Category name") {
                                                        $("#APRCategoryname").show();
                                                    }
                                                });
                                            });
                                        </script>

                                        <!--search with auction id-->
                                        <div id="APRAuctionId" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Auction ID:</label>
                                                <input type="text" id="APRauction-id-search" placeholder="Enter Auction ID" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#APRauction-id-search").on('keyup', function () {
                                                    var auctionId = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_APR_filter_data.php",
                                                        method: "POST",
                                                        data: {auction_id: auctionId},
                                                        success: function (data) {
                                                            $("#APRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with item name-->
                                        <div id="APRItemname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Item Name:</label>
                                                <input type="text" id="APRitem-name-search" placeholder="Enter Item Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>  
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#APRitem-name-search").on('keyup', function () {
                                                    var itemName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_APR_filter_data.php",
                                                        method: "POST",
                                                        data: {item_name: itemName},
                                                        success: function (data) {
                                                            $("#APRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with category-->
                                        <div id="APRCategoryname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Category Name:</label>
                                                <input type="text" id="APRcategory-name-search" placeholder="Enter Category Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#APRcategory-name-search").on('keyup', function () {
                                                    var categoryName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_APR_filter_data.php",
                                                        method: "POST",
                                                        data: {category_name: categoryName},
                                                        success: function (data) {
                                                            $("#APRDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--table show-->
                                        <div>
                                        <!--<div  style="overflow-y: scroll; height: 770px;">-->
                                            <?php
                                            include 'connection.php';

                                            $qu = "SELECT 
                                                    a.id AS auction_id,
                                                    i.name AS item_name,
                                                    c.name AS category,
                                                    CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
                                                    COUNT(b.id) AS number_of_bids,
                                                    MAX(b.bid_value) AS highest_bid,
                                                    (SELECT b2.bid_value FROM tblbid b2 WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS final_auction_price,
                                                    (SELECT CONCAT(b3.firstname, ' ', b3.lastname) FROM tblbid b2 
                                                     INNER JOIN tblbidders b3 ON b2.bidder_id = b3.id 
                                                     WHERE b2.auction_item_id = a.id ORDER BY b2.bid_value DESC LIMIT 1) AS winner_name,
                                                    a.auction_status
                                            FROM 
                                                    tblauctionitem a
                                            LEFT JOIN 
                                                    tblitem i ON a.item_id = i.`id` 
                                            LEFT JOIN 
                                                    tblcategory c ON i.category_id = c.id 
                                            LEFT JOIN 
                                                    tblbid b ON b.auction_item_id = a.id
                                            JOIN 
                                                    tblsellers s ON i.seller_id = s.id
                                            WHERE 
                                                    a.auction_status IN ('active', 'closed')
                                            GROUP BY 
                                                    a.id, i.name, c.name, s.firstname, a.auction_status;";

                                            $q = mysqli_query($conn, $qu);

                                            if (!$q) {
                                                die("Error:" . mysqli_error($conn));
                                            } else {
                                                ?>
                                                <table class="purchasing-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Auction ID</th>
                                                            <th>Item </th>
                                                            <th>Category</th>
                                                            <th>Seller</th>
                                                            <th>Total Bids</th>
                                                            <th>Highest Bid</th>
                                                            <th>Final Price</th>
                                                            <th>Winner</th>
                                                            <th>Auction Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="APRDATA">
                                                        <?php while ($r = mysqli_fetch_assoc($q)) { ?>
                                                            <tr>
                                                                <td data-purchase="Auction ID"><?php echo $r['auction_id']; ?></td>
                                                                <td data-purchase="Item Name"><?php echo $r['item_name']; ?></td>
                                                                <td data-purchase="Category"><?php echo $r['category']; ?></td>
                                                                <td data-purchase="Seller"><?php echo $r['seller_name']; ?></td>
                                                                <td data-purchase="Total Bids"><?php echo $r['number_of_bids']; ?></td>
                                                                <td data-purchase="Highest Bid"><?php echo $r['highest_bid']; ?></td>
                                                                <td data-purchase="Final Price"><?php echo $r['final_auction_price']; ?></td>
                                                                <td data-purchase="Winner"><?php echo $r['winner_name']; ?></td>
                                                                <td data-purchase="Auction Status"><?php echo $r['auction_status']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--Upcoming Auction Report-->
                                    <div class="tab-pane show fade" id="UAR">
                                        <div class="col-sm-12">
                                            <label class="mr-2" style="margin: 0px 5px">Select Filter Option:</label>
                                            <select name="dropfilter" id="UARfilter-select" style="width: 20%;height: 30px ;border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required >
                                                <option value="">--Choose an option--</option>
                                                <option value="Auction Id" >Auction Id</option>
                                                <option value="Item name" >Item name</option>
                                                <option value="Category name">Category name</option>
                                            </select>
                                        </div>

                                        <!--search filter div script-->
                                        <script>
                                            $(document).ready(function () {
                                                $("#UARfilter-select").change(function () {
                                                    var selectedValue = $(this).val();
                                                    $("#UARAuctionId, #UARItemname, #UARCategoryname").hide();

                                                    if (selectedValue === "Auction Id") {
                                                        $("#UARAuctionId").show();
                                                    } else if (selectedValue === "Item name") {
                                                        $("#UARItemname").show();
                                                    } else if (selectedValue === "Category name") {
                                                        $("#UARCategoryname").show();
                                                    }
                                                });
                                            });
                                        </script>

                                        <!--search with auction id-->
                                        <div id="UARAuctionId" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Auction ID:</label>
                                                <input type="text" id="UARauction-id-search" placeholder="Enter Auction ID" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#UARauction-id-search").on('keyup', function () {
                                                    var auctionId = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_UAR_filter_data.php",
                                                        method: "POST",
                                                        data: {auction_id: auctionId},
                                                        success: function (data) {
                                                            $("#UARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with item name-->
                                        <div id="UARItemname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Item Name:</label>
                                                <input type="text" id="UARitem-name-search" placeholder="Enter Item Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>  
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#UARitem-name-search").on('keyup', function () {
                                                    var itemName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_UAR_filter_data.php",
                                                        method: "POST",
                                                        data: {item_name: itemName},
                                                        success: function (data) {
                                                            $("#UARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with category-->
                                        <div id="UARCategoryname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Category Name:</label>
                                                <input type="text" id="UARcategory-name-search" placeholder="Enter Category Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#UARcategory-name-search").on('keyup', function () {
                                                    var categoryName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_UAR_filter_data.php",
                                                        method: "POST",
                                                        data: {category_name: categoryName},
                                                        success: function (data) {
                                                            $("#UARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <!--table show-->
                                        <div>
                                        <!--<div  style="overflow-y: scroll; height: 770px;">-->
                                            <?php
                                            include 'connection.php';

                                            $qu = "SELECT 
                                                    a.id AS auction_id, 
                                                    i.name AS item_name, 
                                                    c.name AS category, 
                                                    CONCAT(s.firstname, ' ', s.lastname) AS seller_name, 
                                                    a.start_datetime AS start_time, 
                                                    a.end_datetime AS end_time, 
                                                    i.starting_price AS starting_price, 
                                                    a.auction_status AS auction_status
                                               FROM 
                                                   tblauctionitem a 
                                               LEFT JOIN 
                                                   tblitem i ON a.item_id = i.id 
                                               LEFT JOIN 
                                                   tblcategory c ON i.category_id = c.id 
                                               LEFT JOIN 
                                                   tblsellers s ON i.seller_id = s.id
                                               WHERE 
                                                   a.auction_status IN('ACTIVE', 'PENDING')";

                                            $q = mysqli_query($conn, $qu);

                                            if (!$q) {
                                                die("Error:" . mysqli_error($conn));
                                            } else {
                                                ?>
                                                <table class="purchasing-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Auction ID</th>
                                                            <th>Item </th>
                                                            <th>Category</th>
                                                            <th>Seller </th>
                                                            <th>Start Time</th>
                                                            <th>End Time</th>
                                                            <th>Starting Price</th>
                                                            <th>Auction Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="UARDATA">
                                                        <?php while ($r = mysqli_fetch_assoc($q)) { ?>
                                                            <tr>
                                                                <td data-purchase="Auction ID"><?php echo $r['auction_id']; ?></td>
                                                                <td data-purchase="Item Name"><?php echo $r['item_name']; ?></td>
                                                                <td data-purchase="Category"><?php echo $r['category']; ?></td>
                                                                <td data-purchase="Seller Name"><?php echo $r['seller_name']; ?></td>
                                                                <td data-purchase="Start Time"><?php echo $r['start_time']; ?></td>
                                                                <td data-purchase="End Time"><?php echo $r['end_time']; ?></td>
                                                                <td data-purchase="Starting Price"><?php echo $r['starting_price']; ?></td>
                                                                <td data-purchase="Auction Status"><?php echo $r['auction_status']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--closing auction report-->
                                    <div class="tab-pane show fade" id="CAR">
                                        <div class="col-sm-12">
                                            <label class="mr-2" style="margin: 0px 5px">Select Filter Option:</label>
                                            <select name="dropfilter" id="CARfilter-select" style="width: 20%;height: 30px ;border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required >
                                                <option value="">--Choose an option--</option>
                                                <option value="Auction Id" >Auction Id</option>
                                                <option value="Item name" >Item name</option>
                                                <option value="Category name">Category name</option>
                                            </select>
                                        </div>

                                        <!--search filter div script-->
                                        <script>
                                            $(document).ready(function () {
                                                $("#CARfilter-select").change(function () {
                                                    var selectedValue = $(this).val();
                                                    $("#CARAuctionId, #CARItemname, #CARCategoryname").hide();

                                                    if (selectedValue === "Auction Id") {
                                                        $("#CARAuctionId").show();
                                                    } else if (selectedValue === "Item name") {
                                                        $("#CARItemname").show();
                                                    } else if (selectedValue === "Category name") {
                                                        $("#CARCategoryname").show();
                                                    }
                                                });
                                            });
                                        </script>

                                        <!--search with auction id-->
                                        <div id="CARAuctionId" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Auction ID:</label>
                                                <input type="text" id="CARauction-id-search" placeholder="Enter Auction ID" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#CARauction-id-search").on('keyup', function () {
                                                    var auctionId = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_CAR_filter_data.php",
                                                        method: "POST",
                                                        data: {auction_id: auctionId},
                                                        success: function (data) {
                                                            $("#CARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with item name-->
                                        <div id="CARItemname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Item Name:</label>
                                                <input type="text" id="CARitem-name-search" placeholder="Enter Item Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>  
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#CARitem-name-search").on('keyup', function () {
                                                    var itemName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_CAR_filter_data.php",
                                                        method: "POST",
                                                        data: {item_name: itemName},
                                                        success: function (data) {
                                                            $("#CARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>

                                        <!--search with category-->
                                        <div id="CARCategoryname" style="display:none;">
                                            <div class="col-sm-12" style="padding: 10px 0px; ">
                                                <label class="mr-2" style="margin: 0px 5px">Enter Category Name:</label>
                                                <input type="text" id="CARcategory-name-search" placeholder="Enter Category Name" style="width: 20%;height: 30px; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $("#CARcategory-name-search").on('keyup', function () {
                                                    var categoryName = $(this).val();
                                                    $.ajax({
                                                        url: "auction-Report-fetch_CAR_filter_data.php",
                                                        method: "POST",
                                                        data: {category_name: categoryName},
                                                        success: function (data) {
                                                            $("#CARDATA").html(data);
                                                        },
                                                        error: function (xhr, status, error) {
                                                            alert("Error: " + error);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <!--table show-->
                                        <div>
                                        <!--<div  style="overflow-y: scroll; height: 770px;">-->
                                            <?php
                                            include 'connection.php';

                                            $qu = "SELECT 
                                                ai.id AS auction_id,
                                                i.name AS item_name,
                                                c.name AS category_name,
                                                CONCAT(s.firstname, ' ', s.lastname) AS seller_name,
                                                ai.end_datetime AS auction_endtime,
                                                b.max_bid_value AS final_auction_price,
                                                CONCAT(bd.firstname, ' ', bd.lastname) AS winner_bidder_name
                                            FROM 
                                                tblauctionitem ai
                                            LEFT JOIN tblitem i ON ai.item_id = i.id
                                            LEFT JOIN tblcategory c ON i.category_id = c.id
                                            LEFT JOIN tblsellers s ON i.seller_id = s.id
                                            LEFT JOIN (
                                                SELECT auction_item_id, MAX(bid_value) AS max_bid_value, bidder_id
                                                FROM tblbid
                                                GROUP BY auction_item_id
                                            ) b ON b.auction_item_id = ai.id
                                            LEFT JOIN tblbidders bd ON bd.id = b.bidder_id
                                            WHERE 
                                                ai.auction_status = 'closed'
                                            GROUP BY 
                                                ai.id, i.name, c.name, s.firstname, s.lastname, ai.end_datetime, bd.firstname, bd.lastname;";

                                            $q = mysqli_query($conn, $qu);

                                            if (!$q) {
                                                die("Error:" . mysqli_error($conn));
                                            } else {
                                                ?>
                                                <table class="purchasing-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Auction ID</th>
                                                            <th>Item</th>
                                                            <th>Category</th>
                                                            <th>Seller </th>
                                                            <th>Auction End Time</th>
                                                            <th>Final Auction Price</th>
                                                            <th>Winner</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while ($r = mysqli_fetch_assoc($q)) { ?>
                                                            <tr>
                                                                <td data-purchase="Auction ID"><?php echo $r['auction_id']; ?></td>
                                                                <td data-purchase="Item"><?php echo $r['item_name']; ?></td>
                                                                <td data-purchase="Category"><?php echo $r['category_name']; ?></td>
                                                                <td data-purchase="Seller"><?php echo $r['seller_name']; ?></td>
                                                                <td data-purchase="Auction End Time"><?php echo $r['auction_endtime']; ?></td>
                                                                <td data-purchase="Final Auction Price"><?php echo $r['final_auction_price']; ?></td>
                                                                <td data-purchase="Winner"><?php echo $r['winner_bidder_name']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>
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
