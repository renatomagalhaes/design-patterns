<?php

// State Interface
interface OrderState {
    public function proceedToNext(OrderContext $context): void;
    public function toString(): string;
}

// Concrete States
class NewOrderState implements OrderState {
    public function proceedToNext(OrderContext $context): void {
        $context->setState(new ProcessingOrderState());
    }

    public function toString(): string {
        return "Order is in New state.";
    }
}

class ProcessingOrderState implements OrderState {
    public function proceedToNext(OrderContext $context): void {
        $context->setState(new ShippedOrderState());
    }

    public function toString(): string {
        return "Order is in Processing state.";
    }
}

class ShippedOrderState implements OrderState {
    public function proceedToNext(OrderContext $context): void {
        $context->setState(new DeliveredOrderState());
    }

    public function toString(): string {
        return "Order is in Shipped state.";
    }
}

class DeliveredOrderState implements OrderState {
    public function proceedToNext(OrderContext $context): void {
        echo "Order is already delivered.\n";
    }

    public function toString(): string {
        return "Order is in Delivered state.";
    }
}

// Context class
class OrderContext {
    private OrderState $state;

    public function __construct() {
        $this->state = new NewOrderState();
    }

    public function setState(OrderState $state): void {
        $this->state = $state;
    }

    public function proceedToNext(): void {
        $this->state->proceedToNext($this);
    }

    public function __toString(): string {
        return $this->state->toString();
    }
}

// Client code
function clientCode(): void {
    $order = new OrderContext();

    echo $order . "\n";

    $order->proceedToNext();
    echo $order . "\n";

    $order->proceedToNext();
    echo $order . "\n";

    $order->proceedToNext();
    echo $order . "\n";

    $order->proceedToNext(); // Should indicate the order is already delivered
}

// Usage example
clientCode();
