
 
<?php


// ## Key Concepts Used

// * Class (class): The blueprint definition (Vehicle and ElectricCar).
// * Object (new): Individual instances created from a class blueprint ($myCar, $myEV).
// * Properties & Methods: Variables and functions tied strictly inside the boundaries of a class.
// * Encapsulation: Restricting direct data access via visibility keywords (public, protected, private).
// * Inheritance (extends): Reusing parent class properties and methods inside a child class to reduce redundant code strings.
// * Polymorphism: Modifying inherited method functionality locally via method overriding (startEngine()). [1, 2, 3, 4, 5, 6] 


// 1. Parent Class (Base Blueprint)
class Vehicle 
{
    // Properties with Visibility Modifiers
    // 'protected' allows child classes to access them, but blocks outside access
    protected string $brand;
    protected string $model;

    // Constructor to initialize properties automatically upon instantiation
    public function __construct(string $brand, string $model) 
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Public method (Getter) to access protected brand data safely
    public function getBrand(): string 
    {
        return $this->brand;
    }

    // Public method describing action
    public function startEngine(): string 
    {
        return "The engine of the {$this->brand} {$this->model} is now running.";
    }
}

// 2. Child Class (Inheritance)
// 'extends' copies properties and methods from the Vehicle class
class ElectricCar extends Vehicle 
{
    // Unique property belonging only to ElectricCar
    private int $batteryCapacity;

    // Child constructor overriding parent constructor
    public function __construct(string $brand, string $model, int $batteryCapacity) 
    {
        // Forward arguments to the parent Vehicle constructor
        parent::__construct($brand, $model);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Method Overriding: Modifies parent method behavior specifically for electric cars
    public function startEngine(): string 
    {
        return "The electric motor of the {$this->brand} {$this->model} hums silently.";
    }

    // Unique method belonging only to ElectricCar
    public function chargeBattery(): string 
    {
        return "Charging the {$this->batteryCapacity}kWh battery.";
    }
}

// ==========================================
// Execution / Instantiating Objects
// ==========================================

// Create a standard Vehicle instance
$myCar = new Vehicle("Toyota", "Corolla");
echo $myCar->startEngine() . "\n"; 
// Output: The engine of the Toyota Corolla is now running.

// Create an ElectricCar instance
$myEV = new ElectricCar("Tesla", "Model 3", 75);
echo $myEV->startEngine() . "\n"; 
// Output: The electric motor of the Tesla Model 3 hums silently.

echo $myEV->chargeBattery() . "\n"; 
// Output: Charging the 75kWh battery.

// Securely access property via public getter
echo "EV Brand: " . $myEV->getBrand() . "\n"; 
// Output: EV Brand: Tesla

?>
