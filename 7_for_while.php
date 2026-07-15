<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label for="">Enter the counter number</label><br>
        <input type="number" name="counter">
        <input type="submit" value="enter">
    </form> -->

    <form action="index.php" method="post">
        <!-- <label for="">stop</label> -->
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // $counter = $_POST["counter"];
    // for($i = 1 ; $i <= $counter ; $i++){
    //     echo $i . "<br>";
    // }


    // for ($i=1; $i <= 10; $i++) { 
    //     echo $i . "<br>";
    // }

    // while
    // $counter = 0 ; 

    // while($counter < 10 ){
    //     $counter ++ ; 
    //     echo $counter . "<br>";
    // }

    // $timer = 0 ; 
    // $condition = true;
    // while($condition){
    //     if(isset($_POST["stop"])){
    //         $condition = false;
    //     }else{
    //         $timer++;
    //         echo $timer . "<br>";
    //     }
    //     sleep(1);
    // }

    $counter = 0 ;
    $condition = true ; 
    while($condition){
        $counter ++ ; 
        echo $counter;
        sleep(1);

        }


?>