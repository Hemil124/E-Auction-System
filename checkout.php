<?php
session_start();
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
    </head>

    <body>
        <?php
        include 'Header.php';
        ?>
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <span>Check Out</span>
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
                            <h2 class="title">CHECK OUT</h2>
                            <p>We're happy for you participant in auction!</p>
                        </div>
                        <form class="login-form" method="post" action="payscript.php">
                            <div class="form-group mb-30">
                                <label for="fname"><i class="fa fa-user"></i></label>
                                <input type="text" id="fname" placeholder="Full Name" name="name"
                                       <?php if (isset($_POST['txtitemname'])) echo 'value="' . htmlspecialchars($_POST['txtitemname']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30">
                                <label for="email"><i class="fa fa-user"></i></label>
                                <input type="text" id="email" placeholder="Your Email ID" name="email"
                                       <?php if (isset($_POST['txtitemname'])) echo 'value="' . htmlspecialchars($_POST['txtitemname']) . '"'; ?> required>
                            </div>
                            <input type="hidden" value="<?php echo 'ORDER'.rand(111111,99999); ?>" name="orderid">
                            <input type="hidden" value="<?php echo 1; ?>" name="amount">
                            <div class="form-group mb-30">
                                <label for="mobile"><i class="fa fa-user"></i></label>
                                <input type="text" id="mobile" placeholder="Your Mobile Number" name="mobile"
                                       <?php if (isset($_POST['txtitemname'])) echo 'value="' . htmlspecialchars($_POST['txtitemname']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30">
                                <label for="address"><i class="fa fa-user"></i></label>
                                <input type="text" id="address" placeholder="Your Address" name="address"
                                       <?php if (isset($_POST['txtitemname'])) echo 'value="' . htmlspecialchars($_POST['txtitemname']) . '"'; ?> required>
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