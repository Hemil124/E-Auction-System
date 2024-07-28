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
        <title>E-Auction</title>
        <script src="assets/js/main2.js" type="text/javascript"></script>
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
        include 'header.php';
        ?>
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <span>Sign Up as Seller</span>
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
                            <h2 class="title">SIGN UP FOR SELLER</h2>
                            <p>We're happy you're here!</p>
                        </div>

                        <!--                        <ul class="login-with">
                        
                                                    <li>
                                                    <div class="inputBox">
                                                        <button id="google-login-btn" type="button">
                                                            <i class="fab fa-google-plus"></i>  Sign in with Google
                                                        </button>
                                                    </div>
                                                    </li>
                                                </ul>-->
                        <!--                        <div class="or">
                                                    <span>Or</span>
                                                </div>-->
                        <form class="login-form" method="post" enctype="multipart/form-data" id="registration-form">
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
                                        <input type="tel" id="signup-number" placeholder="Mobile Number" name="txtMobileNo"
                                               pattern="\d{10}" maxlength="10"  <?php if (isset($_POST['txtMobileNo'])) echo 'value="' . htmlspecialchars($_POST['txtMobileNo']) . '"'; ?> required>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label for="signup-dob"><i class="fa fa-calendar"></i></label>
                                            <input type="date" id="signup-dob" name="dob"
                                            <?php if (isset($_POST['dob'])) echo 'value="' . htmlspecialchars($_POST['dob']) . '"'; ?> 
                                                   pattern="\d{4}-\d{2}-\d{2}" required>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    const dobInput = document.getElementById('signup-dob');
                                                    const today = new Date();
                                                    const currentYear = today.getFullYear();
                                                    const minYear = currentYear - 65;
                                                    const maxYear = currentYear - 18;
                                                    const minDate = new Date(minYear, today.getMonth(), today.getDate()).toISOString().split('T')[0];
                                                    const maxDate = new Date(maxYear, today.getMonth(), today.getDate()).toISOString().split('T')[0];
                                                    dobInput.min = minDate;
                                                    dobInput.max = maxDate;
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="signup-email"><i class="fa-solid fa-envelope"></i></label>
                                        <input type="email" id="signup-email" placeholder="Email Address" name="txtemail"
                                               <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" id="signup-adhar" placeholder="Enter Adhar No" name="signup-adhar" pattern="\d{11}" maxlength="12" minlength="12"
                                               <?php if (isset($_POST['signup-adhar'])) echo 'value="' . htmlspecialchars($_POST['signup-adhar']) . '"'; ?> required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30" id="a">
                                <div class="row">
                                    <div class="col-sm-8" style="border: 2px dashed #007bff; border-radius: 10px; ">
                                        <lable>Upload Your Adhar Card PDF, JPEG or JPG formats only
                                            <input type="file" name="image" required style="border: 0px; margin: 0 auto;"/>
                                        </lable>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <!--<div class="col-sm-3"></div>-->
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-pass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-pass" placeholder="Password" name="txtpassword"
                                <?php if (isset($_POST['txtpassword'])) echo 'value="' . htmlspecialchars($_POST['txtpassword']) . '"'; ?> 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                <span class="pass-type" id="toggle-password"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group mb-30">
                                <label for="login-conpass"><i class="fas fa-lock"></i></label>
                                <input type="password" id="login-conpass" placeholder="Confirm Password" name="txtconfirm_password"
                                <?php if (isset($_POST['txtconfirm_password'])) echo 'value="' . htmlspecialchars($_POST['txtconfirm_password']) . '"'; ?> 
                                       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                <span class="pass-type" id="toggle-confirm-password"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button"  name="btnsignup">Sign Up</button>
                            </div>
                        </form>

                        <script>
                            document.getElementById('signup-adhar').addEventListener('input', function (e) {
                                // Remove non-numeric characters
                                this.value = this.value.replace(/\D/g, '');
                            });
                            document.getElementById('signup-number').addEventListener('input', function (e) {
                                // Remove non-numeric characters
                                this.value = this.value.replace(/\D/g, '');
                            });


                        </script>

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
        

        // Load environment variables
        //require 'vendor/autoload.php';
        //$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        //$dotenv->load();



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            //0= otp is not expire
            //1= otp is  expire


            if (isset($_POST['btnsignup'])) {
                signup();
            }
        }

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        function sendEmail($recipient_email) {
            require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\PHPMailer.php';
            require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\Exception.php';
            require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\SMTP.php';
            try {


                // $otp = mt_rand(10000, 99999);
                $otp = 11111;
                $_SESSION["O"] = "a";
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
                //$mail->send();
                // Store OTP in session for verification

                $_SESSION['email'] = $recipient_email;

                echo "<script>alert('{$_SESSION['O']}');</script>";
            } catch (Exception $e) {
                echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>';
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

        function signup() {
            if (isset($_POST['txtpassword']) && isset($_POST['txtconfirm_password'])) {
                $password = $_POST['txtpassword'];
                $confirmPassword = $_POST['txtconfirm_password'];
                $passstatus = 0;
               if ($password !== $confirmPassword) {
                                        echo '<script>alert("Passwords do not match. Please try again.");</script>';
                    $confirmPassword = "Passwords do not match. Please try again.";
                } elseif (empty($password)) {
                    echo '<script>alert("Password not valid.");</script>';
                } else {
                    $passstatus = 1;
                }

                if ($passstatus == 1) {
                    $email = $_POST['txtemail'];
                    include 'connection.php';
                    $email_check_bidder = "select * from tblbidders where email='$email'";
                    $result_bidder = mysqli_query($conn, $email_check_bidder);

                    $email_check_seller = "select * from tblsellers where email='$email'";
                    $result_seller = mysqli_query($conn, $email_check_seller);

                    $email_check_admin = "select * from tbladmin where email='$email'";
                    $result_admin = mysqli_query($conn, $email_check_admin);

                    if (mysqli_num_rows($result_bidder) == 1 || mysqli_num_rows($result_seller) == 1 || mysqli_num_rows($result_admin) == 1) {
                        echo '<script>alert("Email ID is already exist.")</script>';
                        exit();
                    } else {

                        sendEmail($email);
                        $_SESSION['email'] = $email;
                        echo '<script>window.location.href="varification.php"</script>';
                        exit();
                    }
                } else {
                    echo '<script>alert("Cheak All Details Something Went Wrong")</script>';
                }
            }
        }

        function store_data() {


            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "e-Auction";

            $c = mysqli_connect($hostname, $username, $password, $database);
            if (!$c) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                //cheak email exists or not
                //echo '<script>alert("Connection Succesfully");</script>';
                //store data
                $fname = $_POST['txtfirstname'];
                $lname = $_POST['txtlastname'];
                $mo = $_POST['txtMobileNo'];

                $d = $_POST['dob'];
                $date = date("Y-d-m", strtotime($d));
                $email = $_POST['txtemail'];
                $pass = password_hash($_POST['txtpassword'], PASSWORD_DEFAULT);
                $qu = "INSERT INTO tblusers (FirstName, LastName, MobileNo, Email, DateofBirth, Password, Role) VALUES ('$fname', '$lname', '$mo', '$email', '$date', '$pass', 'buyer')";

                $q = mysqli_query($c, $qu);

                if (!$q) {
                    $e = mysqli_error($c);
                    die("Error: " . $e);
                } else {
                    //echo "<script>alert('User data stored successfully.');</script>";
                    //header("location:sign-in.php?email=$email");
                    // exit();
                    echo '<script>location.replace("index.php")</script>';
                }
            }


            mysqli_close($c);
        }
        ?>


        <!--============= Account Section Ends Here =============-->

        <?php include 'Footer.php'; ?>
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
</html>
