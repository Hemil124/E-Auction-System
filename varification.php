<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OTP Verification Page</title>
        <!-- Bootstrap 5 stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- FontAwesome 6 stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body {
                background-color: #ebecf0;
            }

            .otp-letter-input {
                width: 50px; /* Adjust width as needed */
                height: 50px; /* Adjust height as needed */
                border: none; /* Remove the border */
                border-bottom: 2px solid blue; /* Add a line at the bottom */
                border-radius: 0; /* Remove any border radius */
                color: black;
                font-size: 1.5rem; /* Responsive font size */
                text-align: center;
                font-weight: bold;
                background-color: transparent; /* Ensure background is transparent */
                margin: 0 5px; /* Adjust spacing */
            }

            .btn {
                width: 100%; /* Full width on small screens */
                max-width: 170px; /* Max width for larger screens */
                color: #ffffff;
                border-radius: 30px;
                font-weight: 500;
                text-transform: uppercase;
                padding: 12px 0; /* Adjust padding for smaller screens */
                font-size: 1rem; /* Responsive font size */
                background: -webkit-linear-gradient(90deg, rgb(61, 169, 245) 0%, rgb(104, 61, 245) 100%);
                box-shadow: -1.04px 4.891px 20px 0px rgba(69, 49, 183, 0.5);
                font-family: "Roboto", sans-serif;
                transition: all 0.4s;
                margin: 10px 0; /* Vertical spacing */
            }

            .btn:hover {
                background-color: hsl(261deg 80% 48%);
                color: hsl(0, 0%, 100%);
                box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
            }

            .btn:active {
                background-color: hsl(261deg 80% 48%);
                color: hsl(0, 0%, 100%);
                box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
                transform: translateY(10px);
                transition: 100ms;
            }

            .timer {
                font-size: 1rem; /* Responsive font size */
                font-weight: bold;
            }
        </style>
        <script>
            let timerInterval;
            const timerDuration = 2 * 60; // 2 minutes in seconds

            function startTimer() {
                let remainingTime = timerDuration;
                const timerDisplay = document.getElementById('timer');

                function updateTimer() {
                    const minutes = Math.floor(remainingTime / 60);
                    const seconds = remainingTime % 60;
                    timerDisplay.textContent = `Time remaining: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                    remainingTime--;

                    if (remainingTime < 0) {
                        clearInterval(timerInterval);
                        timerDisplay.textContent = "Time remaining: Time's up!";
                        document.getElementById('resend-link').style.display = 'block';
                    }
                }

                updateTimer(); // Initial call to display time immediately
                timerInterval = setInterval(updateTimer, 1000);
            }

            function moveToNextInput(current, nextInputId) {
                if (current.value.length === 1) {
                    const nextInput = document.getElementById(nextInputId);
                    if (nextInput) {
                        nextInput.focus();
                    }
                }
            }

            function moveToPrevInput(event, current, prevInputId) {
                if (event.key === "Backspace" && current.value === "") {
                    const prevInput = document.getElementById(prevInputId);
                    if (prevInput) {
                        prevInput.focus();
                    }
                }
            }

            function allowOnlyNumbers(e) {
                const keyCode = e.keyCode || e.which;
                if (keyCode < 48 || keyCode > 57) {
                    e.preventDefault();
                }
            }

            function clearOtpFields() {
                const otpFields = document.querySelectorAll('.otp-letter-input');
                otpFields.forEach(field => field.value = '');
                document.getElementById('otp1').focus(); // Optionally, set focus back to the first field
                clearInterval(timerInterval); // Stop the timer
                document.getElementById('timer').textContent = "Time remaining: 2:00"; // Reset timer display
                document.getElementById('resend-link').style.display = 'none'; // Hide resend link
            }



            window.onload = function () {
                startTimer(); // Start the timer when the page loads
            };

            function resendOtp() {
                clearOtpFields(); // Clear OTP fields
                startTimer(); // Restart the timer
                document.getElementById('resend-form').submit(); // Submit the form to resend OTP
            }


            history.pushState(null, null, location.href);
            window.onpopstate = function () {
                history.go(1);
            };
        </script>
    </head>
    <body style="background-color:#000000CC;">
        <div class="container p-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="bg-white p-4 rounded-3 shadow-sm border">
                        <div class="text-center">
                            <p class="text-success" style="font-size: 4rem;">
                                <i class="fa-solid fa-envelope-circle-check" style="color: rgb(104, 61, 245);"></i>
                            </p>
                            <a href="sign-up-Bidder.php" target="target">back</a>
                            <p class="h4">Please check your Email</p>
                            <!--<p class="text-muted">We've sent a code to contact@curfcode.com</p>-->
                            <p class="text-muted">We've sent a code to <?php if (isset($_SESSION['txtemail'])) echo htmlspecialchars($_SESSION['txtemail'], ENT_QUOTES, 'UTF-8'); ?><label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label></p>
                            <p class="text-muted timer" id="timer">Time remaining: 2:00</p>
                            <a id="resend-link" href="#" onclick="resendOtp()" style="display:none; color:black;">Click to resend.</a>
                            <form method="post" action="">
                                <div class="pt-4 pb-2">
                                    <div class="d-flex justify-content-center flex-wrap">
                                        <input id="otp1" class="otp-letter-input" type="text" name="otp1" maxlength="1" oninput="moveToNextInput(this, 'otp2')" onkeypress="allowOnlyNumbers(event)" required>
                                        <input id="otp2" class="otp-letter-input" type="text" name="otp2" maxlength="1" oninput="moveToNextInput(this, 'otp3')" onkeydown="moveToPrevInput(event, this, 'otp1')" onkeypress="allowOnlyNumbers(event)" required>
                                        <input id="otp3" class="otp-letter-input" type="text" name="otp3" maxlength="1" oninput="moveToNextInput(this, 'otp4')" onkeydown="moveToPrevInput(event, this, 'otp2')" onkeypress="allowOnlyNumbers(event)" required>
                                        <input id="otp4" class="otp-letter-input" type="text" name="otp4" maxlength="1" oninput="moveToNextInput(this, 'otp5')" onkeydown="moveToPrevInput(event, this, 'otp3')" onkeypress="allowOnlyNumbers(event)" required>
                                        <input id="otp5" class="otp-letter-input" type="text" name="otp5" maxlength="1" oninput="moveToNextInput(this, '')" onkeydown="moveToPrevInput(event, this, 'otp4')" onkeypress="allowOnlyNumbers(event)" required>
                                    </div>
                                </div>
                                <div class="text-center pt-4">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-2">
                                            <button type="button" class="btn" onclick="resendOtp()" name="resend">Resend OTP</button>
                                        </div>
                                        <div class="col-12 col-md-6 mb-2">
                                            <button type="submit" class="btn" name="verify">Verify OTP</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="resend-form" method="post" action="">
                                <input type="hidden" name="resend" value="1">
                            </form>


                            <?php
//                            if(isset($_SESSION['txtemail']))
//                            {
//                                echo '<script>window.location.href="varification.php"</script>';
//                            }
//echo "<script>alert('{$_SESSION['email']}');</script>";
//include 'sendotp.php';
//$t =new test();
//$t->sendEmail($recipient_email)
//if (isset($_POST['verify'])) {
//    echo "<script>alert('in varify');</script>";
//    $otp1 = isset($_POST['otp1']) ? trim($_POST['otp1']) : '';
//    $otp2 = isset($_POST['otp2']) ? trim($_POST['otp2']) : '';
//    $otp3 = isset($_POST['otp3']) ? trim($_POST['otp3']) : '';
//    $otp4 = isset($_POST['otp4']) ? trim($_POST['otp4']) : '';
//    $otp5 = isset($_POST['otp5']) ? trim($_POST['otp5']) : '';
//
//    $otp = $otp1 . $otp2 . $otp3 . $otp4 . $otp5;
//    $otp_code = $_SESSION['otp'];
//    
//    echo "<script>alert('{$otp} {$_SESSION['otp']}');</script>";
//    if (strlen($otp) === 5) {
//        if ($otp_code == $otp) {
//            if ($_SESSION["forgot"] == 1) {
//                echo '<div class="alert alert-success">Verification successful!</div>';
//                echo '<script>location.replace("forget2.php")</script>';
//            } else {
//                
//                echo '<div class="alert alert-success">Verification successful!</div>';
//                echo '<script>location.replace("Home.php")</script>';
//            }
//        } else {
//            echo '<div class="alert alert-danger">Invalid OTP. Please try again.</div>';
//        }
//    } else {
//        echo '<div class="alert alert-danger">Please enter a complete OTP.</div>';
//    }
////    session_unset();
////    session_destroy();
//}
//
//if (isset($_POST['resend'])) {
//   
//    echo '<div class="alert alert-success">OTP has been resent.</div>';
//}
                            ?>
                            <?php
// varification.php
//session_start(); // Ensure the session is started



                            $otp_validity_duration = 2 * 60; // 2 minutes in seconds

                            if (isset($_POST['verify'])) {
                                $otp1 = isset($_POST['otp1']) ? trim($_POST['otp1']) : '';
                                $otp2 = isset($_POST['otp2']) ? trim($_POST['otp2']) : '';
                                $otp3 = isset($_POST['otp3']) ? trim($_POST['otp3']) : '';
                                $otp4 = isset($_POST['otp4']) ? trim($_POST['otp4']) : '';
                                $otp5 = isset($_POST['otp5']) ? trim($_POST['otp5']) : '';

                                $otp = $otp1 . $otp2 . $otp3 . $otp4 . $otp5;

                                if (isset($_SESSION['otp'])) {
                                    $otp_code = $_SESSION['otp'];
                                    $otp_time = $_SESSION['otp_time'];
                                    $current_time = time();

                                    if ($current_time - $otp_time <= $otp_validity_duration) {
                                        if (strlen($otp) === 5 && $otp_code == $otp) {
                                            echo '<div class="alert alert-success">Verification successful!</div>';
                                            if ($_SESSION['type'] == 'f') {

                                                $email = $_SESSION['email'];
                                                session_destroy();
                                                $_SESSION['email'] = $email;
                                                echo '<script>location.replace("forgot2.php")</script>';
                                                exit();
                                            } else {
                                                $email = $_SESSION['email'];
                                                session_destroy();
                                                $_SESSION['txtemail'] = $email;
                                                $t = $_SESSION['txtemail'];
//                                                echo "<script>alert('$t');</script>";
                                                insert_data();
//                                                echo '<script>location.replace("index.php")</script>';
                                                echo '<script>location.replace("sign-in.php?email=' . urlencode($email) . '")</script>';
                                                exit();
                                            }
                                        } else {
                                            echo '<div class="alert alert-danger">Invalid OTP. Please try again.</div>';
                                        }
                                    } else {
                                        echo '<div class="alert alert-danger">OTP has expired. Please request a new OTP.</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger">OTP not found in session. Please try resending the OTP.</div>';
                                }
                            }

                            if (isset($_POST['resend'])) {
                                // Resend OTP logic
                                if (isset($_SESSION['txtemail'])) {
                                    include 'sendotp.php';
                                    sendEmail($_SESSION['txtemail']);
                                    echo '<div class="alert alert-success">OTP has been resent.</div>';
                                } else {
                                    echo '<div class="alert alert-danger">Failed to resend OTP. cheak Email Address</div>';
                                }
                            }

                            function insert_data() {
                                include 'connection.php'; // Move this to the top so it applies to both conditions

                                if ($_SESSION['type'] == 'b') {
                                    $fname = $_SESSION['fname'];
                                    $lname = $_SESSION['lname'];
                                    $mobile = $_SESSION['mobile'];
                                    $dob = $_SESSION['dob'];
                                    $email = $_SESSION['email'];
                                    $pass = $_SESSION['password'];
                                    $currentDate = date('Y-m-d');
                                    // Check for duplicate contact
                                    $checkStmt = $conn->prepare("SELECT contact FROM tblbidders WHERE contact = ?");
                                    $checkStmt->bind_param("s", $mobile);
                                    $checkStmt->execute();
                                    $checkStmt->store_result();

                                    if ($checkStmt->num_rows > 0) {
                                        echo "<div class='alert alert-danger'>Contact number already exists.</div>";
                                        $checkStmt->close();
                                        return;
                                    }

                                    $checkStmt->close();

                                    // Insert data
                                    $stmt = $conn->prepare("INSERT INTO tblbidders (firstname, lastname, contact, email, date_of_birth, password, created_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                    $stmt->bind_param("sssssss", $fname, $lname, $mobile, $email, $dob, $pass, $currentDate);

                                    if ($stmt->execute()) {
                                        echo "Data stored successfully";
                                    } else {
                                        echo "Error storing data: " . $stmt->error;
                                    }

                                    $stmt->close();

                                    // Clear session variables
                                    unset($_SESSION['fname'], $_SESSION['lname'], $_SESSION['mobile'], $_SESSION['dob'], $_SESSION['email'], $_SESSION['password'], $_SESSION['type']);
                                }

                                if ($_SESSION['type'] == 's') {
                                    $fname = $_SESSION['fname'];
                                    $lname = $_SESSION['lname'];
                                    $mobile = $_SESSION['mobile'];
                                    $dob = $_SESSION['dob'];
                                    $email = $_SESSION['email'];
                                    $pass = $_SESSION['password'];
                                    $adhar = $_SESSION['adhar'];
                                    $imgContent = $_SESSION['adharimg'];
                                    $currentDate = date('Y-m-d');
                                    // Check for duplicate contact
                                    $checkStmt = $conn->prepare("SELECT contact FROM tblsellers WHERE contact = ?");
                                    $checkStmt->bind_param("s", $mobile);
                                    $checkStmt->execute();
                                    $checkStmt->store_result();

                                    if ($checkStmt->num_rows > 0) {
                                        echo "<div class='alert alert-danger'>Contact number already exists.</div>";
                                        $checkStmt->close();
                                        return;
                                    }

                                    $checkStmt->close();

                                    $stmt = $conn->prepare("INSERT INTO tblsellers (firstname, lastname, contact, email, date_of_birth, password, adhar_number, adhar_img, created_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                    $stmt->bind_param("sssssssss", $fname, $lname, $mobile, $email, $dob, $pass, $adhar, $imgContent, $currentDate);

                                    if ($stmt->execute()) {
                                        echo "Data inserted successfully.";
                                    } else {
                                        echo "Error: " . $stmt->error;
                                    }

                                    $stmt->close();

                                    unset($_SESSION['fname'], $_SESSION['lname'], $_SESSION['mobile'], $_SESSION['dob'], $_SESSION['email'], $_SESSION['password'], $_SESSION['adhar'], $_SESSION['adharimg'], $_SESSION['type']);
                                }

                                $conn->close();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>