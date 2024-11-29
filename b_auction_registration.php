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
        

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/owl.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <script src="assets/js/main2.js" type="text/javascript"></script>
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <script src="./FirebaseAuth/firebaseConn.js" defer type="module"></script>
        <!--<link rel="stylesheet" href="assets/css/main.css">-->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/nice-select.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">  
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <?php
        include 'bidder_Header.php';
        ?>
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <span>Auction Registration</span>
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
                            <h2 class="title">AUCTION REGISTRATION</h2>
                            <p>We're happy you're here!</p>
                        </div>
                        <form class="login-form" method="post" action="" enctype="multipart/form-data">



                            <!-- Plot/House Number Row -->
                            <div class="form-group mb-30">
                                <label for="house-number"><i class="fa fa-home"></i> </label>
                                <input type="text" id="signup-number"  placeholder="House/Plot Number" name="txtHouseNumber" required>
                            </div>

                            <!-- Society/Flat Name Row -->
                            <div class="form-group mb-30">
                                <label for="society-name"><i class="fa fa-building"></i></label>
                                <input type="text" id="society-name"  placeholder="Society/Apartment Name " name="txtSocietyName" required>
                            </div>

                            <!-- Area Row -->
                            <div class="form-group mb-30">
                                <label for="area"><i class="fa fa-map-marker"></i> </label>
                                <input type="text" id="area"  placeholder="Area" name="txtArea" required>
                            </div>



                            <div class="form-group mb-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="state"><i class="fa fa-map-marker"></i></label>
                                        <select id="state" name="state" required style="padding: 0 75px;">
                                            <option value="">Select State</option>
                                            <?php
                                            // Include database connection
                                            include 'connection.php';

                                            // Fetch states from the database
                                            $states_result = mysqli_query($conn, "SELECT * FROM tblstate");
                                            while ($state = mysqli_fetch_assoc($states_result)) {
                                                echo '<option value="' . htmlspecialchars($state['id']) . '">' . htmlspecialchars($state['name']) . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <label for="city"><i class="fa fa-map-marker"></i></label>
                                            <select id="city" name="city" required style="padding: 0 75px;">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    $('#state').change(function () {
                                        var stateId = $(this).val();
                                        if (stateId) {
                                            $.ajax({
                                                url: 'b_auction_registration_fetch_cities.php', // URL to the PHP script
                                                type: 'GET',
                                                data: {state_id: stateId},
                                                dataType: 'json',
                                                success: function (data) {
                                                    $('#city').empty(); // Clear previous options
                                                    $('#city').append('<option value="">Select City</option>'); // Default option
                                                    $.each(data, function (index, city) {
                                                        $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                                                    });
                                                }
                                            });
                                        } else {
                                            $('#city').empty().append('<option value="">Select City</option>'); // Reset city dropdown
                                        }
                                    });
                                });
                            </script>

                            <div class="form-group mb-30" id="a">
                                <div class="col-sm-8" style="border: 2px dashed #007bff; border-radius: 10px; margin-left: 120px;">
                                    <lable>Upload Your Profile Img PDF, PNG, JPEG or JPG formats only
                                        <input type="file" id="signup-photo" name="photo" accept=".jpg,.jpeg,.png" style="border: 0px; margin: 0 auto;" onchange="validateFile()">
                                    </lable>
                                </div>
                                <span id="file-error" style="color: red; display: none;"></span>
                            </div>

                            <script>
                                function validateFile() {
                                    const fileInput = document.getElementById('signup-photo');
                                    const filePath = fileInput.value;
                                    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                                    const errorMessage = document.getElementById('file-error');

                                    errorMessage.style.display = 'none';

                                    if (!allowedExtensions.exec(filePath)) {
                                        errorMessage.innerHTML = 'Please upload a file with .jpg, .jpeg, or .png extension.';
                                        errorMessage.style.display = 'block';
                                        fileInput.value = '';
                                        return false;
                                    }
                                    return true;
                                }
                            </script>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col">
                                        <!--<button type="submit" class="custom-button" name="btnpayemd" onclick="payNow()">Pay EMD</button>-->
                                    </div>
                                    <script>
                                        function payNow() {
                                            var amount = 2000;
//                                            var amount = document.getElementById('amount').value;
                                            if (!amount || amount <= 0) {
                                                alert('Please enter a valid amount');
                                                return;
                                            }

                                            console.log("Amount to be sent: " + amount); // Debugging log

                                            var xhr = new XMLHttpRequest();
                                            xhr.open('POST', 'payment/cheakout.php', true);
                                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                            xhr.onload = function () {
                                                if (xhr.status === 200) {
                                                    var response = JSON.parse(xhr.responseText);
                                                    if (response.error) {
                                                        alert('Error: ' + response.error);
                                                        return;
                                                    }

                                                    var options = {
                                                        "key": response.key,
                                                        "amount": response.amount,
                                                        "currency": "INR",
                                                        "name": response.name,
                                                        "description": "Test Transaction",
                                                        "order_id": response.order_id,
                                                        "handler": function (response) {
                                                            console.log(response);
                                                            alert('Auction Ragistation Succesfully');
                                                            window.location = "index-2.php";
//                                                            var xhr2 = new XMLHttpRequest();
//                                                            xhr2.open('POST', 'insert_auction_ragistation_data.php', true);
//                                                            xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//                                                            xhr2.onload = function () {
//                                                                if (xhr2.status === 200) {
//                                                                    alert('Payment details saved successfully.');
//                                                                } else {
//                                                                    alert('Error saving payment details.');
//                                                                }
//                                                            };
//                                                            xhr2.send('auction_item_id=' + encodeURIComponent(auction_item_id) +
//                                                                    '&bidder_id=' + encodeURIComponent(bidder_id) +
//                                                                    '&emd_refund=Applicable' +
//                                                                    '&full_payment=' + encodeURIComponent(amount));
                                                        },
                                                        "theme": {
                                                            "color": "#F37254"
                                                        }
                                                    };
                                                    var rzp = new Razorpay(options);
                                                    rzp.open();
                                                } else {
                                                    alert('Something went wrong. Please try again. Status: ' + xhr.status);
                                                }
                                            };
                                            xhr.send('num=' + encodeURIComponent(amount));
                                        }
                                    </script>
                                    <div class="col">
                                        <button type="submit" class="custom-button" name="btnsignup"  style="margin-right: 290px">Sign Up</button>
                                    </div>
                                </div>
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
        include 'connection.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//            if (isset($_POST['btnpayemd'])) {
