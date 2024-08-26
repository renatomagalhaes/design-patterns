<?php

// Abstract Expression
interface Expression {
    public function interpret(array $context);
}

// Terminal Expression for Numbers
class NumberExpression implements Expression {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function interpret(array $context) {
        return $this->number;
    }
}

// Terminal Expression for Addition
class AdditionExpression implements Expression {
    private $leftExpression;
    private $rightExpression;

    public function __construct(Expression $left, Expression $right) {
        $this->leftExpression = $left;
        $this->rightExpression = $right;
    }

    public function interpret(array $context) {
        return $this->leftExpression->interpret($context) + $this->rightExpression->interpret($context);
    }
}

// Terminal Expression for Subtraction
class SubtractionExpression implements Expression {
    private $leftExpression;
    private $rightExpression;

    public function __construct(Expression $left, Expression $right) {
        $this->leftExpression = $left;
        $this->rightExpression = $right;
    }

    public function interpret(array $context) {
        return $this->leftExpression->interpret($context) - $this->rightExpression->interpret($context);
    }
}

// Client code
function clientCode() {
    // (5 + 10) - 7
    $expression = new SubtractionExpression(
        new AdditionExpression(
            new NumberExpression(5),
            new NumberExpression(10)
        ),
        new NumberExpression(7)
    );

    echo "Result: " . $expression->interpret([]) . "\n"; // Output: 8
}

// Usage example
clientCode();
