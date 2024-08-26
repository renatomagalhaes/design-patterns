<?php

// Abstract Expression
interface Expression {
    public function interpret(array $context): int;
}

// Terminal Expression for Numbers
class NumberExpression implements Expression {
    private int $number;

    public function __construct(int $number) {
        $this->number = $number;
    }

    public function interpret(array $context): int {
        return $this->number;
    }
}

// Terminal Expression for Addition
class AdditionExpression implements Expression {
    private Expression $leftExpression;
    private Expression $rightExpression;

    public function __construct(Expression $left, Expression $right) {
        $this->leftExpression = $left;
        $this->rightExpression = $right;
    }

    public function interpret(array $context): int {
        return $this->leftExpression->interpret($context) + $this->rightExpression->interpret($context);
    }
}

// Terminal Expression for Subtraction
class SubtractionExpression implements Expression {
    private Expression $leftExpression;
    private Expression $rightExpression;

    public function __construct(Expression $left, Expression $right) {
        $this->leftExpression = $left;
        $this->rightExpression = $right;
    }

    public function interpret(array $context): int {
        return $this->leftExpression->interpret($context) - $this->rightExpression->interpret($context);
    }
}

// Client code
function clientCode(): void {
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
