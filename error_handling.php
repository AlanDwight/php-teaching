<?php 

    function divide(int $dividend, int $divisor): float{
        
        if($divisor == 0 ){
            throw new InvalidArgumentException(""); // annoymous object instantiation
        } 
    
        return $dividend / $divisor;
    }


    try{
        $result = divide(10,2);
        echo "the result is {$result}";
    }catch(InvalidArgumentException $e){   // specific error
        echo "Input Error: " . $e->getMessage(); // method of a class 
    }catch(Throwable $e){   // general error
        echo "General Error: " . $e->getMessage(); 
    }finally{
        echo "\nalways execute at the end";
    }



    // if(){

    // }else if(){

    // }else{

    // }

?>