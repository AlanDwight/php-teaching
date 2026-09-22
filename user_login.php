<?php 
    session_start();
?>

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
        // hardcoded username and password 
        $user_name = "admin";
        $user_password="password"; 
        
        // echo "<br>";
        // echo $_SERVER['PHP_SELF'];
        // echo "<br>";
        // echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        // echo "<br>";
        // echo $_SERVER["REQUEST_METHOD"];

        // if(isset($_POST["login"])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST["username"]) && !empty($_POST["password"])){
                $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
                $_SESSION["password"] = $_POST["password"];

                if($_SESSION["username"] == $user_name && $_SESSION["password"] == $user_password){
                    echo $_SESSION["username"] . "<br>" . $_SESSION["password"];
                    header("location: success.php"); // redirect function
                }else{
                    echo "<br>invalid username or password<br>";
                }
            }else{
                echo "empty username or password field";
            }
    }


    // $_SESSION["username"] ="winkaywphyo";
    // $_SESSION["password"] = "pass123";
    // echo "<br>"; 
    // echo $_SESSION["username"];
    // echo "<br>"; 
    // echo $_SESSION["password"]; 
    // echo "<br>"; 
?>