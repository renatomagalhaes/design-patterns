<?php

// Subsystem 1
class DvdPlayer {
    public function on(): void {
        echo "DVD Player on\n";
    }

    public function play(string $movie): void {
        echo "Playing movie: " . $movie . "\n";
    }
}

// Subsystem 2
class Projector {
    public function on(): void {
        echo "Projector on\n";
    }

    public function setInput(string $input): void {
        echo "Setting input: " . $input . "\n";
    }
}

// Subsystem 3
class Lights {
    public function dim(int $level): void {
        echo "Lights dimmed to " . $level . "%\n";
    }
}

// Facade
class HomeTheaterFacade {
    protected DvdPlayer $dvd;
    protected Projector $projector;
    protected Lights $lights;

    public function __construct(DvdPlayer $dvd, Projector $projector, Lights $lights) {
        $this->dvd = $dvd;
        $this->projector = $projector;
        $this->lights = $lights;
    }

    public function watchMovie(string $movie): void {
        echo "Get ready to watch a movie...\n";
        $this->lights->dim(10);
        $this->projector->on();
        $this->projector->setInput("DVD");
        $this->dvd->on();
        $this->dvd->play($movie);
    }
}

// Client code
function clientCode(HomeTheaterFacade $homeTheater): void {
    $homeTheater->watchMovie("Inception");
}

// Usage example
$dvd = new DvdPlayer();
$projector = new Projector();
$lights = new Lights();
$homeTheater = new HomeTheaterFacade($dvd, $projector, $lights);
clientCode($homeTheater);
