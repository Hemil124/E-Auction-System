<?php
session_start();
//    without login can't open indexpage!!        
if (!isset($_SESSION['semail'])) {
//    header("Location: sign-in.php");
//    exit();
}
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
        <title>Add Item E-Auction</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <script src="assets/js/main2.js" type="text/javascript"></script>
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
        <style>
            #image-preview-container {
                display: flex;
                flex-direction: column;
                overflow-y: auto;
                max-height: 700px;
            }

            #image-preview-container img {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <?php include 'seller_Header.php'; ?>
        <!--============= Hero Section Starts Here =============-->
        <div class="hero-section">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <span>Add Item</span>
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
                            <h2 class="title">ADD ITEM FOR AUCTION</h2>
                            <p>We're happy for your item participants in auction!</p>
                        </div>
                        <form class="login-form" method="post" action="" enctype="multipart/form-data" id="itemForm">
                            <div class="form-group mb-30">
                                <label for="itemname"><i class="fa fa-user"></i></label>
                                <input type="text" id="itemname" placeholder="Item Name" name="txtitemname"
                                       <?php if (isset($_POST['txtitemname'])) echo 'value="' . htmlspecialchars($_POST['txtitemname']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30" id="a">
                                <div class="row">
                                    <!--                                    <div class="col-sm-6">
                                                                            <label for="sellerid"><i class="fa fa-user"></i></label>
                                                                            <input type="tel" id="sellerid" placeholder="Seller Id" name="txtsellerid"
                                    <?php // if (isset($_POST['txtsellerid'])) echo 'value="' . htmlspecialchars($_POST['txtsellerid']) . '"'; ?> required>
                                                                        </div>-->

                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <select id="category-id" name="txtcategoryid" required>
                                                <option value="">Select a Category</option>
                                                <?php
                                                $categories = getCategories();
                                                foreach ($categories as $category) {
                                                    echo '<option value="' . htmlspecialchars($category['id']) . '">' . htmlspecialchars($category['name']) . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <!--<label for="description"><i class="fa fa-user"></i></label>-->
                                <textarea type="text" id="description" placeholder="Description" name="txtdescription"
                                          <?php if (isset($_POST['txtdescription'])) echo 'value="' . htmlspecialchars($_POST['txtdescription']) . '"'; ?> required></textarea>
                            </div>
                            <div class="form-group mb-30">
                                <label for="startingprice"><i class="fa fa-user"></i></label>
                                <input type="text" id="startingprice" placeholder="Starting Price" name="txtstartingprice"
                                       <?php if (isset($_POST['txtstartingprice'])) echo 'value="' . htmlspecialchars($_POST['txtstartingprice']) . '"'; ?> required>
                            </div>
                            <script>
                                document.getElementById('startingprice').addEventListener('input', function (e) {
                                    this.value = this.value.replace(/\D/g, '');
                                });
                                document.getElementById('itemForm').addEventListener('submit', function (event) {
                                    const startDate = document.getElementById('start_datetime').value;
                                    const endDate = document.getElementById('end_datetime').value;

                                    if (new Date(startDate) > new Date(endDate)) {
                                        alert('End date cannot be earlier than the start date.');
                                        event.preventDefault(); // Prevent form submission
                                    }
                                });
                            </script>
                            <div class="form-group mb-30">
                                <label for="image-upload"><i class="fa fa-image"></i></label>
                                <input type="file" id="image-upload" name="txtimage[]" required accept="image/*" multiple onchange="previewImages(event)">
                                <small class="form-text text-muted">Please upload a item images.</small>
                            </div>
                            <div class="form-group mb-30">

                                <label for="bill-upload"><i class="fa fa-image"></i></label>
                                <input type="file" id="bill-upload" name="txtbill" placeholder="uplode bill e" required accept="image/*">
                                <small class="form-text text-muted">Please upload a single image of the bill.</small>
                            </div>
                            <p>Start Date Time:</p>
                            <div class="form-group mb-30">
                                <label for="start_datetime"><i class="fa fa-calendar"></i> </label>
                                <input type="datetime-local" id="start_datetime" name="txtstart_datetime" required>
                            </div>
                            <p>End Date Time:</p>
                            <div class="form-group mb-30">
                                <label for="end_datetime"><i class="fa fa-calendar"></i> </label>
                                <input type="datetime-local" id="end_datetime" name="txtend_datetime" required>
                            </div>

                            <div class="form-group mb-30">
                                <label for="reserve_price"><i class="fa fa-money"></i> </label>
                                <input type="number" id="reserve_price" placeholder="Reserve Price" name="txtreserve_price" required>
                            </div>
                            <p>Emd Due Date:</p>
                            <div class="form-group mb-30">
                                <label for="emd_date"><i class="fa fa-calendar"></i></label>
                                <input type="date" id="emd_date" name="txtemd_date" required>
                            </div>

                            <div class="form-group mb-30">
                                <label for="emd_amount"><i class="fa fa-money"></i></label>
                                <input type="number" id="emd_amount" placeholder="EMD Amount" name="txtemd_amount" required>
                            </div>

                            <div class="form-group mb-30">
                                <label for="minimum_bidders"><i class="fa fa-users"></i></label>
                                <input type="number" id="minimum_bidders" placeholder="Minimum Bidders" name="txtminimum_bidders" required>
                            </div>

                            <div class="form-group mb-30">
                                <label for="increment_value"><i class="fa fa-arrow-up"></i> </label>
                                <input type="number" id="increment_value" placeholder="Increment Value" name="txtincrement_value" required>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button"  name="btnsubmit">Submit</button>
                            </div>
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

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['btnsubmit'])) {
                itemSubmit();
            }
        }

        function getCategories() {
            include 'connection.php';
            $categories = [];

            $sql = "SELECT id, name FROM tblCategory";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $categories[] = $row;
                }
            }

            $conn->close();
            return $categories;
        }

        function itemSubmit() {
            if (isset($_POST['btnsubmit'])) {
                include 'find_ID.php';
//        $seller_id = find_sellerID($_SESSION['txtemail']);
                $seller_id = find_sellerID("22bmiit117@gmail.com");
                // tblitem fields
                $item_name = $_POST['txtitemname'];
                $category_id = $_POST['txtcategoryid'];
                $description = $_POST['txtdescription'];
                $starting_price = $_POST['txtstartingprice'];
                $imageFiles = $_FILES['txtimage'];
                $bill = $_FILES['txtbill'];

                // tblauctionitem fields
                $start_datetime = $_POST['txtstart_datetime'];
                $end_datetime = $_POST['txtend_datetime'];
                $reserve_price = $_POST['txtreserve_price'];
                $emd_date = $_POST['txtemd_date'];
                $emd_amount = $_POST['txtemd_amount'];
                $minimum_bidders = $_POST['txtminimum_bidders'];
                $increment_value = $_POST['txtincrement_value'];

                // Server-side validation for date
                if (strtotime($start_datetime) > strtotime($end_datetime)) {
                    echo '<script>alert("End date cannot be earlier than the start date.")</script>';
                    return; // Stop execution if validation fails
                }

                // Image and bill upload logic (existing code)
                $imageNames = [];
                $target_dir_image = "uploads/";

                for ($i = 0; $i < count($imageFiles['name']); $i++) {
                    $imageFileType = strtolower(pathinfo($imageFiles["name"][$i], PATHINFO_EXTENSION));
                    $random_filename_image = time() . rand(1000, 9999) . '.' . $imageFileType;
                    $target_file_image = $target_dir_image . $random_filename_image;

                    $check = getimagesize($imageFiles["tmp_name"][$i]);
                    if ($check === false) {
                        echo '<script>alert("File is not an image.")</script>';
                        continue;
                    }

                    if (file_exists($target_file_image)) {
                        echo '<script>alert("Sorry, image already exists.")</script>';
                        continue;
                    }

                    if ($imageFiles["size"][$i] > 500000) {
                        echo '<script>alert("Sorry, your image is too large.")</script>';
                        continue;
                    }

                    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg'])) {
                        echo '<script>alert("Sorry, only JPG, JPEG, & PNG files are allowed.")</script>';
                        continue;
                    }

                    if (move_uploaded_file($imageFiles["tmp_name"][$i], $target_file_image)) {
                        $imageNames[] = $random_filename_image;
                    } else {
                        echo '<script>alert("Sorry, there was an error uploading your image.")</script>';
                    }
                }

                $target_dir_bill = "billuploads/";
                $billFileType = strtolower(pathinfo($bill["name"], PATHINFO_EXTENSION));
                $random_filename_bill = time() . rand(1000, 9999) . '.' . $billFileType;
                $target_file_bill = $target_dir_bill . $random_filename_bill;

                if (file_exists($target_file_bill)) {
                    echo '<script>alert("Sorry, bill already exists.")</script>';
                    return;
                }

                if ($bill["size"] > 500000) {
                    echo '<script>alert("Sorry, your bill is too large.")</script>';
                    return;
                }

                if (!in_array($billFileType, ['jpg', 'png', 'jpeg'])) {
                    echo '<script>alert("Sorry, only JPG, JPEG, & PNG files are allowed.")</script>';
                    return;
                }

                if (!move_uploaded_file($bill["tmp_name"], $target_file_bill)) {
                    echo '<script>alert("Sorry, there was an error uploading your bill.")</script>';
                    return;
                }

                $images_json = json_encode($imageNames);

                // Step 1: Insert into tblitem
                include 'connection.php';
                $query_item = "INSERT INTO tblitem (name, seller_id, category_id, description, starting_price, image_id, verification_certificate) 
                       VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt_item = mysqli_prepare($conn, $query_item);
                mysqli_stmt_bind_param($stmt_item, "sssssss", $item_name, $seller_id, $category_id, $description, $starting_price, $images_json, $random_filename_bill);

                if (mysqli_stmt_execute($stmt_item)) {
                    // Get the last inserted ID from tblitem
                    $item_id = mysqli_insert_id($conn);

                    // Step 2: Insert into tblauctionitem
                    $query_auction = "INSERT INTO tblauctionitem (item_id, start_datetime, end_datetime, reserve_price, emd_date, emd_amount, minimum_bidders, increment_value, auction_status) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'pending')";
                    $stmt_auction = mysqli_prepare($conn, $query_auction);
                    mysqli_stmt_bind_param($stmt_auction, "isssdsid", $item_id, $start_datetime, $end_datetime, $reserve_price, $emd_date, $emd_amount, $minimum_bidders, $increment_value);

                    if (mysqli_stmt_execute($stmt_auction)) {
                        echo '<script type="text/javascript"> 
                      alert("Item and Auction added successfully!"); 
                      window.location.href = "index-2.php"; 
                      </script>';
                    } else {
                        echo '<script>alert("Error adding auction!")</script>';
                    }
                } else {
                    echo '<script>alert("Error adding item!")</script>';
                }

                $conn->close();
            }
        }
        ?>
        <script>
            function previewImages(event) {
                const imagePreviewContainer = document.getElementById('image-preview-container');
                imagePreviewContainer.innerHTML = '';
                const files = event.target.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imageContainer = document.createElement('div');
                        imageContainer.style.position = 'relative';

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100%';
                        img.style.height = 'auto';
                        img.style.marginBottom = '10px';

                        const removeButton = document.createElement('button');
                        removeButton.innerHTML = '✖';
                        removeButton.style.position = 'absolute';
                        removeButton.style.top = '0px';
                        removeButton.style.left = '0px';
                        removeButton.style.background = 'red';
                        removeButton.style.color = 'white';
                        removeButton.style.border = 'none';
                        removeButton.style.cursor = 'pointer';
                        removeButton.style.zIndex = '5';
                        removeButton.style.fontSize = '16px';
                        removeButton.style.padding = '15';
                        removeButton.style.width = 'auto';
                        removeButton.style.height = 'auto';
                        removeButton.style.lineHeight = 'normal';

                        removeButton.addEventListener('click', function () {
                            imagePreviewContainer.removeChild(imageContainer);
                        });

                        imageContainer.appendChild(removeButton);
                        imageContainer.appendChild(img);
                        imagePreviewContainer.appendChild(imageContainer);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

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