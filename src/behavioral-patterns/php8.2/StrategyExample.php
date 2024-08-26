<?php

// Strategy Interface
interface PriceStrategy {
    public function calculate(float $price): float;
}

// Concrete Strategy for standard pricing
class StandardPriceStrategy implements PriceStrategy {
    public function calculate(float $price): float {
        return $price;
    }
}

// Concrete Strategy for discount pricing
class DiscountPriceStrategy implements PriceStrategy {
    private float $discount;

    public function __construct(float $discount) {
        $this->discount = $discount;
    }

    public function calculate(float $price): float {
        return $price - ($price * $this->discount);
    }
}

// Context class
class Product {
    private float $price;
    private PriceStrategy $strategy;

    public function __construct(float $price, PriceStrategy $strategy) {
        $this->price = $price;
        $this->strategy = $strategy;
    }

    public function setStrategy(PriceStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function calculatePrice(): float {
        return $this->strategy->calculate($this->price);
    }
}

// Client code
function clientCode(): void {
    $product = new Product(100, new StandardPriceStrategy());
    echo "Standard Price: " . $product->calculatePrice() . "\n";

    $product->setStrategy(new DiscountPriceStrategy(0.2));
    echo "Discounted Price: " . $product->calculatePrice() . "\n";
}

// Usage example
clientCode();
