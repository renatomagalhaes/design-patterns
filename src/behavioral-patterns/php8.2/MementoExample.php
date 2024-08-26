<?php

// Memento class
class TextMemento {
    private string $state;

    public function __construct(string $state) {
        $this->state = $state;
    }

    public function getState(): string {
        return $this->state;
    }
}

// Originator class
class TextEditor {
    private string $text = '';

    public function write(string $words): void {
        $this->text .= $words;
    }

    public function save(): TextMemento {
        return new TextMemento($this->text);
    }

    public function restore(TextMemento $memento): void {
        $this->text = $memento->getState();
    }

    public function showText(): void {
        echo $this->text . "\n";
    }
}

// Caretaker class
class TextCaretaker {
    private array $mementos = [];

    public function addMemento(TextMemento $memento): void {
        $this->mementos[] = $memento;
    }

    public function getMemento(int $index): TextMemento {
        return $this->mementos[$index];
    }
}

// Client code
function clientCode(): void {
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
