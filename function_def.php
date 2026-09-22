<?php


    // function definition

    // function functionName(type $parameter1, type $parameter2 = defaultValue): returnType {
    // // Function body
    // return $value;
    // }


    function greetUser(string $name): string {
        return "Hello, " . ucfirst($name) . "!";
    }

    echo greetUser("alex"); // Outputs: Hello, Alex!


    // function: defined parameters, parameters with default values and return types and function invokation
    // overwriting default function parameter values 

    function calculateTotal(float $price, int $quantity = 1, float $taxRate = 0.08): float {
        $subtotal = $price * $quantity;
        return $subtotal + ($subtotal * $taxRate);
    }

    echo calculateTotal(25.00);          // Uses default quantity (1) and taxRate (0.08)
    echo calculateTotal(25.00, 3, 0.10); // Overrides defaults



    // php strict type 

    // declare(strict_types=1);

    function formatInput(int|string $value): string {
        return "Input value: " . (string)$value;
    }



    // annoymous function definition 
    // accessing outer variable with use() // pass by value 
    // use(&$discount) to pass by ref to manipulate outer variable 

    $discount = 10;
    $num2 = 123;

    // Accessing outer variable via 'use'
    $applyDiscount = function (float $price) use ($discount): float {
        $tax = 2.5;
        return ($price - $discount) + $tax ;
    };

    function taxCalculator(float $price, float $discount=0, float $tax=2.5 ): float{
        return ($price - $discount) + $tax ;
    }
    echo "\n";
    echo " tax is " . taxCalculator(100, 10);
    echo "\n";
  
    echo $applyDiscount(100.0); // Outputs: 92.5


    // arrow function 

    // $applyDiscountArrowFunction = fn(float $price): float => $price - $discount;

    // echo "arrow function result is : " . $applyDiscountArrowFunction(100.0);

    // Practical Callback Comparison
    // Arrow functions are ideal for array manipulation methods
    //  like array_map(), array_filter(), and array_reduce().

    // array_map(callback_function_on_each_entry, input_array) : return array

    $prices = [10.0, 25.0, 50.0];

    $taxRate = 0.10;

    // Standard Anonymous Function
    $totalStandard = array_map(function ($price) use ($taxRate) {
        return $price + ($price * $taxRate);
    }, $prices);

    echo $totalStandard($prices); 
    
    // Arrow Function Shorthand
    $totalArrow = array_map(fn($price) => $price + ($price * $taxRate), $prices);

    // Output for both: [11.0, 27.5, 55.0]



    // pass by value and pass by reference 

    // Pass-by-Value
    function addTaxByValue(float $price, float $tax): void {
        $price += $price * $tax;
    }

    // Pass-by-Reference
    function addTaxByReference(float &$price, float $tax): void {
        $price += $price * $tax;
    }

    $itemPrice = 100.0;

    addTaxByValue($itemPrice, 0.10);
    echo $itemPrice; // Outputs: 100 (Original variable remains unchanged)

    addTaxByReference($itemPrice, 0.10);
    echo $itemPrice; // Outputs: 110 (Original variable updated in-place)




    // PHP 8+ Strict Typing & Union Types

    // declare(strict_types=1); // Enables strict type enforcement for this file

    // Union Type: $input must be strictly an int OR a float

    // | pipe symbol
    
    function calculateTax(int|float $input): float|string {
        if ($input < 0) {
            return "Invalid amount"; // Allowed: string return
        }
        return $input * 0.20; // Allowed: float return
    }

    echo calculateTax(100);     // 20 (int matches union)
    echo calculateTax(10.50);   // 2.1 (float matches union)
    // echo calculateTax("100"); // Throws TypeError because strict mode disables string coercion

?>