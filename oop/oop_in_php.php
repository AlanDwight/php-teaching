<?php 
class Employee {
    // Properties
    public string $name;
    public float $salary;

    // Constructor
    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Method
    public function getDetails(): string {
        return "{$this->name} earns $" . number_format($this->salary, 2);
    }
}








// Creating object instances
$emp1 = new Employee("Alice", 75000);
echo $emp1->getDetails(); // Alice earns $75,000.00



class BankAccount {
    private float $balance = 0.0;

    public function deposit(float $amount): void {
        if ($amount > 0) $this->balance += $amount;
    }

    public function getBalance(): float {
        return $this->balance;
    }
}








class Manager extends Employee {
    public string $department;

    public function __construct(string $name, float $salary, string $department) {
        parent::__construct($name, $salary); // Call parent constructor
        $this->department = $department;
    }
}









interface PaymentProcessor {
    public function processPayment(float $amount): bool;
}

class StripeProcessor implements PaymentProcessor {
    public function processPayment(float $amount): bool {
        // Stripe integration logic
        return true;
    }
}









class User {
    public function __construct(
        public string $username,
        private string $email
    ) {}
}

?>