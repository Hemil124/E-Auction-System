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
                                            <a href="auction-Report.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                Auction Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-Report.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                Payment Report
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-registration-report.php">
                                                <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                                User Registration Report
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="winning-bids.php"><i class="flaticon-best-seller"></i>Manage Payment</a>
                                </li>
                                <button class="logout" onclick="window.location.href = 'logout.php'">
                                    Logout
                                </button>
                                </li>
                            </ul>
                        </div>
                    </div>
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


                    <!--asc and desc order-->
<!--                    <style>
                        th {
                            cursor: pointer;
                        }
                    </style>
                    <div class="container mx-auto mt-10">
                        <table class="min-w-full bg-white" id="sortableTable">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-700" onclick="sortTable(0)">Item</th>
                                    <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-700" onclick="sortTable(1)">Bid Price</th>
                                    <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-700" onclick="sortTable(2)">Highest Bid</th>
                                    <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-700" onclick="sortTable(3)">Lowest Bid</th>
                                    <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-700" onclick="sortTable(4)">Expires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 px-4 text-sm text-gray-700">Hyundai </td>
                                    <td class="py-2 px-4 text-sm text-gray-700">$1,5.00</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">$1,745.00</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">$1,100.00</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">7/2/2000</td>
                                </tr>
                                <tr>
                                    <td data-purchase="item"> Sonata</td>
                                    <td data-purchase="bid price">$1,75.00</td>
                                    <td data-purchase="highest bid">$1,77.00</td>
                                    <td data-purchase="lowest bid">$1,40.00</td>
                                    <td data-purchase="expires">7/2/2004</td>
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

                    <script>
                        let sortDirection = true; // true for ascending, false for descending

                        function sortTable(columnIndex) {
                            const table = document.getElementById("sortableTable");
                            const tbody = table.tBodies[0];
                            const rows = Array.from(tbody.rows);
                            const isNumericColumn = columnIndex > 0; // Assuming first column is text

                            rows.sort((a, b) => {
                                const aText = a.cells[columnIndex].innerText;
                                const bText = b.cells[columnIndex].innerText;

                                if (isNumericColumn) {
                                    const aValue = parseFloat(aText.replace(/[$,]/g, ''));
                                    const bValue = parseFloat(bText.replace(/[$,]/g, ''));
                                    return sortDirection ? aValue - bValue : bValue - aValue;
                                } else {
                                    return sortDirection ? aText.localeCompare(bText) : bText.localeCompare(aText);
                                }
                            });

                            // Append sorted rows back to the tbody
                            rows.forEach(row => tbody.appendChild(row));

                            // Toggle sort direction for next click
                            sortDirection = !sortDirection;
                        }
                    </script>-->



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
                                    <div class="tab-pane show active fade" id="ALR">
                                        <?php
                                        include 'connection.php';

                                        $qu = "SELECT
                                                    a.id, 
                                                    i.name AS item_name, 
                                                    c.name AS category_name, 
                                                    s.firstname, 
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
                                                    <th>Item Name</th>
                                                    <th>Category Name</th>
                                                    <th>Seller Name</th>
                                                    <th>Starting Date</th>
                                                    <th>Ending Date</th>
                                                    <th>Starting Price</th>
                                                    <th>Reserve Price</th>
                                                    <th>Minimum Bidders</th>
                                                    <th>EMD Amount</th>
                                                    <th>Auction Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($r = mysqli_fetch_assoc($q)) { ?>
                                                <tr>
                                                    <td data-purchase="Auction ID"><?php echo $r['id']; ?></td>
                                                    <td data-purchase="Item Name"><?php echo $r['item_name']; ?></td>
                                                    <td data-purchase="Category Name"><?php echo $r['category_name']; ?></td>
                                                    <td data-purchase="Seller Name"><?php echo $r['firstname']; ?></td>
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

                                    <div class="tab-pane show fade" id="APR">
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
                                    <div class="tab-pane show fade" id="UAR">
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
                                    <div class="tab-pane show fade" id="CAR">
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
