<?php

echo " <div class='product-wrapper'>
<div class='product mb-6'>
    <div class='thumb'>
        <a href='single-product.html' class='image'>
            <img class='fit-image' src='".$row["image"]."' alt='Product' />
        </a>
        <span class='badges'>
            <span class='sale'>-18%</span>
        </span>

        <div class='add-cart-btn'>
            <button class='btn btn-whited btn-hover-primary text-capitalize add-to-cart'>Add To Cart</button>
        </div>
    </div>
    <div class='content'>
        <h5 class='title'><a href='single-product.html'>".$row["nume"]."</a></h5>
        <span class='price'>
            <span class='new'>
                $".$row["pret"]."
            </span>
        </span>
    </div>
</div>
</div> </div>";

?>

<?php
    
?>