<?php

// Subject interface
interface Subject {
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}

// Concrete Subject
class WeatherStation implements Subject {
    private array $observers = [];
    private float $temperature;

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setTemperature(float $temperature): void {
        $this->temperature = $temperature;
        $this->notify();
    }

    public function getTemperature(): float {
        return $this->temperature;
    }
}

// Observer interface
interface Observer {
    public function update(Subject $subject): void;
}

// Concrete Observer
class NewsChannel implements Observer {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(Subject $subject): void {
        if ($subject instanceof WeatherStation) {
            echo $this->name . " reporting temperature: " . $subject->getTemperature() . "°C\n";
        }
    }
}

// Client code
function clientCode(): void {
    $weatherStation = new WeatherStation();

    $channel1 = new NewsChannel("Channel 1");
    $channel2 = new NewsChannel("Channel 2");

    $weatherStation->attach($channel1);
    $weatherStation->attach($channel2);

    $weatherStation->setTemperature(25);
    $weatherStation->setTemperature(30);

    $weatherStation->detach($channel1);

    $weatherStation->setTemperature(28);
}

// Usage example
clientCode();
