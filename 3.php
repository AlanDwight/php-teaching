<?php 

    // $input = "150dsafaf";

    // $result = filter_var($input, FILTER_VALIDATE_INT); // if true return value else return 0 || false;

    // echo $result;

    // Result: bool(false) -> Rejected because "abc" is invalid.







    // $input = "+-----150abc-----+++++";
    // $result = filter_var($input, FILTER_SANITIZE_NUMBER_INT);

    // echo $result;
    // Result: string(3) "150" -> "abc" was discarded.






    // $userInput = "hello my name is zin zin i am 31 years old. And i am from yangon"; // Dangerous input


    // // secure coding practice 

    // // Step 1: Sanitize (Strips letters, leaves symbols)
    // $dirtyInt = filter_var($userInput, FILTER_SANITIZE_NUMBER_INT); // Output: "+-123--"

    // // Step 2: Validate (Checks if the remaining string is a real integer)
    // $cleanInt = filter_var($dirtyInt, FILTER_VALIDATE_INT); 

    
    // if ($cleanInt === false) {
    //     // Handle error safely
    //     die("Invalid numeric data provided.");
    // }else{
    //         echo $cleanInt;
    //         echo "<br>";

    //         if (gettype($cleanInt) == "integer"){
    //             echo "Yes, user input is a valid integer";

    //             // mysql query syntax
    //             // use when we are communicating with sql database

    //             $query = "SELECT * FROM userDataTable WHERE user_age = {$cleanInt}";

    //         };
    // }



    // // email or gmail anatomy
    // // aungnaingmin@gmail.com

    // $email = " user@example.com "; // Note the spaces
    // $email = trim($email);
    // $result = filter_var($email, FILTER_VALIDATE_EMAIL);
    // echo $result;
    // // Result: bool(false) -> Failed due to spaces. Use trim() first.


    // $dirtyEmail = "john<script>@example.com";
    // $result = filter_var($dirtyEmail, FILTER_SANITIZE_EMAIL);
    // // Result: string(16) "johnscript@example.com" -> Harmful tags were removed.
    // // negation operator


    // $userInput = "<script> alert('hack') </script>"; // dirty input
    // $result = filter_var($userInput, FILTER_SANITIZE_SPECIAL_CHARS);

    // // convert to html entities 

    // echo $result;
    // Result: string(46) "&#60;script&#62;alert(&#39;hack&#39;)&#60;/script&#62;" 
    // Safe to echo out! The browser will print it as text rather than running the script.







    
    $rawInput = " <adm/in@mysite.com>  ";

    // Step 1: Clean basic whitespace
    $trimmed = trim($rawInput);

    // Step 2: Sanitize (Removes the angle brackets '<' and '>')
    $sanitizedEmail = filter_var($trimmed, FILTER_SANITIZE_EMAIL); // "admin@mysite.com"

    // Step 3: Validate (Ensures the remaining string is structurally a real email)
    $finalEmail = filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL);


    if ($finalEmail === false) {
        die("The provided email format is broken.");
    }
    
    // Step 4: Output safely to an HTML page later
    echo filter_var($finalEmail, FILTER_SANITIZE_SPECIAL_CHARS);



?>

