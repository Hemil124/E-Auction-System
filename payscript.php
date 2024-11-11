<?php
session_start();
?>
<?php
$apikey = "rzp_test_XWlaG4tu0mE7VT";
?>

<!DOCTYPE html>
<html lang="en">


    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
                <div class="panel-body">
<?php $amount=$_GET['a'];?>
                    <form>
                            <input type="hidden" class="form-control" id="amount" name="amount" value="<?phpecho $amount; ?>" readonly>
                        <div class="form-group">
                            <label for="amount">Amount (INR):</label>
                            <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $amount; ?>" disabled>
                        </div>
<!--                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php // echo $_POST['name']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php // echo $_POST['email']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php // echo $_POST['mobile']; ?>" readonly>
                        </div>-->
                        <!--<input type="hidden" name="orderid" value="<?php //  echo $_POST['orderid']; ?>">-->
                        <!--<input type="hidden" custom="Hidden Element" name="hidden">-->
                    </form>
                        <form action="paymentsuccess.php" method="POST">
                            <script
                                src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="<?php echo $apikey; ?>"
                                data-amount="<?php echo $amount*100; ?>" 
                                data-currency="INR"
                                data-id="<?php // echo $_POST['orderid']; ?>"
                                data-buttontext="Pay with Razorpay"
                                data-name="E-Auction-System"
                                data-description="This is Winner Bidder's Payment"
                                data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpDsjczm3UEG7H7NY6YPk4NT4MM2HI8nMgqw&s"
                                data-prefill.name="<?php // echo $_POST['name']; ?>"
                                data-prefill.email="<?php // echo $_POST['email']; ?>"
                                data-prefill.contact="<?php // echo $_POST['mobile']; ?>"
                                data-theme.color="#0e90e4">
                            </script>
                </div>

                            <input type="hidden" custom="Hidden Element" name="hidden">
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