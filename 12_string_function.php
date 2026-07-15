<?php

    function get_hypo(float $num1 , float $num2){
        return round(sqrt($num1**2 + $num2**2 ),2); 
    }

    // echo get_hypo(3.0, 3); 

    $username = "win kyaw phyo";
    $username2 = array("win", "kyaw", "phyo");
    $phone_number = "123-456-789";
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "*");
    // $phone_number = str_replace( "-", "*", $phone_number);
    // $username = strrev($username);
    // $username =str_shuffle($username); 
    // $username =strcmp($username,$username2);
    // echo strlen($username);
    // $index = strpos($username, " ");
    
    // $first_name = substr($username,0,3);
    // $last_name = substr($username,9);
    // echo $first_name;
    // echo "<br>";
    // echo $last_name;

    // $fullname = explode(" ",$username);
    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }

    // $fullname2 = implode(" ", $username2);
    // echo $fullname2;

    // echo $index;
    // echo $username;
    // echo $phone_number;

?>