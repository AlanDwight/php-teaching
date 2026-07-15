<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" name="login" value="Log in" > <br>
    </form>
</body>
</html>

<?php
    // isset()
    // empty()

    // $someVar = null;
    // echo isset($someVar);
    // echo empty($someVar);
    // echo "<br>"; 
    // if(isset($someVar)){
    //     echo "not empty";
    // }else {
    //     echo "empty";
    // }


    if(isset($_POST["login"]) ){
        $user_name = "alan";
        $user_password = 123;
        $username = $_POST["username"]; 
        $password = $_POST["password"];

        if(empty($username)){
            echo "empty username";
        }elseif(empty($password)){
            echo "empty password";
        }
        else {
            if($user_password == $password && $user_name == $username){
                echo "hello {$username}";
            }else{
                echo "wrong username and password";
            }

        }

    
    }
    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

?>