<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/toyqo/toyqo/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 22:43:41 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kids Store</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css" />


    <!-- Plugins CSS (All Plugins Files) -->


    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--
<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> 
-->
</head>

<body>
<?php include "parts/menu.php"; ?>
<div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-primary">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i> </a>
                        </li>
                        <li class="active"> Register Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

</div>


<div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="register_user.php" method="POST">

                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Last Name Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="judet" placeholder="Judet">
                            </div>
                            <!-- Input Last Name End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                <input type="text" name="localitate" placeholder="Localitate">
                            </div>
                            <!-- Input Email Or Username End -->

                            <div class="single-input-item mb-3">
                                <input type="text" name="adresa" placeholder="Adresa">
                            </div>

                            <div class="single-input-item mb-3">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="password" placeholder="Enter your Password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">Register</button>
                            </div>
                            <!-- Register Button End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>
        </div>
    </div>


<?php include "parts/footer.php" ?>


<script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>



    <!-- Plugins JS -->


    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdown.min.js"></script>
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>



    <!-- Use the minified version files listed below for better performance and remove the files listed above -->


    <!-- 
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script> 
    -->

    <!--Main JS-->
    <script src="assets/js/main.js"></script>
</body>