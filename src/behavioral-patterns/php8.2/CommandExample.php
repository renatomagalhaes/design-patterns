<?php

// Command Interface
interface Command {
    public function execute(): void;
}

// Receiver class
class Light {
    public function on(): void {
        echo "The light is on\n";
    }

    public function off(): void {
        echo "The light is off\n";
    }
}

// Concrete Command for turning the light on
class LightOnCommand implements Command {
    private Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void {
        $this->light->on();
    }
}

// Concrete Command for turning the light off
class LightOffCommand implements Command {
    private Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void {
        $this->light->off();
    }
}

// Invoker class
class RemoteControl {
    private Command $command;

    public function setCommand(Command $command): void {
        $this->command = $command;
    }

    public function pressButton(): void {
        $this->command->execute();
    }
}

// Client code
function clientCode(): void {
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
