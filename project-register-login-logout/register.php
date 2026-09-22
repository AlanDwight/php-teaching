<?php include("database_conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>
        <div>Welcome to my winBook</div>
    </b>
    <br>
    <div>Register your account</div>
    <br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username"><br>
        
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" name="register" value="Register"><br>

        Already have an account? <a href="login.php">Login</a>

    </form>
</body>
</html>


<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"];

        if(empty($username)){
            echo "Enter your username please <br>";
        }elseif(empty($password)){
            echo "Enter your password please <br>";
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO customers (name, password) VALUES ('$username', '$hash')";
            
            try{
                mysqli_query($conn, $sql);
            }catch(mysqli_sql_exception){
                echo "Failed to register the user!";
            }finally{
                mysqli_close($conn);
            }
        }



    }



?>