<?php

    // basic calculator 

    
    $first_number = readline("Enter your first number: ");
    $second_number = readline("Enter your second number: ");
    
    function addTwoNumbers(int $a, int $b): int{
        return $a+$b;
    }

    echo "Your result is : " . addTwoNumbers($first_number, $second_number) ; 

?>
