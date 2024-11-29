<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include 'find_ID.php';
//    $seller_id= find_sellerID($_SESSION['txtemail']);
//        $seller_id= find_sellerID("22bmiit117@gmail.com");

    ?>
    <?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// session_start();
// if (!isset($_SESSION['txtemail'])) {
//     header("Location: sign-in.php");
//     exit();
// }

    include 'connection.php';

    $sql = 'SELECT tblitem.*, tblsellers.firstname, tblcategory.name AS category_name 
        FROM tblitem 
        JOIN tblsellers ON tblitem.seller_id = tblsellers.id 
        JOIN tblcategory ON tblitem.category_id = tblcategory.id 
        WHERE tblitem.verify_status IN ("verified", "rejected")';

    $result = $conn->query($sql);

    $sqlPending = 'SELECT tblitem.*, tblsellers.firstname, tblcategory.name AS category_name 
               FROM tblitem 
               JOIN tblsellers ON tblitem.seller_id = tblsellers.id 
               JOIN tblcategory ON tblitem.category_id = tblcategory.id 
               WHERE tblitem.verify_status = "pending"';

    $resultPending = $conn->query($sqlPending);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if (!$resultPending) {
        die("Pending query failed: " . $conn->error);
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Admin Item List E-Auction</title>

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
        <?php include 'admin_Header.php';?>
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
                        <a href="#0">Dashboard</a>
                    </li>
                    <li>
                        <span>Admin Item List</span>
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
                    <?php include 'admin_dashbord_sider.php';?>
                    <div class="col-lg-8">
                        <div class="dashboard-widget">
                            <h5 class="title mb-10">Aucation Item List</h5>
                            <div class="dashboard-purchasing-tabs">
                                <ul class="nav-tabs nav">
                                    <li>
                                        <a href="#pending" class="active" data-toggle="tab">Pending</a>
                                    </li>
                                    <li>
                                        <a href="#current" data-toggle="tab">Verified</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show fade" id="current">
                                        <table class="purchasing-table">
                                            <thead>
                                            <th>Name</th>
                                            <th>Seller</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <!--<th>Image</th>-->
                                            <th>Starting Price</th>
                                            <th>Verify Status</th>
                                            <th>View</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        // Assuming you want to display the name and starting price
                                                        echo "<tr>";
                                                        echo "<td data-purchase='name'>" . htmlspecialchars($row['name']) . "</td>";
                                                        echo "<td data-purchase='seller_id'>" . htmlspecialchars($row['firstname']) . "</td>";
                                                        echo "<td data-purchase='category_id'>" . htmlspecialchars($row['category_name']) . "</td>";
                                                        echo "<td data-purchase='description'>" . htmlspecialchars($row['description']) . "</td>";
//                                                        $imageArray = json_decode($row['image_id'], true);
//                                                        $firstImage = !empty($imageArray) ? 'uploads/' . htmlspecialchars($imageArray[0]) : 'path/to/default/image.png';
//                                                        echo "<td data-purchase='image'><img src='" . $firstImage . "' alt='" . htmlspecialchars($row['name']) . "' style='width: 50px; height: 50px; border-radius: 50%;'></td>";
                                                        echo "<td data-purchase='starting_price'>" . number_format($row['starting_price'], 2) . "</td>";
                                                        echo "<td data-purchase='starting_price'>" . htmlspecialchars($row['verify_status'], 2) . "</td>";
                                                        echo "<td><a href='aucation-item.php?id=" . $row['id'] . "' class='pass-type' style='cursor: pointer;'><i class='fas fa-eye'></i></a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='5'>No items found</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane show active fade" id="pending">
                                        <table class="purchasing-table">
                                            <thead>
                                            <th>Name</th>
                                            <th>Seller</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <!--<th>Image</th>-->
                                            <th>Starting Price</th>
                                            <th>Verify Status</th>
                                            <th>View</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($resultPending->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($rowPending = $resultPending->fetch_assoc()) {
                                                        // Assuming you want to display the name and starting price
                                                        echo "<tr>";
                                                        echo "<td data-purchase='name'>" . htmlspecialchars($rowPending['name']) . "</td>";
                                                        echo "<td data-purchase='seller_id'>" . htmlspecialchars($rowPending['firstname']) . "</td>";
                                                        echo "<td data-purchase='category_id'>" . htmlspecialchars($rowPending['category_name']) . "</td>";
                                                        echo "<td data-purchase='description'>" . htmlspecialchars($rowPending['description']) . "</td>";
//                                                        $imageArray = json_decode($rowPending['image_id'], true);
//                                                        $firstImage = !empty($imageArray) ? 'uploads/' . htmlspecialchars($imageArray[0]) : 'path/to/default/image.png';
//                                                        echo "<td data-purchase='image'><img src='" . $firstImage . "' alt='" . htmlspecialchars($rowPending['name']) . "' style='width: 50px; height: 50px; border-radius: 50%;'></td>";
                                                        echo "<td data-purchase='starting_price'>" . number_format($rowPending['starting_price'], 2) . "</td>";
                                                        echo "<td data-purchase='starting_price'>" . htmlspecialchars($rowPending['verify_status'], 2) . "</td>";
                                                        echo "<td><a href='aucation-item.php?id=" . $rowPending['id'] . "' class='pass-type' style='cursor: pointer;'><i class='fas fa-eye'></i></a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='5'>No items found</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Dashboard Section Ends Here =============-->


        <!--============= Footer Section Starts Here =============-->
        <footer class="bg_img padding-top oh" data-background="assets/images/footer/footer-bg.jpg">
            <div class="footer-top-shape">
                <img src="assets/css/img/footer-top-shape.png" alt="css">
            </div>
            <div class="anime-wrapper">
                <div class="anime-1 plus-anime">
                    <img src="assets/images/footer/p1.png" alt="footer">
                </div>
                <div class="anime-2 plus-anime">
                    <img src="assets/images/footer/p2.png" alt="footer">
                </div>
                <div class="anime-3 plus-anime">
                    <img src="assets/images/footer/p3.png" alt="footer">
                </div>
                <div class="anime-5 zigzag">
                    <img src="assets/images/footer/c2.png" alt="footer">
                </div>
                <div class="anime-6 zigzag">
                    <img src="assets/images/footer/c3.png" alt="footer">
                </div>
                <div class="anime-7 zigzag">
                    <img src="assets/images/footer/c4.png" alt="footer">
                </div>
            </div>
            <div class="newslater-wrapper">
                <div class="container">
                    <div class="newslater-area">
                        <div class="newslater-thumb">
                            <img src="assets/images/footer/newslater.png" alt="footer">
                        </div>
                        <div class="newslater-content">
                            <div class="section-header left-style mb-low" data-aos="fade-down" data-aos-duration="1100">
                                <h5 class="cate">Bid with confidence, win with pride</h5>
                                <h3 class="title">From Bidders to Winners: Start Bidding Today</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top padding-bottom padding-top">
                <div class="container">
                    <div class="row mb--60">
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1000">
                            <div class="footer-widget widget-links">
                                <h5 class="title">Auction Categories</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Ending Now</a>
                                    </li>
                                    <li>
                                        <a href="#0">Vehicles</a>
                                    </li>
                                    <li>
                                        <a href="#0">Watches</a>
                                    </li>
                                    <li>
                                        <a href="#0">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="#0">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jewelry</a>
                                    </li>
                                    <li>
                                        <a href="#0">Art</a>
                                    </li>
                                    <li>
                                        <a href="#0">Sports & Outdoor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1300">
                            <div class="footer-widget widget-links">
                                <h5 class="title">About Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">About Sbidu</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help</a>
                                    </li>
                                    <li>
                                        <a href="#0">Affiliates</a>
                                    </li>
                                    <li>
                                        <a href="#0">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#0">Press</a>
                                    </li>
                                    <li>
                                        <a href="#0">Our blog</a>
                                    </li>
                                    <li>
                                        <a href="#0">Collectors' portal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1600">
                            <div class="footer-widget widget-links">
                                <h5 class="title">We're Here to Help</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="#0">Safe and Secure</a>
                                    </li>
                                    <li>
                                        <a href="#0">Shipping Information</a>
                                    </li>
                                    <li>
                                        <a href="#0">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#0">Help & FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" data-aos="fade-down" data-aos-duration="1800">
                            <div class="footer-widget widget-follow">
                                <h5 class="title">Follow Us</h5>
                                <ul class="links-list">
                                    <li>
                                        <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="08606d6478486d666f677c606d656d266b6765">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                    </li>
                                </ul>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright-area">
                        <div class="footer-bottom-wrapper">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/footer-logo.png" alt="logo"></a>
                            </div>
                            <ul class="gateway-area">
                                <li>
                                    <a href="#0"><img src="assets/images/footer/paypal.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/visa.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/discover.png" alt="footer"></a>
                                </li>
                                <li>
                                    <a href="#0"><img src="assets/images/footer/mastercard.png" alt="footer"></a>
                                </li>
                            </ul>
                            <div class="copyright"><p>&copy; Copyright 2024 | <a href="#0">Sbidu</a> By <a href="#0">Uiaxis</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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