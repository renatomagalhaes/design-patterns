<?php

// Memento class
class TextMemento {
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}

// Originator class
class TextEditor {
    private $text;

    public function write($words) {
        $this->text .= $words;
    }

    public function save() {
        return new TextMemento($this->text);
    }

    public function restore(TextMemento $memento) {
        $this->text = $memento->getState();
    }

    public function showText() {
        echo $this->text . "\n";
    }
}

// Caretaker class
class TextCaretaker {
    private $mementos = [];

    public function addMemento(TextMemento $memento) {
        $this->mementos[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }
}

// Client code
function clientCode() {
    $editor = new TextEditor();
    $caretaker = new TextCaretaker();

    $editor->write("Hello, ");
    $caretaker->addMemento($editor->save());

    $editor->write("world!");
    $editor->showText();

    $editor->restore($caretaker->getMemento(0));
    $editor->showText();
}

// Usage example
clientCode();
