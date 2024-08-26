<?php

// Command Interface
interface Command {
    public function execute();
}

// Receiver class
class Light {
    public function on() {
        echo "The light is on\n";
    }

    public function off() {
        echo "The light is off\n";
    }
}

// Concrete Command for turning the light on
class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}

// Concrete Command for turning the light off
class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->off();
    }
}

// Invoker class
class RemoteControl {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function pressButton() {
        $this->command->execute();
    }
}

// Client code
function clientCode() {
    $light = new Light();
    $lightOn = new LightOnCommand($light);
    $lightOff = new LightOffCommand($light);

    $remote = new RemoteControl();
    $remote->setCommand($lightOn);
    $remote->pressButton();

    $remote->setCommand($lightOff);
    $remote->pressButton();
}

// Usage example
clientCode();
