<?php

// State Interface
interface OrderState {
    public function proceedToNext(OrderContext $context);
    public function toString();
}

// Concrete States
class NewOrderState implements OrderState {
    public function proceedToNext(OrderContext $context) {
        $context->setState(new ProcessingOrderState());
    }

    public function toString() {
        return "Order is in New state.";
    }
}

class ProcessingOrderState implements OrderState {
    public function proceedToNext(OrderContext $context) {
        $context->setState(new ShippedOrderState());
    }

    public function toString() {
        return "Order is in Processing state.";
    }
}

class ShippedOrderState implements OrderState {
    public function proceedToNext(OrderContext $context) {
        $context->setState(new DeliveredOrderState());
    }

    public function toString() {
        return "Order is in Shipped state.";
    }
}

class DeliveredOrderState implements OrderState {
    public function proceedToNext(OrderContext $context) {
        echo "Order is already delivered.";
    }

    public function toString() {
        return "Order is in Delivered state.";
    }
}

// Context class
class OrderContext {
    private $state;

    public function __construct() {
        $this->state = new NewOrderState();
    }

    public function setState(OrderState $state) {
        $this->state = $state;
    }

    public function proceedToNext() {
        $this->state->proceedToNext($this);
    }

    public function __toString() {
        return $this->state->toString();
    }
}

// Client code
function clientCode() {
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
