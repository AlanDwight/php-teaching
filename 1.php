<?php 

echo "hello_world<br>";
echo "hello win kyaw phyo<br>";
// hello this is comment 
/*
    this is multiline comment

*/

$name = "win kyaw phyo"; // string
$food = "moke hin khar";
$email = "winkyawphyo@gmail.com";

$age = 21; // integer whole number
$user = 2 ; 
$quantity = 3; 

$gpa = 3.7; // float 
$price = 4.99;
$tax_rate = 5.1;

$employed = true; // boolean 
$online = false; 
$for_sale = true;

// echo $name;
echo "Hello {$name}<br>";
echo "and i like {$food}<br>";
echo "your email is at {$email}<br>";

echo "my age is {$age}<br>";
echo "your gpa is {$gpa}<br>";
echo "your {$food} is \${$price}<br>";
echo "your sale tax rate is \${$tax_rate}<br>";

echo "Online status: {$online}";

$total = null;

echo "you have ordered {$quantity} x {$food}<br>";

$total = $price * $quantity;
echo "total is \${$total}";

$x = 10;
$y = 3; 
$z = 12; 

$r = $x + $y;
$r = $x - $y;
$r = $x * $y;
$r = $x / $y;
$r = $x ** $y;
$r = $x % $y;
echo "<br>total is {$r}";

$counter = 0; 
// $counter = $counter + 1;
// $counter ++ ;
// $counter ++ ;
// $counter -- ;
$counter += 2 ;


echo "<br>{$counter}"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>submit</button>
</body>
</html>