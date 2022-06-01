<?php 
    include "include_database.php";
    $user_id = $_SESSION["id"];
    $product = $_POST["product_id"];
    $sql = 'INSERT INTO cart (id_user,id_produs) values ('.$user_id.','.$product.')';
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>