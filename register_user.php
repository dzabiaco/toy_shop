<?php
    include "include_database.php";
    $email = $_POST["email"];
    $judet = $_POST["judet"];
    $localitate = $_POST["localitate"];
    $adresa = $_POST["adresa"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $sql = 'insert into users (email,judet,password,localitate,adresa,telefon) values ("'.$email.'","'.$judet.'","'.$password.'","'.$localitate.'","'.$adresa.'","'.$phone.'")';

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      header("Location:http://localhost/toyshop/index.php");
        exit();
?>