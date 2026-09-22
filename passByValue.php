<?php 

//     $number = 123; 

//     // pass by the value 
//     function incrementByOneVal(int $data) : int{
//         $data++; 
//         return $data ;
//     }

//     // pass by the reference
//     function incrementByOneRef(int &$data) : int{
//         $data++; 
//         return $data ;
//     }

//     // $returnData = incrementByOneVal($number);
//     $returnData = incrementByOneRef($number);

//     echo "return data is : " . $returnData . "\n";
//     echo "original data is : " . $number . "\n";

//  // & addressof operator
//  // * dereferencing operator



// arrow function 
    // $discount = 10; 
    // $applyDiscountArrowFunction = fn(float $price): float => $price - $discount;

    // echo "arrow function result is : " . $applyDiscountArrowFunction(100.0);
    // echo "\n original variable is : " . $discount; 



    // $prices = [10.0, 25.0, 50.0];

    // $taxRate = 0.10;

    // // Standard Anonymous Function

    // $totalStandard = array_map(function ($price) use ($taxRate) {
    //     return $price + ($price * $taxRate);
    // }, $prices);

    // foreach($totalStandard as $data){
    //     echo $data . ","; 
    // } 
    // echo $totalStandard[0] . "\n";
    // echo $totalStandard[1] . "\n";
    // echo $totalStandard[2] . "\n";

    $num1 = 1; 
    $num2 = 2;
    $num3 = 2;

    function sumOfTwoVariable(int $x , int $y, int $z ){
        $result = (((($x  * $y)/ pow($z,$x)) % $z) * ((($x  * $y)/ pow($z,$x)) % $z)) / 2  ; 
        return $result;
    }


    echo sumOfTwoVariable($num1, $num2, $num3);
?>