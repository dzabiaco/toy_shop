<div class="header section">
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- Header Logo Start -->
                    <div class="col-md-6 col-lg-3 col-xl-2 col-6">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="has-children">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="has-children position-static">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li class="has-children">
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-md-6 col-lg-3 col-xl-4 col-6 justify-content-end">
                        <div class="header-actions">
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-search d-none d-lg-block"><i class="pe-7s-search"></i></a>
                            <div class="dropdown-user d-none d-lg-block">
                                <a href="javascript:void(0)" class="header-action-btn"><i class="pe-7s-user"></i></a>
                                <ul class="dropdown-menu-user">
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                                </ul>
                            </div>

                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-block">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->

    <!-- Offcanvas Search Start -->
    <div class="offcanvas-search">
        <div class="offcanvas-search-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Search Form Start -->
            <form class="offcanvas-search-form" action="search.php" method="POST">
                <input type="text" placeholder="Search Product..." name="search" class="offcanvas-search-input">
            </form>
            <!-- Offcanvas Search Form End -->

        </div>
    </div>
    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->
    <div class="cart-offcanvas-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Cart Offcanvas Inner Start -->
        <div class="cart-offcanvas-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Cart Content Start -->
            <div class="offcanvas-cart-content">

                <?php
                $user_id = $_SESSION["id"];
                $sql = 'select * from cart t1 inner join produse t2 on t1.id_produs = t2.id where id_user ='.$user_id.' ;';
                $resultat = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($resultat) > 0;

                if ($check) {
                    while ($row = mysqli_fetch_array($resultat)) {
                        echo '
                        <div class="cart-product-wrapper mb-4 pb-4 border-bottom">
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="/product/' . $row["id"] . '"><img src="' . $row["image"] . '" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="/product/' . $row["id"] . '">'.$row["nume"].'</a></h3>
                                <div class="product-quty-price">
                                    <span class="price">
                                        <span class="new">$'.$row["pret"].'</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="cart-product-remove" onclick="remove_from_cart('.$row["id_comanda"].')">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </div>
                    </div>
                    ';
                    }
                }

                ?>
                <!-- Cart Product Button Start -->
                <div class="cart-product-btn mt-4">
                    <a href="checkout.html" class="btn btn-light btn-hover-primary w-100 mt-4"><i class="fa fa-share"></i> Checkout</a>
                </div>
                <!-- Cart Product Button End -->

            </div>
            <!-- Offcanvas Cart Content End -->

        </div>
        <!-- Cart Offcanvas Inner End -->
    </div>
    <!-- Cart Offcanvas End -->

</div>

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>

<script>
    function remove_from_cart(id) {
        $.ajax({
            type: "POST",
            url: "remove_from_cart.php",
            data: {
                product_id: id
            },
            cache: false,
            success: function(data) {
                console.log(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }
</script>