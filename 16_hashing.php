<?php

    $password = "password123"; 
    $hash = password_hash($password, PASSWORD_DEFAULT); 
    // echo $hash;
    if(password_verify("password123", $hash)){
        echo "correct password";
    }else{
        echo "wrong";
    }

?>