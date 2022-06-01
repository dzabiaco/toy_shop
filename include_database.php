<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "toyshop";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>