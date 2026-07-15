<?php 
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    body{
        /* background-color: red; */
    }

</style>
<body>
    <form action="test.php" method="POST">
        <label for="username" >Username: </label>
        <br>
        <input type="text" name="username" id="username" placeholder="Enter your username">
        <br>
        <label for="password">Password: </label>
        <br>
        <input type="password" name="password" id="password" placeholder="Enter your secret">
        <br>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
<!-- <script>alert("hello");</script> -->
</html>

<?php 

    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $secret = $_POST["password"];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $secret; 

        if(empty($username)){
            echo "Enter your username";
        }elseif(empty($secret)){
            echo "Enter your password";
        }else{
            
            $stored_pass = "password";
            $hash = password_hash($secret, PASSWORD_DEFAULT);
            if(password_verify($stored_pass, $hash)){
                echo "success" . "<br>";
                echo $_SESSION["username"] . "<br>";
                echo $_SESSION["password"];
                // header("location: home.php");    
                }else{
                    echo "fail";
            }
        
            // echo $username . " " . $hash ;
            
            }

    }
?>