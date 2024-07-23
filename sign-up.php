<!DOCTYPE html>
<html lang="en">


    <head>
        <?php
        session_start();
        ?>
        <!--<meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>E-Auction</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/owl.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <!--<link rel="stylesheet" href="assets/css/main.css">-->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/nice-select.css" rel="stylesheet" type="text/css"/>
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

                                <img src="assets/images/logo/logo.png" alt="logo"/>
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
                    <img src="assets/images/logo/logo2.png" alt="logo"/>
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
                        <a href="#0">Pages</a>
                    </li>
                    <li>
                        <span>Sign Up</span>
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
                            <h2 class="title">SIGN UP</h2>
                            <p>We're happy you're here!</p>
                        </div>
                        <ul class="login-with">

                            <li>
                                <a href="#0" id="login"><i class="fab fa-google-plus"></i>Log in with Google</a>
                            </li>
                        </ul>
                        <div class="or">
                            <span>Or</span>
                        </div>
                        <form class="login-form" method="post" action="">
                            <div class="form-group mb-30">
                                <label for="signup-fname"><i class="fa fa-user"></i></label>
                                <input type="text" id="signup-fname" placeholder="First Name" name="txtfirstname"
                                       <?php if (isset($_POST['txtfirstname'])) echo 'value="' . htmlspecialchars($_POST['txtfirstname']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30">
                                <label for="signup-lname"><i class="fa fa-user"></i></label>
                                <input type="text" id="signup-lname" placeholder="Last Name" name="txtlastname"
                                       <?php if (isset($_POST['txtlastname'])) echo 'value="' . htmlspecialchars($_POST['txtlastname']) . '"'; ?> required>
                            </div>


                            <div class="form-group mb-30" id="a">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="signup-number"><i class="fa-solid fa-phone"></i></label>
                                        <input type="tel" id="signup-number" placeholder="Mobile Number" name="txtMobileNo" pattern="[0-9]{10}" maxlength="10"
                                               <?php if (isset($_POST['txtMobileNo'])) echo 'value="' . htmlspecialchars($_POST['txtMobileNo']) . '"'; ?> required>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label for="signup-dob"><i class="fa fa-calendar"></i></label>
                                            <input type="date" id="signup-dob" name="dob"
                                                   <?php if (isset($_POST['dob'])) echo 'value="' . htmlspecialchars($_POST['dob']) . '"'; ?>required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="signup-number"><i class="fa-solid fa-envelope"></i></label>
                                        <input type="email" id="signup-email" placeholder="Email Address" name="txtemail"
                                               <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                    </div>
                                    <div class="col-sm-6" id="a">
                                        <div class="form-group mb-0">   
                                            <button type="submit" class="custom-button"  name="btnsend">Send OTP</button>
                                        </div>
                                    </div>

                                </div>


                            </div>



                            <div class="form-group mb-30" id="a">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <label for="signup-number"><i class="fa fa-key"></i></label>
                                        <input type="tel" id="txtotp" placeholder="Enter OTP" name="otp" pattern="[0-9]{6}" maxlength="6"
                                               <?php if (isset($_POST['otp'])) echo 'value="' . htmlspecialchars($_POST['otp']) . '"'; ?>>
                                    </div>
                                    <div class="col-sm-1" id="a">
                                        <div class="form-group mb-0">   
                                            <p class="timer"><span id="timer"></span></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="custom-button"  name="btnvarify" >Varify OTP</button>

                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="custom-button"  name="btnResend">Resend OTP</button>
                                        </div>
                                    </div>
                                </div>


                            </div>



                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-pass" placeholder="Password" name="txtpassword"
                                <?php if (isset($_POST['txtpassword'])) echo 'value="' . htmlspecialchars($_POST['txtpassword']) . '"'; ?> 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                                <!--<span class="pass-type"><i class="fas fa-eye"></i></span>-->
                            </div>

                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-conpass" placeholder="Conforim Password" name="txtconfirm_password"
                                <?php if (isset($_POST['txtconfirm_password'])) echo 'value="' . htmlspecialchars($_POST['txtconfirm_password']) . '"'; ?> 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                                <!--<span class="pass-type"><i class="fas fa-eye"></i></span>-->
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button"  name="btnsignup">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side cl-white">
                        <div class="section-header mb-0">
                            <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                            <p>Log in and go to your Dashboard.</p>
                            <a href="sign-in.php" class="custom-button transparent">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

// Load environment variables
        //require 'vendor/autoload.php';
        //$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        //$dotenv->load();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $otpexpire = 0;

            //0= otp is not expire
            //1= otp is  expire
            if (isset($_POST['btnsend'])) {
                sendOTP();
            }
            $currentTime = time();
            $endTime = $currentTime + 120;
            $timestamp = $_SERVER["REQUEST_TIME"];
            if (($timestamp - $_SESSION["TIME"]) > 120) {  // 300 refers to 300 seconds
                echo '<script>alert("OTP expired. Pls. try again.");</script>';
                $otpexpire = 1;
            } elseif (isset($_POST['btnvarify']) and $otpexpire == 0) {
                verifyOTP();
            } elseif (isset($_POST['btnResend'])) {
                resendOTP();
            } elseif (isset($_POST['btnsignup'])) {
                signup();
            }
        }

        function sendOTP() {
            if (isset($_POST['txtemail'])) {
                sendEmail($_POST['txtemail']);
                $_SESSION['vemail'] = $_POST['txtemail'];
            }
        }

        function resendOTP() {
            if (isset($_SESSION['email'])) {
                sendEmail($_SESSION['email']);
            } else {
                echo '<script>alert("No email address found in session.");</script>';
            }
        }

        function sendEmail($recipient_email) {
            require 'C:\xampp\htdocs\E-Auction\PHPMailer-master\src\PHPMailer.php';
            require 'C:\xampp\htdocs\E-Auction\PHPMailer-master\src\Exception.php';
            require 'C:\xampp\htdocs\E-Auction\PHPMailer-master\src\SMTP.php';

            try {
                // $otp = mt_rand(100000, 999999);
                $otp = 111111;
                $timestamp = $_SERVER["REQUEST_TIME"];
                $_SESSION["TIME"] = $timestamp;

                $mail = new PHPMailer(true);

                // SMTP settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'hemilghori@gmail.com';
                $mail->Password = 'nkagldxfrrntpzuz';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient
                $mail->setFrom('hemilghori@gmail.com', 'E-Auction');
                $mail->addAddress($recipient_email);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification OTP';
                $mail->Body = getEmailTemplate($otp);

                // Send email
                $mail->send();

                // Store OTP in session for verification
                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $recipient_email;

                echo '<script>alert("OTP sent successfully");</script>';
            } catch (Exception $e) {
                echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
            }
        }

        function verifyOTP() {
            if (isset($_POST['otp'])) {
                $enteredOTP = $_POST['otp'];
                $storedOTP = $_SESSION['otp'];
                $email = $_SESSION['email'];
                if ($enteredOTP == null) {
                    echo '<script>alert("Enter OTP First");</script>';
                }
                if ($enteredOTP == $storedOTP) {
                    echo '<script>alert("OTP verification successful for email: ' . $email . '");</script>';
                    $_SESSION['verifystatus'] = 1;
                } else {
                    echo '<script>alert("OTP verification failed. Please try again.");</script>';
                    $_SESSION['verifystatus'] = 0;
                }
            }
        }

        function signup() {
            if (isset($_POST['txtpassword']) && isset($_POST['txtconfirm_password'])) {
                $password = $_POST['txtpassword'];
                $confirmPassword = $_POST['txtconfirm_password'];
                $dob = $_POST['dob'];
                $passstatus = 0;
                $dobstatus = 0;

                if ($password !== $confirmPassword) {
                    echo '<script>alert("Passwords do not match. Please try again.");</script>';
                } elseif (empty($password)) {
                    echo '<script>alert("Password not valid.");</script>';
                } else {
                    $passstatus = 1;
                }

                $dobDate = new DateTime($dob);
                $now = new DateTime();
                $age = $now->diff($dobDate)->y;

                if ($age < 18) {
                    echo '<script>alert("You must be at least 18 years old to sign up.");</script>';
                } else if ($age > 65) {
                    echo '<script>alert("Age Not Allow.");</script>';
                    exit();
                } else {
                    $dobstatus = 1;
                }

                if ($dobstatus == 1 && $passstatus == 1 && isset($_SESSION['verifystatus']) && $_SESSION['verifystatus'] == 1) {

                    if ($_SESSION['vemail'] == $_POST['txtemail']) {
                        session_destroy();
                        store_data();
                    } else {
                        echo '<script>alert("Chnage the Email verify the email First");</script>';
                    }
                } else if (isset($_SESSION['verifystatus']) && $_SESSION['verifystatus'] == 0) {
                    echo '<script>alert("First complete email verification.");</script>';
                } else {
                    echo '<script>alert("Some thing is missing.");</script>';
                }
            }
        }
        
        function store_data() {
            ob_start();

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "e-Auction";

            $c = mysqli_connect($hostname, $username, $password, $database);
            if (!$c) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                //echo '<script>alert("Connection Succesfully");</script>';
                $fname = $_POST['txtfirstname'];
                $lname = $_POST['txtlastname'];
                $mo = $_POST['txtMobileNo'];

                $d = $_POST['dob'];
                $date = date("Y-d-m", strtotime($d));
                $email = $_POST['txtemail'];
                $pass = password_hash($_POST['txtpassword'], PASSWORD_DEFAULT);
                $qu = "INSERT INTO tbluser (FirstName, LastName, MobileNo, Email, DateofBirth, Password, Role) VALUES ('$fname', '$lname', '$mo', '$email', '$date', '$pass', 'buyer')";

                $q = mysqli_query($c, $qu);

                if (!$q) {
                    $e = mysqli_error($c);
                    die("Error: " . $e);
                } else {
                    //echo "<script>alert('User data stored successfully.');</script>";
                    //header("location:sign-in.php?email=$email");
                    // exit();
                    echo '<script>location.replace("sign-in.php?email=' . urlencode($email) . '")</script>';
                }

                mysqli_close($c);
            }
        }

        function getEmailTemplate($otp) {
            return '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .header {
                background-color: #004f9f;
                color: #ffffff;
                padding: 10px;
                text-align: center;
            }
            .content {
                margin-top: 20px;
                text-align: center;
            }
            .footer {
                background-color: #f4f4f4;
                color: #666666;
                padding: 10px;
                text-align: center;
                font-size: 12px;
                border-top: 1px solid #ddd;
            }
            .otp-code {
                font-size: 24px;
                font-weight: bold;
                margin: 20px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>E-Auction System</h1>
            </div>
            <div class="content">
                <p>Dear User,</p>
                <p>Your One-Time Password (OTP) for email verification is:</p>
                <div class="otp-code">' . $otp . '</div>
                <p>Please use this OTP to verify your email address.</p>
                <p>If you did not request this OTP, please ignore this email.</p>
            </div>
            <div class="footer">
                <p>© 2024 E-Auction System. All rights reserved.</p>
                <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
            </div>
        </div>
    </body>
    </html>';
        }
        ?>
        <script>
            // Get the end time from PHP
            var endTime = <?php echo $endTime; ?> * 1000; // Convert to milliseconds

            function startCountdown() {
                var now = new Date().getTime();

                var x = setInterval(function () {
                    now = new Date().getTime();
                    var distance = endTime - now;
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    //document.getElementById("timer").innerHTML = seconds ;
                    document.getElementById("timer").innerHTML = minutes + ":" + seconds.toString().padStart(2, '0') + " ";
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("timer").innerHTML = "OTP EXPIRED";
                        document.getElementById("otp1").disabled = true;
                        document.getElementById("btnverify").disabled = true;
                    }
                }, 1000);
            }

            window.onload = startCountdown;
        </script>

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
                                        <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="e38b868f93a3868d848c978b868e86cd808c8e">[email&#160;protected]</span></a>
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
