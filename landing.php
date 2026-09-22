<?php 

    $username = "yoon mi mi ko";
    $username2 = "aungnaingmin@gmail.com";
    $phone_number = "09-45-67-89";
    // $username = strtoupper($username);

    // $cleanUsername = trim($username, "#");
    // $cleanUsername = trim($username, "0..9");

    // $username = str_pad($username, 20, "#");
    // $phone_number = str_replace("-", "", $phone_number);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    $returnResult = strcmp($username, $username2);  
    
    // if same return 0 else return 1 
    // pesudo code

    // literal string comparison

    // if(!$returnResult){
    //     echo "they are the same user";
    // }else{
    //     echo "they aren't the same user";
    // }

    $name_length = strlen($username2);
    
    // if($name_length >= 20){
    //     echo "your username can't be over 20 characters";
    // }else{
    //     echo "approve username";
    // }

    
    // $soemArray = array("apple", "orange", "cherry");
    // echo $soemArray[0];
    // echo $username2[0];

    // for($i = 0 ; $i < $name_length; $i++){
    //     echo $username2[$i];
    // }


     // $username2 = substr($username2, 4 ) ;  // offset = inclusive , length = exclusive
    // $username2 = substr($username2, 4);
    // echo $username2; 
    
    // data extraction
    // get user name
    // $index = strpos($username2, "@");
    // $getusername = substr($username2, 0 ,$index);


    // // get domain name
    // $getdomain = substr($username2, $index + 1  );
    // $getdomain = substr($getdomain, 0 ,strpos($getdomain, "."));

    // echo $username2;
    // echo "<br>";
    // echo  "username is ". $getusername;
    // echo "<br>";
    // echo  "domain is ". $getdomain;


    $fullname = explode(" ",$username);
    $namelength = count($fullname);

    echo "first name is " . $fullname[0] . "<br>";
    echo "last name is " . $fullname[$namelength - 1 ] . "<br>";

    foreach ($fullname as $name) {
        echo $name . "<br>";
    }
   

    $my_full_name = array("thin", "zar" , "wint", "kyaw");

    $assemble = implode(" ", $my_full_name); 
    echo $assemble;

    foreach ($my_full_name as $name) {
        echo $name . "<br>";
    }

    
    // echo $phone_number; 
    // echo $returnResult;
    // echo $name_length;

?>