<?php
    include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Welcome to WinBook</b><br>
    <b>Login page</b>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="login" value="Login"><br>
        Don't have an account yet? Register now! <a href="index.php">Register</a>
    </form>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];

        if(empty($username)){
            echo "username can't be empty<br>";
        }elseif(empty($password)){
            echo "password can't be empty<br>";
        }else{
                $db_username = null; 
                $db_password = null;
                $condition =  false ;
                $query_string = "SELECT * FROM users"; 
                try{
                    $result = mysqli_query($conn, $query_string);
                
                    if(mysqli_num_rows($result) > 0 ){
                    
                        while($row = mysqli_fetch_assoc($result)){
                                $db_username = $row["user_name"];
                                $db_password = $row["user_password"];
                                // echo $db_username ."  =====". $db_password . "<br>";
                                if($username == $db_username  && password_verify($password,$db_password)){
                                    header("location: landingPage.php");
                                    $condition = false;
                                }else{
                                    $condition = true;
                                }
                            }
                    if($condition){
                        echo "wrong username or password! try again!";
                    }
                    }
                }catch(mysqli_sql_exception){
                    echo "error query";
                }
            }

        }



    mysqli_close($conn);


?>