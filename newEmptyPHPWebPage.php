<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
        }

        .popup-content.success {
            border: 1px solid #28a745;
        }

        .popup-content.error {
            border: 1px solid #dc3545;
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .popup-content.success p {
            color: #28a745;
        }

        .popup-content.error p {
            color: #dc3545;
        }
    </style>
    <script>
        function showPopup(message, type = 'success') {
            const popupContent = document.getElementById('popupMessage').querySelector('.popup-content');
            const popupText = document.getElementById('popupText');
            
            popupText.innerText = message;

            if (type === 'success') {
                popupContent.classList.add('success');
                popupContent.classList.remove('error');
            } else if (type === 'error') {
                popupContent.classList.add('error');
                popupContent.classList.remove('success');
            }

            document.getElementById('popupMessage').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popupMessage').style.display = 'none';
        }

        function setInitialFocus() {
            const urlParams = new URLSearchParams(window.location.search);
            const returnFromOtpPage = urlParams.get('returnFromOtpPage');

            if (returnFromOtpPage === 'true') {
                document.getElementById('txtotp').focus();
            } else {
                document.getElementById('signup-fname').focus();
            }
        }

        window.onload = setInitialFocus;

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('button[name="btnsend"]').addEventListener('click', function(event) {
                event.preventDefault();
                showPopup('OTP has been sent successfully!', 'success');
            });

            document.querySelector('button[name="btnsubmit"]').addEventListener('click', function(event) {
                event.preventDefault();
                showPopup('There was an error with your submission!', 'error');
            });
        });
    </script>
</head>
<body>
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
                                    <label for="signup-email"><i class="fa-solid fa-envelope"></i></label>
                                    <input type="email" id="signup-email" placeholder="Email Address" name="txtemail"
                                           <?php if (isset($_POST['txtemail'])) echo 'value="' . htmlspecialchars($_POST['txtemail']) . '"'; ?> required>
                                </div>
                                <div class="col-sm-6" id="a">
                                    <div class="form-group mb-0">   
                                        <button type="submit" class="custom-button" name="btnsend">Send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-30" id="a">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label for="txtotp"><i class="fa fa-key"></i></label>
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
                                        <button type="submit" class="custom-button" name="btnvarify">Verify OTP</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="custom-button" name="btnResend">Resend OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password" name="txtpassword"
                                   <?php if (isset($_POST['txtpassword'])) echo 'value="' . htmlspecialchars($_POST['txtpassword']) . '"'; ?> 
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-conpass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-conpass" placeholder="Confirm Password" name="txtconfirm_password"
                                   <?php if (isset($_POST['txtconfirm_password'])) echo 'value="' . htmlspecialchars($_POST['txtconfirm_password']) . '"'; ?> 
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button" name="btnsubmit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup Message -->
    <div id="popupMessage" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <p id="popupText"></p>
        </div>
    </div>
</body>
</html>
