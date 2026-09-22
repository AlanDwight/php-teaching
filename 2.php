<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <!-- wrapping  -->
        <input type="checkbox" name="fruits[]" value="apple">Apple <br>
        <input type="checkbox" name="fruits[]" value="orange">Orange <br>
        <input type="checkbox" name="fruits[]" value="pineapple">Pineapple <br>
        <input type="checkbox" name="fruits[]" value="mango">Mango <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php 

// all the php codes execute here
// $_POST  $_POST php super global variable 


    
    // if(isset($_POST["submit"])){
    //     if(isset($_POST["apple"])){
    //         echo "You like apple <br>";
    //     }

    //     if(isset($_POST["orange"])){
    //         echo "You like orange <br>";
    //     }

    //     if(isset($_POST["pineapple"])){
    //         echo "You like pineapple <br>";
    //     }

    //     if(isset($_POST["mango"])){
    //         echo "You like mango <br>";
    //     }
    // }


    if(isset($_POST["submit"])){
        if(isset($_POST["fruits"])){

            $fruits = $_POST["fruits"];
            foreach($fruits as $fruit){
                echo "You like " . $fruit . "<br>";
            }
        }else{
           echo "You must select at least one fruit"; 
        }
    }
    
    
    
?>




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