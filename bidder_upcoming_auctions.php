<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    //without login can't open indexpage!!        
//        if (!isset($_SESSION['txtemail']) ) {
//            header("Location: sign-in.php");
//            exit();
//        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Sbidu - Bid And Auction HTML Template</title>

        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/all.min.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/animate.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/nice-select.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/owl.min.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/flaticon.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/aos.css">
        <link rel="stylesheet" href="C:\xampp\htdocs\E-Auction-System/assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="../E-Auction-System/assets/js/yscountdown.min.js" type="text/javascript"></script><!-- For Auction Start End Coundown -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
        include 'bidder_Header.php';
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
        <div class="hero-section style-2 pb-lg-400">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index-3.php">Home</a>
                    </li>
                    <li>
                        <!--<a href="#0">My Account</a>-->
                    </li>
                    <li>
                        <span>Upcoming Auction Items</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->
        <br>
        <br>
        <!--============= Product Auction Section Starts Here =============-->
        <div class="product-auction padding-bottom">
            <div class="container">
                <div class="product-header mt--100 mt-lg--440" style="font: black;">
                    <div class="product-header-item">
                        <div class="item">Sort By : </div>
                    </div>
                    <form class="product-search ml-auto">
                        <input  type="text" placeholder="Item Name" id="item-search">
                        <button type="submit"><i class="fas fa-search" id="search-button"></i></button>
                    </form>
                    <script>
                        $(document).ready(function () {
                        $('#item-search').on('keyup', function () {
                        fetchFilteredAuctions();
                        });
                        // Event listener for search button
                        $('#search-button').on('click', function () {
                        fetchFilteredAuctions();
                        });
                        // Function to fetch filtered auctions
                        function fetchFilteredAuctions() {
                        var itemName = $('#item-search').val(); // Get searched item name
                        var status = "Upcoming";
                        // Send AJAX request to PHP script
                        $.ajax({
                        url: 'fetch_item_cards.php',
                                type: 'GET',
                                data: {
                                status: status,
                                        itemName: itemName
                                },
                                success: function (response) {
                                // Update the auction results container with the filtered items
                                $('#auction-results').html(response);
                                },
                                error: function (xhr, status, error) {
                                console.error('Error: ' + error);
                                }
                        });
                        }

                        // Fetch all auctions on page load
                        fetchFilteredAuctions();
                        });
                    </script>
                    <style>

                        .auction-item-2 {
                            /*display: block !important;*/
                            opacity: 1 !important;
                            /*visibility: visible !important;*/
                            /*                            height: auto !important;
                                                        width: 100% !important;*/
                        }
                        .auction-item-2 {
                            margin-bottom: 30px; /* Vertical space between the cards */
                        }

                        .card-container {
                            padding: 15px; /* Horizontal space between cards */
                        }

                        #auction-results {
                            margin-right: -15px;
                            margin-left: -15px;
                        }
                    </style>

                </div>
                <div class="row mb-30-none justify-content-center" id="auction-results">
                    <!-- The auction cards will be dynamically inserted here -->
                </div>
            </div>
        </div>
        <!--============= Product Auction Section Ends Here =============-->
       <?php
        include 'Footer.php';
        ?>
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/modernizr-3.6.0.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/plugins.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/bootstrap.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/isotope.pkgd.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/aos.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/wow.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/waypoints.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/nice-select.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/counterup.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/owl.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/magnific-popup.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/yscountdown.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/jquery-ui.min.js"></script>
        <script src="C:\xampp\htdocs\E-Auction-System/assets/js/main.js"></script>
    </body>
</html>
