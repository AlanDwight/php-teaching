<?php include("database_conn.php");?>

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
    <div>Login to your account</div>
    <br>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username"><br>
        
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" name="login" value="Login"><br>
        
        Register your account? <a href="register.php">Login</a>

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
            $db_username = null; 
            $db_password = null; 
            $condition = false; 
            $sql = "SELECT * FROM customers";

            try{
                $resp = mysqli_query($conn, $sql);
                
                if(mysqli_num_rows($resp) > 0 ){
                    while($row = mysqli_fetch_assoc($resp)){
                        $db_username = $row["name"];
                        $db_password = $row["password"];

                        if($username == $db_username && password_verify($password,$db_password)){
                            header("location: home_page.php");
                            $condition = false; 
                        }else{
                            $condition = true;
                        }
                    }
                    if($condition){
                        echo "wrong username or password! try again";
                    }

                }
                

            }catch(mysqli_sql_exception $e){
                echo "sothing went wrong";
            }finally{
                mysqli_close($conn);
            }

        }
    }



?>