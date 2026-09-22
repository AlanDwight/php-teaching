<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>
        This is the login page <br><br>
    </b>
    <form action= "<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>

</body>
</html>


<?php 

    // stored in database mysql or postgresql
    $user_name = "admin";
    $user_password = "mypassword123";

    // Output: $2y$10$eImiTXuWVxfM37uY... (60 character string including algorithm, cost, salt, and hash)
    $hash = password_hash($user_password, PASSWORD_DEFAULT);
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){


        if ($_POST["username"] == $user_name && password_verify($_POST["password"], $hash)) {
            // Password matches
            echo "correct password <br>";
            echo "Your password hash is {$hash}";
            } else {
            // Invalid password
            echo "wrong password";    
        }
    }




    // $checksum = hash('sha256', 'Payload data');

    // if($checksum == $user_checksum){
    //     echo "data not tampered"
    // }

    // $signature = hash_hmac('sha256', 'Payload data', 'secret_api_key');



    $hash = password_hash("password", PASSWORD_DEFAULT);
    // echo $hash;

    if(password_verify("password", $hash)){
        echo "correct password";
    }else{
        echo "incorrect password";
    }

?>