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
        <div class="hero-section style-2 pb-lg-400">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <!--<a href="#0">My Account</a>-->
                    </li>
                    <li>
                        <span>Live Auction Items</span>
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
                        <div class="item">Serch By : </div>
                    </div>
                    
                    <form class="product-search ml-auto">
                        <input type="text" placeholder="Item Name">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="row mb-30-none justify-content-center">
                    <!--                    <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/01.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2019 Mercedes-Benz C, 300</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter1"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/02.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2017 Harley-Davidson XG750,</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter2"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/03.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2024 Hyundai Elantra, Sel</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter3"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/04.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2014 KIA Sorento, LX</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter4"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/05.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2019 Subaru Crosstrek, Premium</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter5"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/06.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2019 Chevrolet Equinox, LT</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter6"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/07.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2019 Ford Expedition</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter7"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/08.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2019 Buick Envision</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter8"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php"><img src="assets/images/auction/product/09.png" alt="product"></a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0">2018 Dodge Grand, Sxt</a>
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount">$876.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-money"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Buy Now</div>
                                                                <div class="amount">$5,00.00</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown">
                                                            <div id="bid_counter9"></div>
                                                        </div>
                                                        <span class="total-bids">30 Bids</span>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="#0" class="custom-button">Submit a bid</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#0"><i class="flaticon-left-arrow"></i></a>
                                        </li>
                                        <li>
                                            <a href="#0">1</a>
                                        </li>
                                        <li>
                                            <a href="#0" class="active">2</a>
                                        </li>
                                        <li>
                                            <a href="#0">3</a>
                                        </li>
                                        <li>
                                            <a href="#0"><i class="flaticon-right-arrow"></i></a>
                                        </li>
                                    </ul>
                                </div>-->


                    <div class="auction-items">
                        <div class="container">
                            <div class="row">
                                <?php
                                include 'connection.php';
                                $sql = "SELECT * FROM tblauctionitem WHERE auction_status = 'ACTIVE'";
                                $result = $conn->query($sql);
                                //row=tblauctionitem
                                //row2=tblitem
                                //row3=tblbid
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        // Fetching item details
                                        $result_item = mysqli_query($conn, 'select * from tblitem where id=' . $row['item_id'] . '');
                                        $row2 = mysqli_fetch_assoc($result_item);

                                        // Fetching image 
                                        $result_img = mysqli_query($conn, 'select img from tblimg where item_id=' . $row2['id'] . '');
                                        $img = mysqli_fetch_assoc($result_img);

                                        // Convert BLOB to base64
                                        if (isset($img)) {
                                            $imageData = base64_encode($img['img']);
                                            $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                                        } else {
                                            $imageSrc = 'assets/images/product/default_product.png';
                                        }

                                        //fetch tblbid table values
                                        $result_bid = mysqli_query($conn, 'SELECT MAX(bid_value) as current_bid ,COUNT(*) as bids from tblbid where auction_item_id=' . $row['id'] . ';');
                                        $row3 = mysqli_fetch_assoc($result_bid);

                                        $currentBid = "$" . number_format($row['reserve_price'], 2);
                                        $buyNowPrice = "$" . number_format($row['emd_amount'], 2);
                                        $totalBids = 30;
                                        ?>
                                        <div class="col-sm-10 col-md-6 col-lg-4">
                                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1000">
                                                <div class="auction-thumb">
                                                    <a href="product-details.php">
                                                        <img src="<?php echo $imageSrc; ?>" alt="product" class="img-fluid">
                                                    </a>
                                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                                </div>
                                                <div class="auction-content">
                                                    <h6 class="title">
                                                        <a href="#0"><?php echo $row2['name']; ?></a> 
                                                    </h6>
                                                    <div class="bid-area">
                                                        <div class="bid-amount">
                                                            <div class="icon">
                                                                <i class="flaticon-auction"></i>
                                                            </div>
                                                            <div class="amount-content">
                                                                <div class="current">Current Bid</div>
                                                                <div class="amount"><?php echo $row3['current_bid']; ?></div> 
                                                            </div>
                                                        </div>
                                                        <div class="bid-amount">
                                                            <!--                                                            <div class="icon">
                                                                                                                            <i class="flaticon-money"></i>
                                                                                                                        </div>-->
                                                            <div class="amount-content">
                                                                <!--<div class="current">Bids</div>-->
                                                                <div class="amount" style="color: red;"><?php echo $row3['bids']; ?> Bids</div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="countdown-area">
                                                        <div class="countdown" style="margin: auto;">
                                                            <div id="bid_counter"></div>
                                                            <script>
                                                                // PHP Variables
                                                                let startDate = "<?php echo $row['start_datetime']; ?>"; // Fetch start date from PHP
                                                                let endDate = "<?php echo $row['end_datetime']; ?>"; // Fetch end date from PHP

                                                                // Initialize the countdown only if the element exists
                                                                if (document.querySelector("#bid_counter")) { // Correct way to check for existence
                                                                    // Create a new countdown instance
                                                                    let counterElement = document.querySelector("#bid_counter");
                                                                    let myCountDown = new ysCountDown(endDate, function (remaining, finished) {
                                                                        let message = "";
                                                                        if (finished) {
                                                                            message = "Expired";
                                                                        } else {
                                                                            let re_days = remaining.totalDays;
                                                                            let re_hours = remaining.hours;
                                                                            message += re_days + "d  : ";
                                                                            message += re_hours + "h  : ";
                                                                            message += remaining.minutes + "m  : ";
                                                                            message += remaining.seconds + "s";
                                                                        }
                                                                        counterElement.textContent = message;
                                                                    });
                                                                }
                                                            </script>
                                                        </div>
                                                        <!--<span class="total-bids"><?php // echo $row3['bids'];     ?> Bids</span>-->  
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="seller_live_Auction.php?item_id=<?php echo $row['item_id']; ?>" class="custom-button">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "No active auctions found.";
                                }

                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
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
