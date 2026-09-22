<?php 

    include("Shape.php");
    include("Shape2.php");

    class Rectangular implements Shape, Shape2{

        private float $length;

        public function __construct(float $length)
        {
            $this->length = $length;
        }

        #[Override]
        public function calculateArea(): float
        {
            return $this->length * 2 ;  
        }

        #[Override]
        public function parameter(): float
        {
            return $this->length * 4;
        }
    }

    $r  = new Rectangular(4.31123);
    $area = $r->calculateArea();
    $paramter = $r->parameter();
    echo $area; 
    echo "\n";
    echo $paramter; 


?>