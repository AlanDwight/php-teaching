<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <input type="checkbox" name="apple" value = "Apple">Apple <br>
        <input type="checkbox" name="orange" value = "Orange">Orange <br>
        <input type="checkbox" name="banana" value = "Banana">Banana <br>
        <input type="checkbox" name="peach" value = "Peach">Peach <br>
        <input type="submit" name="submit" value="Submit">
    </form> -->
    <form action="index.php" method="POST">
        <input type="checkbox" name="fruits[]" value = "Apple">Apple <br>
        <input type="checkbox" name="fruits[]" value = "Orange">Orange <br>
        <input type="checkbox" name="fruits[]" value = "Banana">Banana <br>
        <input type="checkbox" name="fruits[]" value = "Peach">Peach <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php 

    // if(isset($_POST["submit"])){
    //     if(isset($_POST["apple"])){
    //         echo "You like apple <br>"; 
    //     }
    //     if(isset($_POST["orange"])){
    //         echo "You like orange <br>"; 
    //     }
    //     if(isset($_POST["banana"])){
    //         echo "You like banana <br>"; 
    //     }
    //     if(isset($_POST["peach"])){
    //         echo "You like peach <br>"; 
    //     }
    //     if(empty($_POST["apple"])){
    //         echo "You DON't like apple <br>"; 
    //     }
    //     if(empty($_POST["orange"])){
    //         echo "You DON't like orange <br>"; 
    //     }
    //     if(empty($_POST["banana"])){
    //         echo "You DON't like banana <br>"; 
    //     }
    //     if(empty($_POST["peach"])){
    //         echo "You DON't like peach <br>"; 
    //     }


    // }

    if(isset($_POST["submit"])){
        $count = 1 ; 
        $fruits = $_POST["fruits"]; 
        foreach($fruits as $fruit){ 
            echo $count . "." . $fruit . "<br>";
            $count++;
            }
    }


?>