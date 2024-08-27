<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">


    <head>

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
                                <input type="email" id="login-email" placeholder="Email Address" name="txtemailadd" required>
                            </div>
                            <div class="form-group">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-pass" placeholder="Password" name="txtpass" required>
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
                                <label class="form-check-label" for="Merchant">
                                   As a Merchant
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
            } elseif ($_POST['signupOption'] == 'Merchant') {
                echo '<script>location.replace("sign-up-Merchant.php")</script>';
            }
        }
        ?>
        <!-- Sign Up Modal end -->
        <?php
        if (isset($_SESSION['txtemail'])) {
            echo '<script>location.replace("index.php")</script>';
            exit();
        }

        if (isset($_POST['btnlogin'])) {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "dbt_e-auction";

            $c = mysqli_connect($hostname, $username, $password, $database);
            if (!$c) {
                echo "<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>";
                exit();
            } else {
                $email = mysqli_real_escape_string($c, $_POST['txtemailadd']);
                $userPassword = $_POST['txtpass'];
                $datahashedPassword = '';

                // Check in tblsellers
                $qs = mysqli_query($c, "SELECT password FROM tblsellers WHERE email='$email'");
                if (mysqli_num_rows($qs) == 1) {
                    $r = mysqli_fetch_row($qs);
                    $datahashedPassword = $r[0];
                    if (empty($datahashedPassword)) {
                        echo '<script>alert("User Name not Found");</script>';
                        exit();
                    } else {
//                        echo "<script>alert('$datahashedPassword');</script>";
//                        echo "<script>alert('$userPassword');</script>";
//                        $t = password_verify($userPassword, $datahashedPassword);
//                        echo "<script>alert('$t');</script>";

                        if (password_verify($userPassword, $datahashedPassword)) {
                            $_SESSION['txtemail'] = $email;
                            echo '<script>location.replace("index.php")</script>';
                            exit();
                        } else {
                            echo '<script>alert("Wrong Password");</script>';
                            exit();
                        }
                    }
                }

                // Check in tblbidders if not found in tblsellers

                $qb = mysqli_query($c, "SELECT password FROM tblbidders WHERE email='$email'");
                if (mysqli_num_rows($qb) == 1) {
                    $r = mysqli_fetch_row($qb);
                    $datahashedPassword = $r[0];
                    if (empty($datahashedPassword)) {
                        echo '<script>alert("User Name not Found");</script>';
                        exit();
                    } else {
                        if (password_verify($userPassword, $datahashedPassword)) {
                            $_SESSION['txtemail'] = $email;
                            echo '<script>location.replace("index.php")</script>';
                            exit();
                        } else {
                            echo '<script>alert("Wrong Password");</script>';
                            exit();
                        }
                    }
                }



                // Check in tbladmin if not found in tblsellers and tblbidders

                $qa = mysqli_query($c, "SELECT password FROM tbladmin WHERE email='$email'");
                if (mysqli_num_rows($qa) == 1) {
                    $r = mysqli_fetch_row($qa);
                    $datahashedPassword = $r[0];
                    if (empty($datahashedPassword)) {
                        echo '<script>alert("User Name not Found");</script>';
                        exit();
                    } else {
//                        echo "<script>alert('$datahashedPassword');</script>";
//                        echo "<script>alert('$userPassword');</script>";
//                        echo "<script>alert('password_verify($userPassword, $datahashedPassword)');</script>";

                        if ($password_verify($userPassword, $datahashedPassword)) {
                            $_SESSION['txtemail'] = $email;
                            echo '<script>location.replace("index.php")</script>';
                            exit();
                        } else {
                            echo '<script>alert("Wrong Password");</script>';
                            exit();
                        }
                    }
                }

                mysqli_close($c);
            }
        }
        ?>


        <!--============ = Account Section Ends Here ============ = -->


        <!--============ = Footer Section Starts Here ============ = -->
        <?php
        include 'Footer.php';
        ?>
       
        <!--============ = Footer Section Ends Here ============ = -->



        <script data-cfasync = "false" src = "../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
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