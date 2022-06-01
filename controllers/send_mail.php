<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "dmitri.delta@gmail.com";

    $retval = mail($to,$subject,$message);

    if( $retval == true ) {
        echo "Message sent successfully...";
     }else {
        echo "Message could not be sent...";
     }
    
?>