<?php

// Product class
class Car {
    public $engine;
    public $wheels;
    public $seats;

    public function listParts(): string {
        return "Car with: " . implode(', ', array_filter([$this->engine, $this->wheels, $this->seats]));
    }
}

// Builder interface
interface CarBuilder {
    public function buildEngine();
    public function buildWheels();
    public function buildSeats();
    public function getCar(): Car;
}

// Concrete Builder
class SedanCarBuilder implements CarBuilder {
    private $car;

    public function __construct() {
        $this->car = new Car();
    }

    public function buildEngine() {
        $this->car->engine = "V6 Engine";
    }

    public function buildWheels() {
        $this->car->wheels = "Alloy Wheels";
    }

    public function buildSeats() {
        $this->car->seats = "Leather Seats";
    }

    public function getCar(): Car {
        return $this->car;
    }
}

// Director class
class CarDirector {
    private $builder;

    public function setBuilder(CarBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildFullFeaturedCar() {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
        $this->builder->buildSeats();
    }

    public function buildMinimalViableCar() {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
    }
}

// Client code
function clientCode(CarDirector $director) {
    $builder = new SedanCarBuilder();
    $director->setBuilder($builder);

    // Building a fully featured car
    $director->buildFullFeaturedCar();
    echo $builder->getCar()->listParts() . "\n";

    // Building a minimal car
    $director->buildMinimalViableCar();
    echo $builder->getCar()->listParts() . "\n";
}

// Usage example
$director = new CarDirector();
clientCode($director);
