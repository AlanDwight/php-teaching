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
    <b>Register to WinBook</b>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="register" value="register"><br>
        Already have an account? <a href="loginNow.php">login</a>
    </form>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        $username =  filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["password"]; 
        if(empty($username)){
            echo "Enter username<br>";
        }elseif(empty($password)){
            echo "Enter password<br>";
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
    
            $sql_query_string = "INSERT INTO users (user_name, user_password) VALUES ('$username', '$hash')";
            try{
                mysqli_query($conn, $sql_query_string);
            }catch(mysqli_sql_exception){
                echo "error query";
            }
        }
    }

    // $query_string = "SELECT * FROM users"; 
    // try{
    //     $result = mysqli_query($conn, $query_string);
    
    //     if(mysqli_num_rows($result) > 0 ){
    //         while (mysqli_fetch_assoc($result)){
    //             $row = mysqli_fetch_assoc($result); 
    //             echo $row['id'] . "<br>";
    //             echo $row['user_name'] . "<br>";
    //             echo $row['user_password'] . "<br>";
    //         }
    //     }
    // }catch(mysqli_sql_exception){
    //     echo "error query";
    // }


    mysqli_close($conn);


?>