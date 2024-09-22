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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        <span>User Registration Report</span>
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
                    <div class="col-lg-8" style="padding-bottom: calc(var(--bs-gutter-x)* .5);"  >
                        <div class="dashboard-widget">
                            <h4 class="title mb-10">Registered Users</h4>
                            <div class="dashboard-purchasing-tabs">
                                <ul class="nav-tabs nav">
                                    <li>
                                        <a href="#Year" class="active" data-toggle="tab">Yearly</a>
                                    </li>
                                    <li>
                                        <a href="#Month" data-toggle="tab">Monthly</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active fade" id="Year">
                                        Yearly Chart
                                        <?php
                                        include 'connection.php';

                                        $query = "SELECT YEAR(created_date) as year, count(YEAR(created_date)) as user_count FROM tblsellers GROUP BY YEAR(created_date)";
                                        $result = mysqli_query($conn, $query);

                                        $dataPoints1 = array();
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $dataPoints1[] = array("label" => $row['year'], "y" => $row['user_count']);
                                        }

                                        $query = "SELECT YEAR(created_date) as year, count(YEAR(created_date)) as user_count FROM  tblbidders GROUP BY YEAR(created_date)";
                                        $re = mysqli_query($conn, $query);

                                        $dataPoints2 = array();
                                        while ($row = mysqli_fetch_assoc($re)) {
                                            $dataPoints2[] = array("label" => $row['year'], "y" => $row['user_count']);
                                        }
                                        ?>

                                        <script>
                                            window.onload = function () {

                                                var chart = new CanvasJS.Chart("chartContainer", {
                                                    animationEnabled: true,
                                                    theme: "light2",
                                                    title: {
                                                        text: "Registered Users Per Year"
                                                    },
                                                    axisY: {
                                                        includeZero: true
                                                    },
                                                    axisX: {
                                                        title: "Years",
                                                        labelFormatter: function (e) {
                                                            return e.label; // Ensure that only the labels (years) from dataPoints are shown
                                                        },
                                                        interval: 1, // Remove unnecessary labels between years
                                                        valueFormatString: "####", // Force display of years (if needed)
                                                        type: "category" // Important: Treat X-axis as categories, not numbers
                                                    },
                                                    legend: {
                                                        cursor: "pointer",
                                                        verticalAlign: "center",
                                                        horizontalAlign: "right",
                                                        itemclick: toggleDataSeries
                                                    },
                                                    data: [{
                                                            type: "column",
                                                            name: "Seller Registered Users",
                                                            indexLabel: "{y}",
                                                            yValueFormatString: "#0",
                                                            showInLegend: true,
                                                            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                                                        }, {
                                                            type: "column",
                                                            name: "Bidder Registered Users",
                                                            indexLabel: "{y}",
                                                            yValueFormatString: "#0",
                                                            showInLegend: true,
                                                            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                                                        }]
                                                });
                                                chart.render();

                                                function toggleDataSeries(e) {
                                                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                                        e.dataSeries.visible = false;
                                                    } else {
                                                        e.dataSeries.visible = true;
                                                    }
                                                    chart.render();
                                                }
                                            }
                                        </script>

                                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

                                    </div>
                                    <div class="tab-pane show fade" id="Month">
                                        <!--Monthly Chart-->

                                        <form>
                                            <label for="yearSelect">Select Year:</label>
                                            <select id="yearSelect" name="yearSelect" onchange="fetchMonthlyData()" style="width: 20%;height: 20%;">
                                                <option value="">--Select Year--</option>
                                                <?php
                                                $Yearquery = "SELECT DISTINCT YEAR(created_date) as year FROM tblsellers  WHERE created_date IS NOT NULL UNION SELECT DISTINCT YEAR(created_date) FROM tblbidders  WHERE created_date IS NOT NULL";
                                                $re = mysqli_query($conn, $Yearquery);
                                                while ($year = mysqli_fetch_row($re)) {
                                                    echo "<option value='$year[0]'>$year[0]</option>";
                                                }
                                                ?>
                                            </select>
                                        </form>
                                        <div id="chartContainerMonthly" style="height: 370px; width: 100%;"></div>
                                        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

                                        <script>
                                            var chart; // Define chart as a global variable

                                            function fetchMonthlyData() {
                                                var selectedYear = document.getElementById("yearSelect").value;
//                                               alert(selectedYear);
                                                if (selectedYear) {

                                                    var xhr = new XMLHttpRequest();
                                                    xhr.open("POST", "user-registration-report-FetchYearData.php?year=" + selectedYear, true);
                                                    xhr.send();
                                                    xhr.onreadystatechange = function () {
                                                        console.log("Request completed. Status:", this.status);
                                                        console.log("Response text:", this.responseText);
                                                        if (this.readyState == 4 && this.status == 200) {
                                                            try {
                                                                var response = JSON.parse(this.responseText);
                                                                console.log("Parsed Response:", response);

                                                                chart = new CanvasJS.Chart("chartContainerMonthly", {
                                                                    animationEnabled: true,
                                                                    theme: "light2",
                                                                    title: {
                                                                        text: "Registered Users Per Month for Year " + selectedYear
                                                                    },
                                                                    axisY: {
                                                                        includeZero: true
                                                                    },
                                                                    axisX: {
                                                                        title: "Months",
                                                                        interval: 1,
                                                                        valueFormatString: "MMM"
                                                                    },
                                                                    legend: {
                                                                        cursor: "pointer",
                                                                        verticalAlign: "center",
                                                                        horizontalAlign: "right",
                                                                        itemclick: toggleDataSeries
                                                                    },
                                                                    data: [{
                                                                            type: "column",
                                                                            name: "Seller Registered Users",
                                                                            indexLabel: "{y}",
                                                                            yValueFormatString: "#0",
                                                                            showInLegend: true,
                                                                            dataPoints: response.sellers
                                                                        }, {
                                                                            type: "column",
                                                                            name: "Bidder Registered Users",
                                                                            indexLabel: "{y}",
                                                                            yValueFormatString: "#0",
                                                                            showInLegend: true,
                                                                            dataPoints: response.bidders
                                                                        }]
                                                                });
                                                                chart.render();
                                                            } catch (e) {
                                                                console.error("Error parsing response:", e);
                                                            }
                                                        } else {
                                                            console.error("Failed to fetch data. Status:", this.status);
                                                        }
                                                    };
                                                    xhr.onerror = function () {
                                                        console.error("Request error.");
                                                    };

                                                } else {
                                                    alert("No year selected.");
                                                }
                                            }

                                            function toggleDataSeries(e) {
                                                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                                    e.dataSeries.visible = false;
                                                } else {
                                                    e.dataSeries.visible = true;
                                                }
                                                chart.render();
                                            }
                                        </script>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!--reports tables-->
                    <div class="col-lg-12" style="padding-bottom: calc(var(--bs-gutter-x)* .5);padding-top: calc(var(--bs-gutter-x)* .5);">
                        <div class="dashboard-widget">
                            <h5 class="title mb-10">Registered Users</h5>
                            <div class="dashboard-purchasing-tabs">
                                <ul class="nav-tabs nav">
                                    <li>
                                        <a href="#bidder" class="active" data-toggle="tab">Bidder</a>
                                    </li>
                                    <li>
                                        <a href="#seller" data-toggle="tab">Seller</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Bidder Tab -->
                                    <?php
                                    $maxDate = date('Y-m-d');
                                    $minDate = date('Y-m-d', strtotime('-1 years'));
                                    ?>
                                    <div class="tab-pane show active fade" id="bidder">
                                        <div class="form-group" id="bidder-filter">
                                            <form class="login-form" method="POST" action="">
                                                <div class="col-sm-12" style="padding-bottom: 10px; ">
                                                    <label for="from-date" class="mr-2" style="margin: 0px 5px">Filter by Created Date:</label>
                                                    <input type="date" name="fdate" id="bidder-fdate" 
                                                           min="<?php echo $minDate; ?>" 
                                                           max="<?php echo $maxDate; ?>" style="width: auto; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                                    <label for="to-date" class="mr-2" style="width: auto;margin: 0px 5px">to</label>
                                                    <input type="date" name="tdate" id="bidder-tdate" 
                                                           min="<?php echo $minDate; ?>" 
                                                           max="<?php echo $maxDate; ?>" style="width: auto; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                                    <button type="button" id="bidder-filter-btn" class="logout" style="width: auto;margin: 0px 5px ">Filter</button>

                                                </div>
                                            </form>
                                        </div>
                                        <div id="bidder-table">
                                            <!-- Default data table will be loaded here -->
                                        </div>
                                    </div>

                                    <!-- Seller Tab -->

                                    <div class="tab-pane show fade" id="seller">
                                        <div class="form-group" id="seller-filter">
                                            <form class="login-form" method="POST" action="">
                                                <div class="col-sm-12" style="padding-bottom: 10px;">
                                                    <label for="from-date" class="mr-2" style="margin: 0px 5px">Filter by Created Date:</label>
                                                    <input type="date" name="fdate" id="seller-fdate"  pattern="\d{4}-\d{2}-\d{2}" 
                                                           min="<?php echo $minDate; ?>" 
                                                           max="<?php echo $maxDate; ?>" style="width: auto; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff;margin: 0px 5px" required>
                                                    <label for="to-date" class="mr-2" style="width: auto;margin: 0px 5px">to</label>

                                                    <input type="date" name="tdate" id="seller-tdate" pattern="\d{4}-\d{2}-\d{2}" 
                                                           min="<?php echo $minDate; ?>" 
                                                           max="<?php echo $maxDate; ?>" style="width: auto; border: 1px solid rgba(97, 90, 191, 0.2); background: #ffffff; margin: 0px 5px" required>
                                                    <button type="button" id="seller-filter-btn" class="logout" style="width: auto ;margin: 0px 5px">Filter</button>
                                                </div>


                                            </form>
                                        </div>
                                        <div id="seller-table">
                                            <!-- Default data table will be loaded here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        function loadDefaultData() {
                            fetchData('bidder', '');
                            fetchData('seller', '');
                        }

                        function fetchData(type, queryString) {
                            let url = `user-Registration-Data.php?type=${type}&${queryString}`;

                            fetch(url)
                                    .then(response => response.text())
                                    .then(data => {
                                        document.getElementById(`${type}-table`).innerHTML = data;
                                    })
                                    .catch(error => console.error('Error fetching data:', error));
                        }

                        function setupFilterButtons() {
                            document.getElementById('bidder-filter-btn').addEventListener('click', function () {
                                let fdate = document.getElementById('bidder-fdate').value;
                                let tdate = document.getElementById('bidder-tdate').value;

                                if (!fdate || !tdate) {
                                    alert('Both date fields are required.');
                                    return;
                                }
                                if (new Date(fdate) > new Date(tdate)) {
                                    alert('The from date cannot be later than the to date.');
                                    return;
                                }
                                let queryString = `fdate=${fdate}&tdate=${tdate}`;
                                fetchData('bidder', queryString);
                            });

                            document.getElementById('seller-filter-btn').addEventListener('click', function () {
                                let fdate = document.getElementById('seller-fdate').value;
                                let tdate = document.getElementById('seller-tdate').value;

                                if (!fdate || !tdate) {
                                    alert('Both date fields are required.');
                                    return;
                                }
                                if (new Date(fdate) > new Date(tdate)) {
                                    alert('The from date cannot be later than the to date.');
                                    return;
                                }
                                let queryString = `fdate=${fdate}&tdate=${tdate}`;
                                fetchData('seller', queryString);
                            });
                        }

                        loadDefaultData();
                        setupFilterButtons();
                    });
                </script>
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
