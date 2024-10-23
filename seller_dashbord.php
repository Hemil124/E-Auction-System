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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flaticon/1.0.0/flaticon.css">


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
        <?php include 'seller_Header.php'; ?>
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
                        <a href="#0">My Account</a>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <div class="bg_img hero-bg bottom_center" data-background="assets/images/banner/hero-bg.png"></div>
        </div>
        <!--============= Hero Section Ends Here =============-->


        <!--============= Dashboard Section Starts Here =============-->
        <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-7 col-lg-4">
                        <div class="dashboard-widget mb-30 mb-lg-0">
                            <?php
                            include 'connection.php';
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $seller_id = 1;
                            $sql = "SELECT * FROM tblsellers WHERE id = $seller_id";
                            $result = mysqli_query($conn, $sql);
                            if ($row = mysqli_fetch_assoc($result)) {
                                $fullname = $row['firstname'] . ' ' . $row['lastname'];
                                $contact = $row['contact'];
                                $email = $row['email'];
                                $dob = date("d-m-Y", strtotime($row['date_of_birth']));
                                $address = $row['address'];
                                $user_img = $row['user_img'];
                                $imageData = base64_encode($row['user_img']);
                                $imageSrc = "data:image/jpeg;base64," . $imageData;
                            } else {
                                echo "No data found!";
                            }

                            mysqli_close($conn);
                            ?>
                            <div class="user">
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <?php if ($row['user_img']) { ?>
                                            <img src="<?php echo $imageSrc; ?>" alt="user">
                                        <?php } else { ?>
                                            <img src="assets/images/dashboard/user.png" alt="default user">
                                        <?php } ?>
                                    </div>
                                    <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                    <input type="file" id="profile-pic" class="d-none">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#0"><?php echo $fullname; ?></a></h5>
                                    <span class="username"><?php echo $email; ?></span>
                                </div>
                            </div>
                            <ul class="dashboard-menu">
                                <li>
                                    <a href="seller_dashbord.php" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="s_profile.php">
                                        <img src="assets/images/sellerDashbord/profile-icon.png" alt="Personal Profile Icon" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 2px;">
                                        Personal Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="s_my-item.php">
                                        <img src="assets/images/sellerDashbord/add-product.png" alt="My Items Icon" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 2px;">
                                        My Items
                                    </a>
                                </li>
                                <li>
                                    <a href="s_notifications.php"><i class="flaticon-alarm"></i>My Alerts</a>
                                </li>
                                <li>
                                    <button class="logout" onclick="window.location.href = 'logout.php'">
                                        Logout
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    include 'find_ID.php';
//                        echo find_sellerID("22bmiit117@gmail.com");
                    $result_auctionItem
                    ?>
                    <div class="col-lg-8">
                        <div class="dashboard-widget mb-40">
                            <div class="dashboard-title mb-30">
                                <h5 class="title">My Activity</h5>
                            </div>
                            <?php
// Include the database connection file
                            include 'connection.php';

// Check if the connection was successful
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

// Initialize counters
                            $activeAuctionCount = 0;
                            $itemsSoldCount = 0;
                            $totalListedItemCount = 0;

// SQL query to count active auctions for seller_id = 1
                            $sqlActiveAuction = "SELECT COUNT(*) AS count FROM tblauctionitem a JOIN tblitem i ON a.item_id = i.id WHERE i.seller_id = 1 AND a.auction_status = 'active';";

// SQL query to count sold items for seller_id = 1
                            $sqlItemsSold = "SELECT COUNT(*) AS count FROM tblitem WHERE seller_id = 1 AND verify_status = 'sold';";

