<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OTP System</title>
    <?php session_start(); ?>
</head>
<body>
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                        <h2 class="title">Forgot Password</h2>
                    </div>

                    <form class="login-form" method="post" action="" id="email-form">
                        <div class="form-group mb-30">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="signup-email"><i class="fa-solid fa-envelope"></i></label>
                                    <input type="email" id="signup-email" placeholder="Email Address" name="txtemail"
                                        <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <button type="button" class="custom-button" id="sendOtpButton" onclick="sendOtp()">Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="form-group mb-30">
                        <div class="row">
                            <div class="col-sm-5">
                                <form class="login-form" method="post" id="otp-form">
                                    <label for="txtotp"><i class="fa fa-key"></i></label>
                                    <input type="tel" id="txtotp" placeholder="Enter OTP" name="otp" pattern="[0-9]{6}" maxlength="6">
                                </form>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group mb-0">
                                    <p class="timer"><span id="timer"></span></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-0">
                                    <form class="login-form" method="post" id="verify-form">
                                        <button type="submit" class="custom-button" name="btnverify">Verify OTP</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-0">
                                    <form class="login-form" method="post" id="resend-form">
                                        <button type="button" class="custom-button" id="resendOtpButton" onclick="resendOtp()">Resend OTP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="login-form" method="post">
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="New Password" name="txtpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>

                        <div class="form-group mb-30">
                            <label for="login-conpass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-conpass" placeholder="Confirm Password" name="txtconfirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button" name="btnsignup">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <!-- Add any additional content here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnsend'])) {
            send();
        }

        $currentTime = time();
        if (isset($_SESSION["TIME"]) && ($currentTime - $_SESSION["TIME"]) > 120) {
            echo '<script>alert("OTP expired. Please try again.");</script>';
            unset($_SESSION["TIME"]); // Clear session time
        } elseif (isset($_POST['btnverify'])) {
            verifyOTP();
        } elseif (isset($_POST['btnResend'])) {
            resend();
        } elseif (isset($_POST['btnsignup'])) {
            signup();
        }
    }

    function send() {
        if (isset($_POST['txtemail'])) {
            sendEmail($_POST['txtemail']);
            $_SESSION['vemail'] = $_POST['txtemail'];
            $_SESSION['TIME'] = time(); // Set the OTP timestamp
        }
    }

    function resend() {
        if (isset($_SESSION['email'])) {
            sendEmail($_SESSION['email']);
            $_SESSION['TIME'] = time(); // Reset the OTP timestamp
        } else {
            echo '<script>alert("No email address found in session.");</script>';
        }
    }

    function sendEmail($recipient_email) {
        require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\PHPMailer.php';
        require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\Exception.php';
        require 'C:\xampp\htdocs\E-Auction-System\PHPMailer-master\src\SMTP.php';

        try {
            $otp = 111111; // Generate a random OTP
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hemilghori@gmail.com';
            $mail->Password = 'nkagldxfrrntpzuz';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('hemilghori@gmail.com', 'E-Auction');
            $mail->addAddress($recipient_email);

            $mail->isHTML(true);
            $mail->Subject = 'Email Verification OTP';
            //$mail->Body = getEmailTemplate($otp);

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
            $passstatus = 0;

            if ($password !== $confirmPassword) {
                echo '<script>alert("Passwords do not match. Please try again.");</script>';
            } elseif (empty($password)) {
                echo '<script>alert("Password not valid.");</script>';
            } else {
                $passstatus = 1;
            }

            if ($_SESSION['verifystatus'] == 1 && $passstatus == 1) {
                echo '<script>alert("Password Change Successfully.");</script>';
            } elseif ($_SESSION['verifystatus'] == 0) {
                echo '<script>alert("OTP not verified yet.");</script>';
            } else {
                echo '<script>alert("Please Enter Valid Password.");</script>';
            }
        }
    }

    
    ?>

    <script>
        var countdownInterval;
        var endTime;

        function startCountdown() {
            var now = new Date().getTime();

            countdownInterval = setInterval(function () {
                now = new Date().getTime();
                var distance = endTime - now;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("timer").innerHTML = minutes + ":" + seconds.toString().padStart(2, '0');

                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("timer").innerHTML = "OTP EXPIRED";
                    document.getElementById("txtotp").disabled = true;
                    document.getElementById("sendOtpButton").disabled = true;
                }
            }, 1000);
        }

        function sendOtp() {
            endTime = new Date().getTime() + 2 * 60 * 1000; // 2 minutes in milliseconds
            document.getElementById("resendOtpButton").disabled = false;
            document.getElementById("email-form").submit();
            startCountdown();
        }

        function resendOtp() {
            endTime = new Date().getTime() + 2 * 60 * 1000; // 2 minutes in milliseconds
            clearInterval(countdownInterval);
            startCountdown();
        }

        window.onload = function () {
            document.getElementById("resendOtpButton").disabled = true;
        };
    </script>
</body>
</html>
