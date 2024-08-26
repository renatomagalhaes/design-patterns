<?php

// Subsystem 1
class DvdPlayer {
    public function on() {
        echo "DVD Player on\n";
    }

    public function play($movie) {
        echo "Playing movie: " . $movie . "\n";
    }
}

// Subsystem 2
class Projector {
    public function on() {
        echo "Projector on\n";
    }

    public function setInput($input) {
        echo "Setting input: " . $input . "\n";
    }
}

// Subsystem 3
class Lights {
    public function dim($level) {
        echo "Lights dimmed to " . $level . "%\n";
    }
}

// Facade
class HomeTheaterFacade {
    protected $dvd;
    protected $projector;
    protected $lights;

    public function __construct(DvdPlayer $dvd, Projector $projector, Lights $lights) {
        $this->dvd = $dvd;
        $this->projector = $projector;
        $this->lights = $lights;
    }

    public function watchMovie($movie) {
        echo "Get ready to watch a movie...\n";
        $this->lights->dim(10);
        $this->projector->on();
        $this->projector->setInput("DVD");
        $this->dvd->on();
        $this->dvd->play($movie);
    }
}

// Client code
function clientCode(HomeTheaterFacade $homeTheater) {
    $homeTheater->watchMovie("Inception");
}

// Usage example
$dvd = new DvdPlayer();
$projector = new Projector();
$lights = new Lights();
$homeTheater = new HomeTheaterFacade($dvd, $projector, $lights);
clientCode($homeTheater);
