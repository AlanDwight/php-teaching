<?php
    // function myCallBack(int $n): int{
    //     return $n * $n; 
    // }


    // $someArray = array(1,2,3,4,5);
    
    
    // $result_array = array_map("myCallBack", $someArray);
    
    // foreach($result_array as $ra){
    //         echo $ra . " "; 
    //     }
        

    // $someArray = array(1,2,3,4,5);


    // $result_array = array_map(function ($n){return $n*$n;}, $someArray);

    // foreach($result_array as $ra){
    //         echo $ra . " "; 
    //     }



    function shouting(string $str): string{
        return $str . "!";
    }

    function questing(string $str): string{
        return $str . "?";
    }


    function printFormattedData(string $str, $format){
        echo $format($str);
    }


    printFormattedData("Hello", "questing");

?>