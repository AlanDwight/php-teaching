<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">username:</label><br>
        <input type="text" name="username" ><br>
        <label for="">age</label><br>
        <input type="text" name="age" ><br>
        <label for="">email</label><br>
        <input type="text" name="email" ><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


<?php 

    if(isset($_POST["submit"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
        
        // validation 
        
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);  // if not valid return null
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        
        if(empty($age)){
            echo "not a valid number<br>";
        }else{
            echo "your age is {$age} <br>";
        }
        if(empty($email)){
            echo "not a valid email";
        }else{
            echo "your email is {$email}";
        }


        // $username = $_POST["username"];   
        // echo $username;
        // echo "<br>";
        // echo $age;
        // echo "<br>";
        // echo $email; 
    }

?>