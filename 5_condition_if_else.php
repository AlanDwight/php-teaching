<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="hour">Enter you work hour: </label><br>
        <input type="number" name="hour" id="hour" placeholder="0" value="0"><br>
        <label for="rate">Enter your hourly rate in usd</label><br>
        <input type="number" name="rate" id="rate" placeholder="0" value="0"><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php 

    // $age = 15 ;

    // if($age >= 100){
    //     echo "you are too old";
    // }elseif($age <=0){
    //     echo "not a valid age";
    // }elseif($age >=18){
    //     echo "you are over 18";
    // }
    // else{
    //     echo "you are under 18";
    // }
    // echo"<br>";
    // $condition = true;
    
    // if($condition || $age > 18){
    //     echo "it is true";
    //     }
    //     echo"<br>";
    // if($condition && $age < 18){
    //     echo "it is not true";
    // }


    $hours = $_POST["hour"]; 
    $rate = $_POST["rate"];
    $weekly_pay = null; 

    if(($hours < 0 && $rate == 0) || ($hours ==0 && $rate <0)){
        echo "You can't enter negative value";
    }elseif($hours == 0 || $rate == 0 ){ 
        echo "You earn nothing this week";
    }elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
        echo "your weekly pay is \${$weekly_pay}";
    }elseif($hours > 40){
        $weekly_pay = (40 * $rate) + (($hours - 40) * ($rate * 1.5)); 
        echo "your weekly pay plus overtime is \${$weekly_pay}";
    }

?>