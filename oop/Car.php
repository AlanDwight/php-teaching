<?php 

class Car{
    public string $make;
    public int $model;
    public float $engine;
    static int $count = 0 ;
    // a type declaration with a nullable modifier
    private static ?string $propertyData = null; 

    public function __construct(string $make, int $model, float $engine)
    {
        $this->make = $make; 
        $this->model = $model; 
        $this->engine = $engine;
        self::$count++ ;
    }

    static function utilityClass(): void {
        echo "this is utility class";
    }

    public function start() : void {
        $engine = number_format($this->engine, 1 );
        printf("{$this->make} start {$engine} engine");
    }

    public function __destruct()
    {
        echo  "\n" . $this->make . " is " . $this->model . "\n";
    }
}


    $car1 = new Car("Toyota", 1999, 2.0);
    $car2 = new Car("Toyota", 1999, 2.0);
    $car3 = new Car("Toyota", 1999, 2.0);
    $car1->start();
    Car::utilityClass();
    echo "\n" . Car::$count;


?>