<?php 
    include("database.php");

    $username = "zin";
    $password = "zin123";

    $hash = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$hash')";
    
    // handle query error gracefully
    try{
        mysqli_query($conn, $sql); 
        echo "user now registered";

    }catch(mysqli_sql_exception){
        echo"<br>error query to database<br>"; 
    }


    mysqli_close($conn); // error it's okay

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
    <?php echo"hello";?>
</body>
</html>


