<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "a.bifom2@gmail.com"
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nRegards, \n$name";
            $sender = "From: $email";
            if(mail($receiver,$subject,$body,$sender)){
                
            }
        }else{

        }
    } else{

    }

?>