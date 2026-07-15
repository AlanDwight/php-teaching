<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="radio" name="credit_card" value="visa">Visa <br>
        <input type="radio" name="credit_card" value="master">Master <br>
        <input type="radio" name="credit_card" value="mpu">MPU <br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["confirm"])){
        if(empty($_POST["credit_card"])){
            echo "Choose you payment";
        }else{
            $credit_card = $_POST["credit_card"];
            switch($credit_card){
                case "visa":
                    echo "You choose visa card";
                    break; 
                case "master":
                    echo "You choose master card";
                    break; 
                case "mpu":
                    echo "You choose myanmar payment union";
                    break;
                default:
                    echo "error";
                    break;
                
            }
        }
    }