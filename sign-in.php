<!DOCTYPE html>
<html lang="en">


    <head>
        <?PHP
        session_start();
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>E-Auction - Bid And Auction </title>

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
        <!--        <div class="overlayer" id="overlayer">
                    <div class="loader">
                        <div class="loader-inner"></div>
                    </div>
                </div>-->
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--============= ScrollToTop Section Ends Here =============-->


        <!--============= Header Section Starts Here =============-->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-wrapper">
                        <ul class="customer-support">
                            <li class="cmn-support-text">
                                <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                            </li>
                            <li class="customer-cupport-lang">
                                <i class="fas fa-globe"></i>
                                <select name="language" class="select-bar">
                                    <option value="en">En</option>
                                    <option value="Bn">Bn</option>
                                    <option value="Rs">Rs</option>
                                    <option value="Us">Us</option>
                                    <option value="Pk">Pk</option>
                                    <option value="Arg">Arg</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="cart-button-area">
                            <li>
                                <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                            </li>                        
                            <li>
                                <a href="sign-in.php" class="user-button"><i class="flaticon-user"></i></a>
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <ul class="menu ml-auto">
                            <li>
                                <a href="#0">Home</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.php">Home Page One</a>
                                    </li>
                                    <li>
                                        <a href="index-2.php">Home Page Two</a>
                                    </li>
                                    <li>
                                        <a href="index-3.php">Home Page Three</a>
                                    </li>
                                    <li>
                                        <a href="index-4.php">Home Page Four</a>
                                    </li>
                                    <li>
                                        <a href="index-5.php">Home Page Five</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.php">Auction</a>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#0">Product</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="product.php">Product Page 1</a>
                                            </li>
                                            <li>
                                                <a href="product-2.php">Product Page 2</a>
                                            </li>
                                            <li>
                                                <a href="product-details.php">Product Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">My Account</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="sign-up.php">Sign Up</a>
                                            </li>
                                            <li>
                                                <a href="sign-in.php">Sign In</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Dashboard</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="profile.php">Personal Profile</a>
                                            </li>
                                            <li>
                                                <a href="my-bid.php">My Bids</a>
                                            </li>
                                            <li>
                                                <a href="winning-bids.php">Winning Bids</a>
                                            </li>
                                            <li>
                                                <a href="notifications.php">My Alert</a>
                                            </li>
                                            <li>
                                                <a href="my-favorites.php">My Favorites</a>
                                            </li>
                                            <li>
                                                <a href="referral.php">Referrals</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="faqs.php">Faqs</a>
                                    </li>
                                    <li>
                                        <a href="error.php">404 Error</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="search-form">
                            <input type="text" placeholder="Search for brand, model....">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="search-bar d-md-none">
                            <a href="#0"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <span>Sign In</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->


        <!--============= Account Section Starts Here =============-->
        <section class="account-section padding-bottom">
            <div class="container">
                <div class="account-wrapper mt--100 mt-lg--440">
                    <div class="left-side">
                        <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                            <h2 class="title">HI, THERE</h2>
                            <p>You can log in to your E-Auction account here.</p>
                        </div>
                        <!--                        <ul class="login-with">
                        
                                                    <li>
                                                        <a  href="#0" id="login"><i class="fab fa-google-plus"></i>Log in with Google</a>
                                                    </li>
                                                </ul>
                                                <div class="or">
                                                    <span>Or</span>
                                                </div>-->
                        <form class="login-form" method="POST">
                            <div class="form-group mb-30">
                                <label for="login-email"><i class="fa-solid fa-envelope"></i></label>
                                <input type="email" id="login-email" placeholder="Email Address" name="txtemail">
                            </div>
                            <div class="form-group">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-pass" placeholder="Password" name="txtpass">
                                <span class="pass-type" id="toggle-password"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <a href="forgot.php">Forgot Password?</a>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button" name="btnlogin">LOG IN</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side cl-white">
                        <div class="section-header mb-0">
                            <h3 class="title mt-0">NEW HERE?</h3>
                            <p>Sign up and create your Account</p>
                            <!--<a href="sign-up.php" class="custom-button transparent">Sign Up</a>-->
                            <button class="custom-button transparent" data-toggle="modal" data-target="#signUpModal">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sign Up Modal -->
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
                        <!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>-->
                    </div>
                    <div class="modal-body">
                        <form id="signUpForm" method="POST" action="" style="color:black;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="signupOption" id="customer"  value="customer">
                                <label class="form-check-label" for="customer">
                                    As a Bidder
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="signupOption" id="seller" value="seller">
                                <label class="form-check-label" for="seller">
                                    As a Seller 
                                </label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="custom-button" data-dismiss="modal" style="width: 150px;">Close</button>
                        <button type="submit" class="custom-button" name="popupok"style="width: 150px; ">OK</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['popupok'])) {
            if ($_POST['signupOption'] == 'customer') {
                echo '<script>location.replace("sign-up-Bidder.php")</script>';
            } elseif ($_POST['signupOption'] == 'seller') {
                echo '<script>location.replace("sign-up-seller.php")</script>';
            }
        }
        ?>
        <!-- Sign Up Modal end -->
        <?php
        if (isset($_SESSION['txtemail'])) {
            echo '<script>location.replace("index.php")</script>';
        }

        if (isset($_POST['btnlogin'])) {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "e-Auction";

            // Establish database connection
            $c = mysqli_connect($hostname, $username, $password, $database);
            if (!$c) {
//                echo '<script>alert("Connection Error: ' . mysqli_connect_error() . '");</script>';
                echo '<script>alert("Some Went Wrong While Connecting server.");</script>';
                exit();
            } else {
                //echo '<script>alert("Connection Successful");</script>';


                $email = mysqli_real_escape_string($c, $_POST['txtemail']);
                $userPassword = $_POST['txtpass'];
                $qu = "SELECT Password FROM tblusers WHERE Email='$email'";

                // Execute the query

                $q = mysqli_query($c, $qu);

                if (!$q) {
                    // Print error details if the query fails
                    echo '<script>alert("Query Error: ' . mysqli_error($c) . '");</script>';
                } elseif (mysqli_num_rows($q) == 0) {
                    // Handle case where no results are found
                    echo '<script>alert("User Name not Found");</script>';
                } else {
                    $r = mysqli_fetch_row($q);
                    $datahashedPassword = $r[0];

                    if (password_verify($userPassword, $datahashedPassword)) {
                        $_SESSION['txtemail'] = $email;
                        //echo '<script>alert("Login Successfully");</script>';
                        echo '<script>location.replace("index.php")</script>';
                        exit();
                    } else {
                        // echo '<script>location.replace("index.php?email=' . urlencode($email) . '")</script>';
                        echo '<script>alert("Wrong Password");</script>';
                    }
                }

                // Close the database connection
                mysqli_close($c);
            }
        }
        ?>


        <!--============= Account Section Ends Here =============-->


        <!--============= Footer Section Starts Here =============-->
        <footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
            <div class="footer-top-shape">
                <img src="assets/css/img/footer-top-shape.png" alt="css">
            </div>
            <div class="anime-wrapper">
                <div class="anime-1 plus-anime">
                    <img src="assets/images/footer/p1.png" alt="footer">
                </div>
                <div class="anime-2 plus-anime">
                    <img src="assets/images/footer/p2.png" alt="footer">
                </div>
                <div class="anime-3 plus-anime">
                    <img src="assets/images/footer/p3.png" alt="footer">
                </div>
                <div class="anime-5 zigzag">
                    <img src="assets/images/footer/c2.png" alt="footer">
                </div>
                <div class="anime-6 zigzag">
                    <img src="assets/images/footer/c3.png" alt="footer">
                </div>
                <div class="anime-7 zigzag">
                    <img src="assets/images/footer/c4.png" alt="footer">
                </div>
            </div>
            <div class="newslater-wrapper">
                <div class="container">
                    <div class="newslater-area">
                        <div class="newslater-thumb">
                            <img src="assets/images/footer/newslater.png" alt="footer">
                        </div>
                        <div class="newslater-content">
                            <div class="section-header left-style mb-low" data-aos="fade-down" data-aos-duration="1100">
                                <h5 class="cate">Bid with confidence, win with pride</h5>
                                <h3 class="title">From Bidders to Winners: Start Bidding Today</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top padding-bottom padding-top">
                <div class="container">
                    <div class="row mb--60">
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1000">
                            <div class="footer-widget widget-links">
                                <h5 class="title">Auction Categories</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Ending Now</a>
                                    </li>
                                    <li>
                                        <a href="#0">Vehicles</a>
                                    </li>
                                    <li>
                                        <a href="#0">Watches</a>
                                    </li>
                                    <li>
                                        <a href="#0">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="#0">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jewelry</a>
                                    </li>
                                    <li>
                                        <a href="#0">Art</a>
                                    </li>
                                    <li>
                                        <a href="#0">Sports & Outdoor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1300">
                            <div class="footer-widget widget-links">
                                <h5 class="title">About Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">About Sbidu</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help</a>
                                    </li>
                                    <li>
                                        <a href="#0">Affiliates</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#0">Press</a>
                                    </li>
                                    <li>
                                        <a href="#0">Our blog</a>
                                    </li>
                                    <li>
                                        <a href="#0">Collectors' portal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1600">
                            <div class="footer-widget widget-links">
                                <h5 class="title">We're Here to Help</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#0">Safe and Secure</a>
                                    </li>
                                    <li>
                                        <a href="#0">Shipping Information</a>
                                    </li>
                                    <li>
                                        <a href="#0">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help & FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1800">
                            <div class="footer-widget widget-follow">
                                <h5 class="title">Follow Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="80e8e5ecf0c0e5eee7eff4e8e5ede5aee3efed">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                    </li>
                                </ul>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright-area">
                        <div class="footer-bottom-wrapper">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
                            </div>
                            <ul class="gateway-area">
                                <li>
                                    <a href="#0"><img src="assets/images/footer/paypal.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/visa.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/discover.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/mastercard.png" alt="footer"></a>
                                </li>
                            </ul>
                            <div class="copyright"><p>&copy; Copyright 2024 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-app.js";
        import {getAuth, GoogleAuthProvider, signInWithRedirect, getRedirectResult } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyByKJ3hxiWHjKYaRJF-GDKPyBGQy8iKW6c",
            authDomain: "e-auction-d55ef.firebaseapp.com",
            projectId: "e-auction-d55ef",
            storageBucket: "e-auction-d55ef.appspot.com",
            messagingSenderId: "632262014249",
            appId: "1:632262014249:web:b4a2b0884bfe6335603338"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);
        const provider = new GoogleAuthProvider(app);
        login.addEventListener('click', (e) => {
            signInWithRedirect(auth, provider);
            getRedirectResult(auth)
                    .then((result) => {
                        // This gives you a Google Access Token. You can use it to access Google APIs.
                        const credential = GoogleAuthProvider.credentialFromResult(result);
                        const token = credential.accessToken;

                        // The signed-in user info.
                        const user = result.user;
                        // IdP data available using getAdditionalUserInfo(result)
                        // ...
                    }).catch((error) => {
                // Handle Errors here.
                const errorCode = error.code;
                const errorMessage = error.message;
                // The email of the user's account used.
                const email = error.customData.email;
                // The AuthCredential type that was used.
                const credential = GoogleAuthProvider.credentialFromError(error);
                console.log(credential);
                // ...
            });
        });
    </script>
</html>