<?php

// Subject interface
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

// Concrete Subject
class WeatherStation implements Subject {
    private $observers = [];
    private $temperature;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, function($o) use ($observer) {
            return $o !== $observer;
        });
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setTemperature($temperature) {
        $this->temperature = $temperature;
        $this->notify();
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

// Observer interface
interface Observer {
    public function update(Subject $subject);
}

// Concrete Observer
class NewsChannel implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(Subject $subject) {
        if ($subject instanceof WeatherStation) {
            echo $this->name . " reporting temperature: " . $subject->getTemperature() . "°C\n";
        }
    }
}

// Client code
function clientCode() {
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
