<!DOCTYPE html>
<html lang="en">

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
                        <li class="active"> Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
</div>

<div class="section section-margin">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Tell Us Your Project</h2>
                    </div>
                    <!-- Section Title End -->
                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <form action="controllers/send_mail.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Your Name *" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="email" placeholder="Email *" name="email">
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Subject *" name="subject">
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="400">
                                            <div class="input-area mb-8">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                                            <button type="submit" id="submit" name="submit" class="btn btn-secondary button-hover-primary">Send A Message</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->
                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p data-aos="fade-up" data-aos-delay="200">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                        <address class="contact-block">
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="200"><i class="fa fa-fax"></i> Your address goes here</li>
                                <li data-aos="fade-up" data-aos-delay="400"><i class="fa fa-phone"></i> <a href="tel:123-123-456-789">123 123 456 789</a></li>
                                <li data-aos="fade-up" data-aos-delay="600"><i class="fa fa-envelope-o"></i> <a href="mailto:demo@example.com">demo@example.com </a></li>
                            </ul>
                        </address>

                        <div class="working-time" data-aos="fade-up" data-aos-delay="600">
                            <h6 class="title">Working Hours</h6>
                            <p>Monday – Saturday:08AM – 22PM</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include "parts/footer.php" ?>


    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top pe-7s-angle-up-circle"></i>
        <i class="arrow-bottom pe-7s-angle-up-circle"></i>
    </a>

    <!-- Scripts -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->


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


</html>