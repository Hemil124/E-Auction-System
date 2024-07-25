
<!DOCTYPE html>
<html lang="en">


    <head>
        <?php
        session_start();
//      withaout login can't open indexpage!!        
//        if (!isset($_SESSION['txtemail']) ) {
//            header("Location: sign-in.php");
//            exit();
//        }
//        it's explod the emailid and show only name
       // $email = $_SESSION['txtemail'];
       // $susername = explode('@', $email)[0];
      
//        whole emailid show
//        $susername = $_SESSION['txtemail'];
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>E-Auctiom</title>
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
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="header-top-wrapper">
                        <ul class="customer-support">
                            <li class="cmn-support-text">
                                <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                            </li>
                            <li class="customer-cupport-lang">
                                <i class="fas fa-globe"></i>
                                <select name="language" class="select-bar">
                                    <option value="en">En</option>
                                    <option value="Bn">Bn</option>
                                    <option value="Rs">Rs</option>
                                    <option value="Us">Us</option>
                                    <option value="Pk">Pk</option>
                                    <option value="Arg">Arg</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="cart-button-area">
                            <?php if (isset($_SESSION['txtemail'])): ?>
                            <li>
                                <button class="custom-button"><a href="logout.php">Logout</a></button>
                            </li>
                        <?php endif; ?>
                            <li>
                                <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                            </li>                        
                            <li>
                                <a href="sign-in.php" class="user-button"><i class="flaticon-user"></i></a>
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo.png" alt="logo">
                            </a>
                            <!--<lable>Welcome, <?php echo $susername; ?>!</lable>-->
                            <?php
                            if (isset($susername)) {
                                echo "<p>Welcome, " . htmlspecialchars($susername) . "!</p>";
                            } else {
                                echo "<p>Welcome!</p>";
                            }
                            ?>
                        </div>
                        <ul class="menu ml-auto">
                            <li>
                                <a href="#0">Home</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.php">Home Page One</a>
                                    </li>
                                    <li>
                                        <a href="index-2.php">Home Page Two</a>
                                    </li>
                                    <li>
                                        <a href="index-3.php">Home Page Three</a>
                                    </li>
                                    <li>
                                        <a href="index-4.php">Home Page Four</a>
                                    </li>
                                    <li>
                                        <a href="index-5.php">Home Page Five</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.php">Auction</a>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#0">Product</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="product.php">Product Page 1</a>
                                            </li>
                                            <li>
                                                <a href="product-2.php">Product Page 2</a>
                                            </li>
                                            <li>
                                                <a href="product-details.php">Product Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">My Account</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="sign-up.php">Sign Up</a>
                                            </li>
                                            <li>
                                                <a href="sign-in.php">Sign In</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#0">Dashboard</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="profile.php">Personal Profile</a>
                                            </li>
                                            <li>
                                                <a href="my-bid.php">My Bids</a>
                                            </li>
                                            <li>
                                                <a href="winning-bids.php">Winning Bids</a>
                                            </li>
                                            <li>
                                                <a href="notifications.php">My Alert</a>
                                            </li>
                                            <li>
                                                <a href="my-favorites.php">My Favorites</a>
                                            </li>
                                            <li>
                                                <a href="referral.php">Referrals</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="faqs.php">Faqs</a>
                                    </li>
                                    <li>
                                        <a href="error.php">404 Error</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="search-form">
                            <input type="text" placeholder="Search for brand, model...." id="search-input" onkeyup=" showSuggestions(this.value)">
                            <div id="suggestions"></div>
                            <script>
                                const data = [
                                    "Apple",
                                    "Banana",
                                    "Cherry",
                                    "Date",
                                    "Elderberry",
                                    "Fig",
                                    "Grape",
                                    "Honeydew",
                                ];

                                function showSuggestions(value) {
                                    let suggestions = document.getElementById('suggestions');
                                    let searchInput = document.getElementById('search-input');
                                    suggestions.innerHTML = '';

                                    if (value.length === 0) {
                                        searchInput.classList.remove('active');
                                        suggestions.classList.remove('active');
                                        return;
                                    }

                                    searchInput.classList.add('active');
                                    suggestions.classList.add('active');

                                    let lowerCaseValue = value.toLowerCase();

                                    // Items that start with the input value
                                    let startWithData = data.filter(item => item.toLowerCase().startsWith(lowerCaseValue));

                                    // Items that contain the input value but don't start with it
                                    let containData = data.filter(item => item.toLowerCase().includes(lowerCaseValue) && !item.toLowerCase().startsWith(lowerCaseValue));

                                    // Combine both lists
                                    let filteredData = [...startWithData, ...containData];

                                    // Limit to 5 suggestions
                                    filteredData = filteredData.slice(0, 5);

                                    filteredData.forEach(item => {
                                        let suggestionItem = document.createElement('div');
                                        suggestionItem.classList.add('suggestion-item');
                                        suggestionItem.textContent = item;
                                        suggestionItem.onclick = () => selectSuggestion(item);
                                        suggestions.appendChild(suggestionItem);
                                    });
                                }

                                function selectSuggestion(value) {
                                    document.getElementById('search-input').value = value;
                                    document.getElementById('suggestions').innerHTML = '';
                                    document.getElementById('search-input').classList.remove('active');
                                    document.getElementById('suggestions').classList.remove('active');
                                }
                            </script>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="search-bar d-md-none">
                            <a href="#0"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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


        <!--============= Banner Section Starts Here =============-->
        <section class="banner-section bg_img" data-background="assets/images/banner/banner-bg-1.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-xl-6">
                        <div class="banner-content cl-white">
                            <h5 class="cate" data-aos="fade-down" data-aos-duration="1000">Next Generation Auction</h5>
                            <h1 class="title" data-aos="zoom-out-up" data-aos-duration="1200"><span class="d-xl-block">Find Your</span> Next Deal!</h1>
                            <p class="pras" data-aos="zoom-out-down" data-aos-duration="1300">
                                Online Auction is where everyone goes to shop, sell,and give, while discovering variety and affordability.
                            </p>
                            <a href="#0" class="custom-button yellow btn-large" data-aos="zoom-out-up" data-aos-duration="1500">Get Started</a>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                        <div class="banner-thumb-2">
                            <img src="assets/images/banner/banner-1.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape d-none d-lg-block">
                <img src="assets/css/img/banner-shape.png" alt="css">
            </div>
        </section>
        <!--============= Banner Section Ends Here =============-->


        <div class="browse-section ash-bg">
            <!--============= Hightlight Slider Section Starts Here =============-->
            <div class="browse-slider-section mt--140">
                <div class="container">
                    <div class="section-header-2 cl-white mb-4">
                        <div class="left" data-aos="flip-up" data-aos-duration="1500">
                            <h6 class="title pl-0 w-100">Browse the highlights</h6>
                        </div>
                        <div class="slider-nav">
                            <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                            <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="m--15">
                        <div class="browse-slider owl-theme owl-carousel">
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/01.png" alt="auction">
                                <span class="info">Vehicles</span>
                            </a>
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/02.png" alt="auction">
                                <span class="info">Jewelry</span>
                            </a>
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/03.png" alt="auction">
                                <span class="info">Watches</span>
                            </a>
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/04.png" alt="auction">
                                <span class="info">Electronics</span>
                            </a>
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/05.png" alt="auction">
                                <span class="info">Sports</span>
                            </a>
                            <a href="#0" class="browse-item">
                                <img src="assets/images/auction/06.png" alt="auction">
                                <span class="info">Real Estate</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--============= Hightlight Slider Section Ends Here =============-->

            <!--============= Car Auction Section Starts Here =============-->
            <section class="car-auction-section padding-bottom padding-top pos-rel oh">
                <div class="car-bg"><img src="assets/images/auction/car/car-bg.png" alt="car"></div>
                <div class="container">
                    <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                        <div class="left">
                            <div class="thumb">
                                <img src="assets/images/header-icons/car-1.png" alt="header-icons">
                            </div>
                            <div class="title-area">
                                <h2 class="title">Vehicles</h2>
                                <p>We offer affordable Vehicles</p>
                            </div>
                        </div>
                        <a href="#0" class="normal-button">View All</a>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="2200">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/car/auction-1.jpg" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">2018 Hyundai Sonata</a>
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
                                            <div id="bid_counter26"></div>
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
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1100">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/car/auction-2.jpg" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">2018 Nissan Versa, S</a>
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
                                            <div id="bid_counter27"></div>
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
                            <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1200">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/car/auction-3.jpg" alt="car"></a>
                                    <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">2018 Honda Accord, Sport</a>
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
                                            <div id="bid_counter28"></div>
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
                </div>
            </section>
            <!--============= Car Auction Section Ends Here =============-->
        </div>


        <!--============= Jewelry Auction Section Starts Here =============-->
        <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
            <div class="jewelry-bg d-none d-xl-block"><img src="assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Jewelry</h2>
                            <p>Online jewelry auctions where you can bid now and save money</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1300">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-1.jpg" alt="jewelry"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Gold Ring With Clear Stones</a>
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
                                        <div id="bid_counter23"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1400">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-2.jpg" alt="jewelry"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Ring With Clear Stone Accents</a>
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
                                        <div id="bid_counter24"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1500">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/jewelry/auction-3.jpg" alt="jewelry"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Gold Ring With Clear Stones</a>
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
                                        <div id="bid_counter25"></div>
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
            </div>
        </section>
        <!--============= Jewelry Auction Section Ends Here =============-->


        <!--============= Call In Section Starts Here =============-->
        <section class="call-in-section padding-top pt-max-xl-0">
            <div class="container">
                <div class="call-wrapper cl-white bg_img" data-background="assets/images/call-in/call-bg.png">
                    <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                        <h3 class="title">Register for Free & Start Bidding Now!</h3>
                        <p>From cars to diamonds to iPhones, we have it all.</p>
                    </div>
                    <a href="sign-up.php" class="custom-button white">Register</a>
                </div>
            </div>
        </section>
        <!--============= Call In Section Ends Here =============-->


        <!--============= Watches Auction Section Starts Here =============-->
        <section class="watches-auction-section padding-bottom padding-top">
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Watches</h2>
                            <p>Shop for men & women designer brand watches</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1600">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/watches/auction-1.jpg" alt="watches"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Vintage Rolex</a>
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
                                        <div id="bid_counter20"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1700">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/watches/auction-2.jpg" alt="watches"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Lady’s Vintage Rolex Datejust</a>
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
                                        <div id="bid_counter21"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1800">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/watches/auction-3.jpg" alt="watches"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Lady’s Retro Diamond</a>
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
                                        <div id="bid_counter22"></div>
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
            </div>
        </section>
        <!--============= Watches Auction Section Ends Here =============-->


        <!--============= Popular Auction Section Starts Here =============-->
        <section class="popular-auction padding-top pos-rel">
            <div class="popular-bg bg_img" data-background="assets/images/auction/popular/popular-bg.png"></div>
            <div class="container">
                <div class="section-header cl-white" data-aos="fade-down" data-aos-duration="1000">
                    <span class="cate">Closing Within 24 Hours</span>
                    <h2 class="title" data-aos="fade-down" data-aos-duration="1500">Popular Auctions</h2>
                    <p>Bid and win great deals,Our auction process is simple, efficient, and transparent.</p>
                </div>
                <div class="popular-auction-wrapper">
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1500">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-1.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">Apple Macbook Pro Laptop</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="900">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-2.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">Canon EOS Rebel T6I
                                            Digital Camera</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-3.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">14k Gold Geneve Watch,
                                            24.5g</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1200">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-4.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">14K White Gold 185.60
                                            Grams 5.95 Carats</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1300">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-5.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">2009 Toyota Prius
                                            (Medford, NY 11763)</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auction-item-3" data-aos="zoom-out-up" data-aos-duration="1400">
                                <div class="auction-thumb">
                                    <a href="product-details.php"><img src="assets/images/auction/popular/auction-6.jpg" alt="popular"></a>
                                    <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                </div>
                                <div class="auction-content">
                                    <h6 class="title">
                                        <a href="product-details.php">.6 Gram Pure Gold
                                            Nugget</a>
                                    </h6>
                                    <div class="bid-amount">
                                        <div class="icon">
                                            <i class="flaticon-auction"></i>
                                        </div>
                                        <div class="amount-content">
                                            <div class="current">Current Bid</div>
                                            <div class="amount">$876.00</div>
                                        </div>
                                    </div>
                                    <div class="bids-area">
                                        Total Bids : <span class="total-bids">130 Bids</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Popular Auction Section Ends Here =============-->


        <!--============= Coins and Bullion Auction Section Starts Here =============-->
        <section class="coins-and-bullion-auction-section padding-bottom padding-top pos-rel pb-max-xl-0">
            <div class="jewelry-bg d-none d-xl-block"><img src="assets/images/auction/coins/coin-bg.png" alt="coin"></div>
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Coins & Bullion</h2>
                            <p>Discover rare, foreign, & ancient coins that are worth collecting</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-sm-10 col-md-6 col-lg-4">
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="1900">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/coins/auction-1.jpg" alt="coins"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">Ancient & World Coins</a>
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
                                        <div id="bid_counter17"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="2000">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/coins/auction-2.jpg" alt="coins"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">2018 Hyundai Sonata</a>
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
                                        <div id="bid_counter18"></div>
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
                        <div class="auction-item-2" data-aos="zoom-out-up" data-aos-duration="2100">
                            <div class="auction-thumb">
                                <a href="product-details.php"><img src="assets/images/auction/coins/auction-3.jpg" alt="coins"></a>
                                <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                            </div>
                            <div class="auction-content">
                                <h6 class="title">
                                    <a href="product-details.php">2018 Hyundai Sonata</a>
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
                                        <div id="bid_counter19"></div>
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
            </div>
        </section>
        <!--============= Coins and Bullion Auction Section Ends Here =============-->


        <!--============= Real Estate Section Starts Here =============-->
        <section class="real-estate-auction padding-top padding-bottom pos-rel oh">
            <div class="car-bg"><img src="assets/images/auction/realstate/real-bg.png" alt="realstate"></div>
            <div class="container">
                <div class="section-header-3" data-aos="zoom-out-down" data-aos-duration="1200">
                    <div class="left">
                        <div class="thumb">
                            <img src="assets/images/header-icons/coin-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Real Estate</h2>
                            <p>Find auctions for Homes, Condos, Residential & Commercial Properties.</p>
                        </div>
                    </div>
                    <a href="#0" class="normal-button">View All</a>
                </div>
                <div class="auction-slider-4 owl-theme owl-carousel">
                    <div class="auction-item-4">
                        <div class="auction-thumb">
                            <a href="product-details.php"><img src="assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h4 class="title">
                                <a href="product-details.php">Brand New Apartments In Esenyurt, Istanbul</a>
                            </h4>
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
                                    <div id="bid_counter30"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-4">
                        <div class="auction-thumb">
                            <a href="product-details.php"><img src="assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h4 class="title">
                                <a href="product-details.php">Brand New Apartments In Esenyurt, Istanbul</a>
                            </h4>
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
                                    <div id="bid_counter31"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-4">
                        <div class="auction-thumb">
                            <a href="product-details.php"><img src="assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h4 class="title">
                                <a href="product-details.php">Brand New Apartments In Esenyurt, Istanbul</a>
                            </h4>
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
                                    <div id="bid_counter32"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-4">
                        <div class="auction-thumb">
                            <a href="product-details.php"><img src="assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h4 class="title">
                                <a href="product-details.php">Brand New Apartments In Esenyurt, Istanbul</a>
                            </h4>
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
                                    <div id="bid_counter33"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-item-4">
                        <div class="auction-thumb">
                            <a href="product-details.php"><img src="assets/images/auction/realstate/auction-1.png" alt="realstate"></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h4 class="title">
                                <a href="product-details.php">Brand New Apartments In Esenyurt, Istanbul</a>
                            </h4>
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
                                    <div id="bid_counter34"></div>
                                </div>
                                <span class="total-bids">30 Bids</span>
                            </div>
                            <div class="text-center">
                                <a href="#0" class="custom-button">Submit a bid</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-nav real-style ml-auto">
                    <a href="#0" class="real-prev"><i class="flaticon-left-arrow"></i></a>
                    <div class="pagination"></div>
                    <a href="#0" class="real-next active"><i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </section>
        <!--============= Real Estate Section Starts Here =============-->


        <!--============= Art Auction Section Starts Here =============-->
        <section class="art-and-electronics-auction-section padding-top">
            <div class="container">
                <div class="row justify-content-center mb--50">
                    <div class="col-xl-6 col-lg-8 mb-50">
                        <div class="section-header-2">
                            <div class="left">
                                <div class="thumb">
                                    <img src="assets/images/header-icons/camera-1.png" alt="header-icons">
                                </div>
                                <h2 class="title">Electronics</h2>
                            </div>
                            <div class="slider-nav">
                                <a href="#0" class="electro-prev"><i class="flaticon-left-arrow"></i></a>
                                <a href="#0" class="electro-next active"><i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="auction-slider-1 owl-carousel owl-theme  mb-30-none">
                            <div class="slide-item">
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter1"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Surveillance WiFi Exterieur, 1080P Camera</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter2"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">WiFi Doorbell Camera for Apartments</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter3"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">GPD Pocket 2 Ultrabook 7" inch</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter4"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-1.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter5"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-2.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Surveillance WiFi Exterieur, 1080P Camera</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter6"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-3.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">WiFi Doorbell Camera for Apartments</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter7"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/electronics/auction-4.jpg" alt="electronics"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">GPD Pocket 2 Ultrabook 7" inch</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter8"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 mb-50">
                        <div class="section-header-2">
                            <div class="left">
                                <div class="thumb">
                                    <img src="assets/images/header-icons/art-1.png" alt="header-icons">
                                </div>
                                <h2 class="title">Art</h2>
                            </div>
                            <div class="slider-nav">
                                <a href="#0" class="art-prev"><i class="flaticon-left-arrow"></i></a>
                                <a href="#0" class="art-next active"><i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="auction-slider-2 owl-carousel owl-theme mb-30-none">
                            <div class="slide-item">
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter9"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Surveillance WiFi Exterieur, 1080P Camera</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter10"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">WiFi Doorbell Camera for Apartments</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter11"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">GPD Pocket 2 Ultrabook 7" inch</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter12"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-1.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Magnifying Glasses, Jewelry Loupe odit qui corporis</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter13"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-2.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">Surveillance WiFi Exterieur, 1080P Camera</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter14"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-3.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">WiFi Doorbell Camera for Apartments</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter15"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auction-item-1">
                                    <div class="auction-thumb">
                                        <a href="product-details.php"><img src="assets/images/auction/art/auction-4.jpg" alt="art"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="product-details.php">GPD Pocket 2 Ultrabook 7" inch</a>
                                        </h6>
                                        <div class="bid-amount">
                                            <div class="icon">
                                                <i class="flaticon-auction"></i>
                                            </div>
                                            <div class="amount-content">
                                                <div class="current">Current Bid</div>
                                                <div class="amount">$876.00</div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                            <div class="countdown">
                                                <div id="bid_counter16"></div>
                                            </div>
                                            <span class="total-bids">30 Bids</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Art Auction Section Ends Here =============-->


        <!--============= How Section Starts Here =============-->
        <section class="how-section padding-top">
            <div class="container">
                <div class="how-wrapper section-bg">
                    <div class="section-header text-lg-left" data-aos="zoom-out-up" data-aos-duration="1200">
                        <h2 class="title">How it works</h2>
                        <p>Easy 3 steps to win</p>
                    </div>
                    <div class="row justify-content-center mb--40">
                        <div class="col-md-6 col-lg-4">
                            <div class="how-item">
                                <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1000">
                                    <img src="assets/images/how/how1.png" alt="how">
                                </div>
                                <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1200">
                                    <h4 class="title">Sign Up</h4>
                                    <p>No Credit Card Required</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="how-item">
                                <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1200">
                                    <img src="assets/images/how/how2.png" alt="how">
                                </div>
                                <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1400">
                                    <h4 class="title">Bid</h4>
                                    <p>Bidding is free Only pay if you win</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="how-item">
                                <div class="how-thumb" data-aos="zoom-out-up" data-aos-duration="1400">
                                    <img src="assets/images/how/how3.png" alt="how">
                                </div>
                                <div class="how-content" data-aos="zoom-out-up" data-aos-duration="1600">
                                    <h4 class="title">Win</h4>
                                    <p>Fun - Excitement - Great deals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= How Section Ends Here =============-->


        <!--============= Client Section Starts Here =============-->
        <section class="client-section padding-top padding-bottom">
            <div class="container">
                <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                    <h2 class="title">Don’t just take our word for it!</h2>
                    <p>Our hard work is paying off. Great reviews from amazing customers.</p>
                </div>
                <div class="m--15">
                    <div class="client-slider owl-theme owl-carousel">
                        <div class="client-item">
                            <div class="client-content">
                                <p>I can't stop bidding! It's a great way to spend some time and I want everything on Sbidu.</p>
                            </div>
                            <div class="client-author">
                                <div class="thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client01.png" alt="client">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-content">
                                <p>I came I saw I won. Love what I have won, and will try to win something else.</p>
                            </div>
                            <div class="client-author">
                                <div class="thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client02.png" alt="client">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-content">
                                <p>This was my first time, but it was exciting. I will try it again. Thank you so much.</p>
                            </div>
                            <div class="client-author">
                                <div class="thumb">
                                    <a href="#0">
                                        <img src="assets/images/client/client03.png" alt="client">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#0">Tom Powell</a></h6>
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Client Section Ends Here =============-->


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
                                        <a href="#0"><i class="fas fa-envelope-open-text"></i><span class="__cf_email__" data-cfemail="e48c818894a4818a838b908c818981ca878b89">[email&#160;protected]</span></a>
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