// SQL query to count total listed items for seller_id = 1
                            $sqlTotalListedItem = "SELECT COUNT(*) AS count FROM tblitem WHERE seller_id = 1;";

                            $resultActiveAuction = mysqli_query($conn, $sqlActiveAuction);
                            $resultItemsSold = mysqli_query($conn, $sqlItemsSold);
                            $resultTotalListedItem = mysqli_query($conn, $sqlTotalListedItem);

                            if ($resultActiveAuction && mysqli_num_rows($resultActiveAuction) > 0) {
                                $row = mysqli_fetch_assoc($resultActiveAuction);
                                $activeAuctionCount = $row['count'];
                            }

                            if ($resultItemsSold && mysqli_num_rows($resultItemsSold) > 0) {
                                $row = mysqli_fetch_assoc($resultItemsSold);
                                $itemsSoldCount = $row['count'];
                            }

                            if ($resultTotalListedItem && mysqli_num_rows($resultTotalListedItem) > 0) {
                                $row = mysqli_fetch_assoc($resultTotalListedItem);
                                $totalListedItemCount = $row['count'];
                            }

                            mysqli_close($conn);
                            ?>


                            <script>
                                setInterval(function () {
                                    $.ajax({
                                        type: "GET",
                                        url: "seller_dashbord_update_counts.php",
                                        success: function (data) {
                                            var counts = JSON.parse(data);
                                            $(".counter:eq(0)").text(counts.activeAuctionCount);
                                            $(".counter:eq(1)").text(counts.itemsSoldCount);
                                            $(".counter:eq(2)").text(counts.totalListedItemCount);
                                        }
                                    });
                                }, 1000);
                            </script>
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/active-auction.png" alt="active-auction"  width="75px">
                                        </div>
                                        <div class="content"> 
                                            <h2 class="title"><span class="counter"><?= $activeAuctionCount ?></span></h2>
                                            <h6 class="info">Active Auction </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/item-sold.png" alt="item-sold" width="75px">
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><span class="counter"><?= $itemsSoldCount ?></span></h2>
                                            <h6 class="info">Items Sold</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="dashboard-item">
                                        <div class="thumb">
                                            <img src="assets/images/dashboard/list-items.png" alt="total_item"  width="75px">
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><span class="counter"><?= $totalListedItemCount ?></span></h2>
                                            <h6 class="info">Total Listed Item</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="dashboard-widget">-->
                        <!--                            <h5 class="title mb-10">Purchasing</h5>
                                                    <div class="dashboard-purchasing-tabs">
                                                        <ul class="nav-tabs nav">
                                                            <li>
                                                                <a href="#current" class="active" data-toggle="tab">Current</a>
                                                            </li>
                                                            <li>
                                                                <a href="#pending" data-toggle="tab">Pending</a>
                                                            </li>
                                                            <li>
                                                                <a href="#history" data-toggle="tab">History</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active fade" id="current">
                                                                <table class="purchasing-table">
                                                                    <thead>
                                                                    <th>Item</th>
                                                                    <th>Bid Price</th>
                                                                    <th>Highest Bid</th>
                                                                    <th>Lowest Bid</th>
                                                                    <th>Expires</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="tab-pane show fade" id="pending">
                                                                <table class="purchasing-table">
                                                                    <thead>
                                                                    <th>Item</th>
                                                                    <th>Bid Price</th>
                                                                    <th>Highest Bid</th>
                                                                    <th>Lowest Bid</th>
                                                                    <th>Expires</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="tab-pane show fade" id="history">
                                                                <table class="purchasing-table">
                                                                    <thead>
                                                                    <th>Item</th>
                                                                    <th>Bid Price</th>
                                                                    <th>Highest Bid</th>
                                                                    <th>Lowest Bid</th>
                                                                    <th>Expires</th>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                                                            <td data-purchase="bid price">$1,775.00</td>
                                                                            <td data-purchase="highest bid">$1,775.00</td>
                                                                            <td data-purchase="lowest bid">$1,400.00</td>
                                                                            <td data-purchase="expires">7/2/2024</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
            </div>
        </section>
        <!--============= Dashboard Section Ends Here =============-->


        <!--============= Footer Section Starts Here =============-->
        <?php include 'Footer.php'; ?>
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


</html>