<?php

// Product class
class Car {
    public string $engine;
    public string $wheels;
    public ?string $seats;

    public function listParts(): string {
        return "Car with: " . implode(', ', array_filter([$this->engine, $this->wheels, $this->seats]));
    }
}

// Builder interface
interface CarBuilder {
    public function buildEngine(): void;
    public function buildWheels(): void;
    public function buildSeats(): void;
    public function getCar(): Car;
}

// Concrete Builder
class SedanCarBuilder implements CarBuilder {
    private Car $car;

    public function __construct() {
        $this->car = new Car();
    }

    public function buildEngine(): void {
        $this->car->engine = "V6 Engine";
    }

    public function buildWheels(): void {
        $this->car->wheels = "Alloy Wheels";
    }

    public function buildSeats(): void {
        $this->car->seats = "Leather Seats";
    }

    public function getCar(): Car {
        return $this->car;
    }
}

// Director class
class CarDirector {
    private CarBuilder $builder;

    public function setBuilder(CarBuilder $builder): void {
        $this->builder = $builder;
    }

    public function buildFullFeaturedCar(): void {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
        $this->builder->buildSeats();
    }

    public function buildMinimalViableCar(): void {
        $this->builder->buildEngine();
        $this->builder->buildWheels();
    }
}

// Client code
function clientCode(CarDirector $director): void {
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
