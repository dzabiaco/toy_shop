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

    <?php
        include "include_database.php";
    ?>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--
<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> 
-->
</head>

<body>
<?php include "parts/menu.php"; ?>

<?php 
    $search_value = strtolower($_POST["search"]);
    $sql = "select * from produse where nume like '%".$search_value."%' or desceiere like '%".$search_value."%'";
    $result = mysqli_query($conn, $sql);

    echo "<div style='position:absolute; top:10%; left: 20%;'>";
    echo "<div class='container'>";
    echo '<div class="row" style="margin: 0 auto; display:flex; justify-content:space-around;">';

    while ($row = mysqli_fetch_array($result)) {
        echo '
                    <div class="col-md-3" style="margin:15px;">
                    
                        <div class="card" style="width: 18rem;">
                        <a href="/product/'.$row["id"].'">
                            <img class="card-img-top" src="' . $row["image"] . '" alt="Card image cap">
                        </a>    
                            <div class="card-body">
                                <a href="/product/'.$row["id"].'"><h5 class="card-title">' . $row["nume"] . '</h5> </a>
                                <button class="btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </a>    
                    </div>    
                ';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
?>

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