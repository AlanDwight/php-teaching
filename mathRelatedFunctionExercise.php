<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter the radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">

    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $area = pi() * pow($radius, 2);
    $circumf = 2 * pi() * $radius;
    $volume = (4/3) * pi() * pow($radius, 3);  

    $area = round($area,2);
    $circumf = round($circumf,2);
    $volume = round($volume,2);

    echo "the area of the circle is {$area}<br>";
    echo "the circumference of the circle is {$circumf}<br>";
    echo "the volume of the spehere is {$volume}<br>";
?>