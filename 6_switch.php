<?php
// $date= date("l");
// echo "{$date}";

$grade = "A";

switch(strtoupper($grade)){
    case "A":
        echo "grade A";
        break;
    case "B":
        echo "grade B";
        break;
    case "C":
        echo "grade C";
        break;
    default:
        echo "error";
        break; 

}

?>