<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter your country name</label><br>
        <input type="text" name="country"><br>
        <input type="submit" value="Search Capital"><br>
    </form>
</body>
</html>

<?php

// array 

// $someArray = array("one", "two", "three", "four");
// $someArray[0] = "ten"; 
// array_push($someArray, "five", 'six');
// array_pop($someArray);
// array_shift($someArray); 
// $new = array_reverse($someArray);
// echo count($someArray);


// echo $someArray[0] . "<br>";
// echo $someArray[1] . "<br>";
// echo $someArray[2] . "<br>";
// echo $someArray[3] . "<br>";

// foreach($new as $num){
//     echo $num . "<br>";
// }

// associative array

$assoArray_example = array("usa"=>"DC", "myanmar" => "yangon", "thailand" => "bangkok", "japan" => "tokyo");
// echo $assoArray_example["USA"] . "<br>";

$assoArray_example["myanmar"] = "nay pyi taw";

$assoArray_example["china"] = "bejin";

// array_pop($assoArray_example); 
// array_shift($assoArray_example);
// $keys = array_keys($assoArray_example);
// $values = array_values($assoArray_example);
// echo $keys[0];
// echo $values[0];

// $flip_array = array_flip($assoArray_example);
// echo $flip_array["DC"];

// $assoArray_example =array_reverse($assoArray_example); 

// echo count($assoArray_example);

// foreach($assoArray_example as $key => $value){
//     echo "the capital of {$key} is {$value} <br>";
// }

    $country_name = $_POST["country"];
    echo "The capital of {$country_name} is {$assoArray_example[$country_name]}";

?>