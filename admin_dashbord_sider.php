<!DOCTYPE html>
<?php
//        session_start();
//without login can't open indexpage!!        
$_SESSION['txtemail'] = "22bmiit142@gmail.com";
?>
<html>
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
                        <h5 class="title"><a href="#0"><?php if(isset($_SESSION['txtemail'])){echo $_SESSION['txtemail'];}?></a></h5>
                        <!--<span class="username"><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7812171016381f15191114561b1715">[email&#160;protected]</a></span>-->
                    </div>
                </div>
                <ul class="dashboard-menu">
                    <li>
                        <a href="Admin_Dashboard.php" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick="toggleCategoryOptions()">
                            <img src="assets/images/flaticon/list-solid.svg" alt="Manage Category Icon" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;font-size: 2px;">
                            Manage Category
                            <span id="arrowIcon" style="float: right; color: #ee4730;">&#x25BC;</span> 
                        </a>
                        <ul id="categoryOptions" style="display: none; margin-left: 50px;">
                            <li>
                                <a href="All_Category.php">
                                    <img src="assets/images/flaticon/arrow-right-light.svg" alt="Right Arrow Icon" style="width: 15px; height: 15px; vertical-align: middle;">
                                    All Categoryes
                                </a>
                            </li>
                            <li>
                                <a href="Update_Category.php">
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
                        <a href="admin-item-list.php"><i class="fa-regular fa-circle-check"></i></i>Item Verify</a>
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
                        <a href="Manage_Payment.php"><i class="flaticon-best-seller"></i>Manage Payment</a>
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
    </body>
</html>
