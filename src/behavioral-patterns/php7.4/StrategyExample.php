<?php

// Strategy Interface
interface PriceStrategy {
    public function calculate($price);
}

// Concrete Strategy for standard pricing
class StandardPriceStrategy implements PriceStrategy {
    public function calculate($price) {
        return $price;
    }
}

// Concrete Strategy for discount pricing
class DiscountPriceStrategy implements PriceStrategy {
    private $discount;

    public function __construct($discount) {
        $this->discount = $discount;
    }

    public function calculate($price) {
        return $price - ($price * $this->discount);
    }
}

// Context class
class Product {
    private $price;
    private $strategy;

    public function __construct($price, PriceStrategy $strategy) {
        $this->price = $price;
        $this->strategy = $strategy;
    }

    public function setStrategy(PriceStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function calculatePrice() {
        return $this->strategy->calculate($this->price);
    }
}

// Client code
function clientCode() {
    $product = new Product(100, new StandardPriceStrategy());
    echo "Standard Price: " . $product->calculatePrice() . "\n";

    $product->setStrategy(new DiscountPriceStrategy(0.2));
    echo "Discounted Price: " . $product->calculatePrice() . "\n";
}

// Usage example
clientCode();
