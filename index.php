<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ullam ut tempora nesciunt sapiente, quibusdam iste amet necessitatibus voluptatum quis et eligendi reiciendis earum odit veritatis ipsam neque quos nemo?</p>
        <input type="checkbox" name="term" value="term">I agree with the terms and conditions <br><br>
        <input type="submit" name="submit" value="Next"><br>
    </form>

    // predefined js code 

    <script src="index.js"></script>
    
</body>
</html>




<?php 

    if(isset($_POST["submit"])){
        if(isset($_POST["term"])){
            header("location: landing.php");
        }else{
           echo "You must agree with terms and condition to continue"; 
        }
    }
    
    
    
?>