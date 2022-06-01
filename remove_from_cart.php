<?php
    include "include_database.php";
    $user_id = $_SESSION["id"];
    $order = $_POST["product_id"];

    $sql = 'DELETE FROM cart where id_comanda = '.$order.'';
    if (mysqli_query($conn, $sql)) {
        echo "Record was deleted successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>