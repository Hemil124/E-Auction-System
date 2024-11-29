<!DOCTYPE html>
<html lang="en">

    <?php
    session_start();
    include 'connection.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $itemId = intval($_GET['id']);

        $sql = "SELECT tblitem.*, tblsellers.firstname, tblcategory.name AS category_name 
            FROM tblitem 
            JOIN tblsellers ON tblitem.seller_id = tblsellers.id 
            JOIN tblcategory ON tblitem.category_id = tblcategory.id 
            WHERE tblitem.id = ?";

        // Prepare and execute the statement
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $itemId); // Bind the parameter
            $stmt->execute();
            $result = $stmt->get_result();

            // Fetch the item data
            if ($result->num_rows > 0) {
                $item = $result->fetch_assoc();
            } else {
                echo "No item found.";
                exit();
            }
            $stmt->close();
        } else {
            echo "Database query failed.";
            exit();
        }
    } else {
        echo "Invalid item ID.";
        exit();
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <style>
            .image-container {
                display: flex;
                overflow-x: auto;
                white-space: nowrap;
                max-width: 500px;
            }

            .image-container img {
                margin-right: 10px;
                max-height: 200px;
            }

            .more-images {
                margin-left: 10px;
                font-weight: bold;
                color: #007bff;
                cursor: pointer;
            }

        </style>
    </head>

    <body>
        <!--============= ScrollToTop Section Starts Here =============-->
        <div class="overlayer" >
            <div class="loader" id="overlayer">
                <div class="loader-inner"></div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--============= ScrollToTop Section Ends Here =============-->


        <!--============= Header Section Starts Here =============-->
        <?php include 'admin_Header.php'; ?>
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
                        <a href="admin-item-list.php">Admin Item List</a>
                    </li>
                    <li>
                        <span>Aucation List</span>
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

                    <div class="col-lg-8">
                        <div class="dashboard-widget mb-40">
                            <div class="dashboard-title mb-30">
                                <h4 class="title">Aucation Item</h4>
                            </div>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-muted">Item Name</td>
                                        <td class="text-dark"><?php echo htmlspecialchars($item['name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Seller Name</td>
                                        <td class="text-dark"><?php echo htmlspecialchars($item['firstname']); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Category</td>
                                        <td class="text-dark"><?php echo htmlspecialchars($item['category_name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Description</td>
                                        <td class="text-dark"><?php echo nl2br(htmlspecialchars($item['description'])); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Starting Price</td>
                                        <td class="text-dark"><?php echo number_format($item['starting_price'], 2); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Item Images</td>
                                        <td class="text-dark">
                                            <div class="image-container">
                                                <?php
// Retrieve images associated with the item_id
                                                $result_img = mysqli_query($conn, "SELECT img FROM tblimg WHERE item_id=$itemId");

// Check if images are available
                                                if (mysqli_num_rows($result_img) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result_img)) {
                                                        // Convert binary data to base64 format and set it as the image source
                                                        $imageSrc = 'data:image/jpeg;base64,' . base64_encode($row['img']);
                                                        echo "<img src='$imageSrc' alt='Product Image' class='img-fluid' style='margin-top: 5px; max-width: 200px;'>";
                                                    }
                                                } else {
                                                    // Display a default placeholder image if no images are found
                                                    echo "<img src='assets/images/product/default_product.png' alt='Default Product' class='img-fluid' style='margin-top: 5px; max-width: 200px;'>";
                                                }
                                                ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Bill</td>
                                        <?php $imageSrc = 'data:image/jpeg;base64,'. base64_encode($item['verification_certificate']);?>
                                        <td class="text-dark"><img src="<?php echo $imageSrc; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="img-fluid" style="margin-top: 5px; max-width: 200px;"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Item Rejection Reason</td>
                                        <td class="text-dark">
                                            <textarea id="rejectionReason" style="margin-top: 5px; max-width: 500px; border: 1px solid #ddd;" name="reason"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Verification</td>
                                        <td class="text-dark" colspan="2" style="display: flex; gap: 10px;">
                                            <form id="verificationForm" method="POST" style="display: flex; gap: 10px;">
                                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
                                                <button type="button" name="action" value="verify" class="btn btn-success" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;" onclick="submitForm('verify')">Verify</button>
                                                <button type="button" name="action" value="reject" class="btn btn-danger" style="background-color: #dc3545; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;" onclick="submitForm('reject')">Reject</button>
                                            </form>
                                        </td>
                                    </tr>

                                <script>
                                    function submitForm(action) {
                                        // Get the item ID and rejection reason
                                        var itemId = document.querySelector('input[name="id"]').value;
                                        var reason = document.getElementById("rejectionReason").value.trim();

                                        // If action is reject, check if reason is provided
                                        if (action === "reject" && reason === "") {
                                            // If the reason is empty, change the border color to red
                                            document.getElementById("rejectionReason").style.borderColor = "red";
                                            return; // Prevent form submission
                                        } else {
                                            // Reset border color if the reason is provided
                                            document.getElementById("rejectionReason").style.borderColor = "#ddd";
                                        }

                                        // Show the loader while the request is being processed
                                        document.getElementById("overlayer").style.display = "block";

                                        // Prepare data to be sent to the server
                                        var data = {
                                            action: action,
                                            id: itemId,
                                            reason: reason
                                        };

                                        // Send data via AJAX
                                        var xhr = new XMLHttpRequest();
                                        xhr.open("POST", "update_verification.php", true);
                                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                                        // Prepare the data string
                                        var params = "action=" + action + "&id=" + itemId + "&reason=" + encodeURIComponent(reason);

                                        // Handle the response from the server
                                        xhr.onload = function () {
                                            // Hide the loader after the response is received
                                            document.getElementById("overlayer").style.display = "none";

                                            if (xhr.status === 200) {
                                                var response = xhr.responseText;


                                                location.replace('admin-item-list.php');

//                                                alert(response);

                                            } else {
                                                alert("An error occurred. Please try again.");
                                            }
                                        };

                                        // Send the request with the parameters
                                        xhr.send(params);
                                    }
                                </script>


                                </tbody>
                            </table>
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