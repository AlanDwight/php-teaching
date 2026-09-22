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
    Login success
    <?php

        foreach($_SESSION as $key => $value){
            // echo "your username is {$key} <br>";
            // echo "your password is {$value} <br>";
        }
    
    ?>

    <a href="logout.php">Log out</a>
</body>
</html>