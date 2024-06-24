<?php
// Define a class
class Car {
    // Properties (attributes)
    public $brand;
    public $model;
    public $color;
    
    // Constructor method
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    
    // Method to display car details
    public function displayDetails() {
        echo "Brand: {$this->brand}, Model: {$this->model}, Color: {$this->color}<br>";
    }
}

// Create objects (instances) of the Car class
$car1 = new Car("Toyota", "Camry", "Blue");
$car2 = new Car("Honda", "Accord", "Red");

// Call the method to display car details
$car1->displayDetails();
$car2->displayDetails();
?>
