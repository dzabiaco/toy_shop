<?php
    include "include_database.php";
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email!='' && $password!=''){

        $sql = 'select * from users where email = "'.$email.'" and password = "'.$password.'"';
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) >0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["id"] = $row["id_user"];
        }
        header("Location:http://localhost/toyshop/index.php");
        exit();
    }
?>