//                echo 'ok';
//            }
            if (isset($_POST['btnsignup'])) {
                // Assuming bidder's ID is passed from a hidden input field further we wany to fetch the value 
                include 'find_ID.php';
//                find_bidderID($email)
                $id = 2;
                $auction_item_id = $_GET['auction_item_id'];
                $houseNumber = trim($_POST['txtHouseNumber']);
                $societyName = trim($_POST['txtSocietyName']);
                $area = trim($_POST['txtArea']);
                $cityId = trim($_POST['city']);
                $stateId = trim($_POST['state']);

                if (empty($houseNumber) || empty($societyName) || empty($area) || empty($cityId) || empty($stateId)) {
                    echo "<script>alert('Please fill in all address fields.');</script>";
                } else {

                    $stateResult = mysqli_query($conn, "SELECT name FROM tblstate WHERE id = $stateId");
                    $stateRow = mysqli_fetch_assoc($stateResult);
                    $stateName = $stateRow['name'];

                    $cityResult = mysqli_query($conn, "SELECT name FROM tblcity WHERE id = $cityId");
                    $cityRow = mysqli_fetch_assoc($cityResult);
                    $cityName = $cityRow['name'];

                    $result_bid = mysqli_query($conn, "SELECT MAX(bid_value) AS current_bid FROM tblbid WHERE auction_item_id = " . $auction_item_id);
                    $bid_details = mysqli_fetch_assoc($result_bid);

                    $address = $houseNumber . ', ' . $societyName . ', ' . $area . ', ' . $cityName . ', ' . $stateName;

                    // Handle the image upload
                    if (!empty($_FILES['photo']['name'])) {
                        $imageName = $_FILES['photo']['name'];
                        $imageTmpName = $_FILES['photo']['tmp_name'];
                        $image = $_FILES['photo']['tmp_name'];
                        $imageData = file_get_contents($imageTmpName);
                        $imageFolder = 'bidderImg/' . basename($imageName);
                        $imageSize = $_FILES['photo']['size'];

                        if ($imageSize > 300 * 1024) {
                            echo "<script>alert('Image size must be between 50 KB and 300 KB.');</script>";
                        } else {
                            if (move_uploaded_file($imageTmpName, $imageFolder)) {
//                                 echo "<script>alert('da.');</script>";
                                $sql = "UPDATE tblbidders SET address='$address' WHERE id=$id";
                                $sql1 = "INSERT INTO tblbidderpayment (auction_item_id, bidder_id, emd_refund, full_payment) 
        VALUES ('$auction_item_id', '$id', 'notApplicable', 'notApplicable')";
                                $sql3 = "UPDATE `tblauctionitem` SET `auction_status` = 'ACTIVE' WHERE `id` = $auction_item_id";

                                if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1) && mysqli_query($conn, $sql3)) {
//                                    echo "<script>alert('Bidder details updated successfully.');</script>";
                                    echo '               <script src="call_paynow.js" type="text/javascript"></script>';
                                } else {
                                    echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
                                }
//                            echo "ok";
                            } else {
                                echo "<script>alert('Failed to upload image.');</script>";
                            }
                        }
                    }
                }
                // Close the connection
                mysqli_close($conn);
            }
        }
//        // Assuming you have a database connection already established in $conn
//        $id = 1; // Replace with the actual ID you want to fetch the image for
//// Fetch the image path from the database
//        $sql = "SELECT user_img FROM tblbidders WHERE id = $id";
//        $result = mysqli_query($conn, $sql);
//
//        if ($result) {
//            $row = mysqli_fetch_assoc($result);
//            $imagePath = $row['user_img']; // This will contain the path to the image
//            // Display the image
//            if (!empty($imagePath)) {
////                echo "<img src='$imagePath' alt='Bidder Image' style='max-width: 300px; max-height: 300px;'>";
//                $img = base64_decode($row['user_img']);
//                $imgsrc = 'data:image/jpeg;base64,' . $img;
////                                echo "<img src='$imgsrc' alt='Bidder Image' style='max-width: 300px; max-height: 300px;'>";
//                echo $imgsrc;
////                echo $row['user_img'];
//            } else {
//                echo "No image found.";
//            }
//        } else {
//            echo "Error fetching record: " . mysqli_error($conn);
//        }
//        
        ?>
        <!--<img src="<?php // echo $imgsrc;      ?>" alt='Bidder Image' style='max-width: 300px; max-height: 300px;'>-->



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