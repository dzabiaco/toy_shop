<div class="section position-relative" style="margin-top:50px;">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row mb-lg-8 mb-6">
            <!-- Section Title Start -->
            <div class="col-lg col-12">
                <div class="section-title mb-0 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="title mb-2">Latest products</h2>
                </div>
            </div>
            <!-- Section Title End -->

        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row" style="margin: 0 auto; display:flex; justify-content:space-around;">
            <?php
            $sql = "select * from produse limit 6";
            $resultat = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($resultat) > 0;

            if ($check) {
                while ($row = mysqli_fetch_array($resultat)) {
                    echo '
                    <div class="col-md-3" style="margin:15px;">
                    
                        <div class="card" style="width: 18rem;">
                        <a href="/product/' . $row["id"] . '">
                            <img class="card-img-top" src="' . $row["image"] . '" alt="Card image cap">
                        </a>    
                            <div class="card-body">
                                <a href="/product/' . $row["id"] . '"><h5 class="card-title">' . $row["nume"] . '</h5> </a>
                                <button id="add_to_cart" onclick="add_to_cart(' . $row["id"] . ')" class="btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </a>    
                    </div>    
                ';
                }
            }
            ?>
        </div>


    </div>
    <!-- Product End -->

</div>

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>

<script>
    function add_to_cart(id) {
        $.ajax({
            type: "POST",
            url: "add_to_cart.php",
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