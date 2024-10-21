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
                                    <div class="col-sm-6">
                                        <label for="sellerid"><i class="fa fa-user"></i></label>
                                        <input type="tel" id="sellerid" placeholder="Seller Id" name="txtsellerid"
                                                <?php if (isset($_POST['txtsellerid'])) echo 'value="' . htmlspecialchars($_POST['txtsellerid']) . '"'; ?> required>
                                    </div>

                                    <div class="col-sm-6">
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
                                <label for="description"><i class="fa fa-user"></i></label>
                                <input type="text" id="description" placeholder="Description" name="txtdescription"
                                       <?php if (isset($_POST['txtdescription'])) echo 'value="' . htmlspecialchars($_POST['txtdescription']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30">
                                <label for="startingprice"><i class="fa fa-user"></i></label>
                                <input type="text" id="startingprice" placeholder="Starting Price" name="txtstartingprice"
                                       <?php if (isset($_POST['txtstartingprice'])) echo 'value="' . htmlspecialchars($_POST['txtstartingprice']) . '"'; ?> required>
                            </div>
                            <div class="form-group mb-30">
                                <label for="image-upload"><i class="fa fa-image"></i></label>
                                <input type="file" id="image-upload" name="txtimage" required accept="image/*" onchange="previewImage(event)">
                            </div>
                            <div class="form-group mb-30">
                                <label for="bill-upload"><i class="fa fa-image"></i></label>
                                <input type="file" id="bill-upload" name="txtbill" required accept="image/*">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="custom-button"  name="btnsubmit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-side cl-white">
                        <div class="section-header mb-0">
                        <img id="image-preview" src="#" alt="Image Preview" style="margin-top: 10px; max-width: 200px;"/>
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
        $item_name = $_POST['txtitemname'];
        $seller_id = $_POST['txtsellerid'];
        $category_id = $_POST['txtcategoryid'];
        $description = $_POST['txtdescription'];
        $starting_price = $_POST['txtstartingprice'];
        $image = $_FILES['txtimage'];
        $bill = $_FILES['txtbill'];

        // Image Upload
        $target_dir_image = "uploads/";
        $imageFileType = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
        $random_filename_image = time() . rand(1000, 9999) . '.' . $imageFileType;
        $target_file_image = $target_dir_image . $random_filename_image;
        $uploadOk_image = 1;

        // Check if image file is a real image
        $check = getimagesize($image["tmp_name"]);
        if ($check !== false) {
            $uploadOk_image = 1;
        } else {
            $uploadOk_image = 0;
        }

        // Check if image file already exists
        if (file_exists($target_file_image)) {
            $uploadOk_image = 0;
        }

        // Check image file size
        if ($image["size"] > 500000) {
            $uploadOk_image = 0;
        }

        // Check image file type
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $uploadOk_image = 0;
        }

        $target_dir_bill = "billuploads/";
        $billFileType = strtolower(pathinfo($bill["name"], PATHINFO_EXTENSION));
        $random_filename_bill = time() . rand(1000, 9999) . '.' . $billFileType;
        $target_file_bill = $target_dir_bill . $random_filename_bill;
        $uploadOk_bill = 1;

        if (file_exists($target_file_bill)) {
            $uploadOk_bill = 0;
        }

        if ($bill["size"] > 500000) {
            $uploadOk_bill = 0;
        }

        // if ($billFileType != "pdf" && $billFileType != "docx" && $billFileType != "doc") {
        if ($billFileType != "jpg" && $billFileType != "png" && $billFileType != "jpeg") {
            $uploadOk_bill = 0;
        }

        if ($uploadOk_image == 0 || $uploadOk_bill == 0) {
            echo '<script>alert("Sorry, your file was not uploaded.")</script>';
        } else {
            if (move_uploaded_file($image["tmp_name"], $target_file_image) && move_uploaded_file($bill["tmp_name"], $target_file_bill)) {
                include 'connection.php';
                $query = "INSERT INTO tblitem (name, seller_id, category_id, description, image_id, bill_id, starting_price, verify_status, status) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, 'pending', 'inactive')";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, "ssssssd", $item_name, $seller_id, $category_id, $description, $random_filename_image, $random_filename_bill, $starting_price);
                if (mysqli_stmt_execute($stmt)) {
                    echo '<script type="text/javascript"> 
                      alert("Item added successfully!"); 
                      window.location.href = "./additem.php";
                      </script>';
                } else {
                    echo '<script>alert("Failed to add item!")</script>';
                }
            } else {
                echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
            }
        }
    }
}

        ?>
 <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('image-preview');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "#";
                imagePreview.style.display = 'none';
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