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
                        <h5 class="title"><a href="#0"><?php
                                if (isset($_SESSION['txtemail'])) {
                                    echo $_SESSION['txtemail'];
                                }
                                ?></a></h5>
                        <!--<span class="username"><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7812171016381f15191114561b1715">[email&#160;protected]</a></span>-->
                    </div>
                </div>
                <ul class="dashboard-menu">
                    <li>
                        <a href="#0" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="flaticon-settings"></i>Personal Profile </a>
                    </li>
<!--                    <li>
                        <a href="my-bid.php"><i class="flaticon-auction"></i>My Bids</a>
                    </li>-->
                    <li>
                        <a href="winning-bids.php"><i class="flaticon-best-seller"></i>Winning Bids</a>
                    </li>
                    <li>
                        <a href="notifications.php"><i class="flaticon-alarm"></i>My Alerts</a>
                    </li>
                    <li>
                        <a href="my-favorites.php"><i class="flaticon-star"></i>My Favorites</a>
                    </li>
                    <li>
                        <button class="logout" onclick="window.location.href = 'logout.php'">
                            Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
