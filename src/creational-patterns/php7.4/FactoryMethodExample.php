<?php

// Interface for Transport
interface Transport {
    public function deliver();
}

// Concrete class: Truck
class Truck implements Transport {
    public function deliver() {
        return "Delivered by truck";
    }
}

// Concrete class: Ship
class Ship implements Transport {
    public function deliver() {
        return "Delivered by ship";
    }
}

// Abstract class for Logistics
abstract class Logistics {
    // Factory Method
    abstract public function createTransport();

    // Planning the delivery process
    public function planDelivery() {
        $transport = $this->createTransport();
        return $transport->deliver();
    }
}

// Concrete class for road logistics
class RoadLogistics extends Logistics {
    public function createTransport() {
        return new Truck();
    }
}

// Concrete class for sea logistics
class SeaLogistics extends Logistics {
    public function createTransport() {
        return new Ship();
    }
}

// Client code
function clientCode(Logistics $logistics) {
    echo $logistics->planDelivery();
}

// Usage examples
clientCode(new RoadLogistics()); // Output: "Delivered by truck"
clientCode(new SeaLogistics());  // Output: "Delivered by ship"
