<?php 
    echo "[1] celsius to fahrenheit\n[2] fahrenheit to celsius:\n\n\n";
    $user_input =readline("Enter your choice:"); 

    $char = '';

    if($user_input == "1"){
        $user_input2 = readline("Enter your value: ");
        $result = 9/5 * $user_input2 + 32;
        $char = '°F';
        
    }elseif($user_input == "2"){
        $user_input2 = readline("Enter your value: ");
        $result = ($user_input2 - 32)* (5/9);
        $char = '°C';
    }

    $result = (float)$result;
    $result = number_format($result, 2);

    echo "Your result is {$result}{$char}";

?>