<?php

// Mediator Interface
interface Mediator {
    public function notify($sender, $event);
}

// Concrete Mediator
class DialogMediator implements Mediator {
    private $button;
    private $textField;

    public function setButton(Button $button) {
        $this->button = $button;
    }

    public function setTextField(TextField $textField) {
        $this->textField = $textField;
    }

    public function notify($sender, $event) {
        if ($event === "click") {
            echo "Mediator reacts to click and triggers the following operation:\n";
            $this->textField->clear();
        } elseif ($event === "type") {
            echo "Mediator reacts to typing and triggers the following operation:\n";
            $this->button->enable();
        }
    }
}

// Base Component
abstract class Component {
    protected $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator) {
        $this->mediator = $mediator;
    }
}

// Concrete Components
class Button extends Component {
    public function click() {
        echo "Button clicked.\n";
        $this->mediator->notify($this, "click");
    }

    public function enable() {
        echo "Button enabled.\n";
    }
}

class TextField extends Component {
    public function type() {
        echo "Typing in the text field.\n";
        $this->mediator->notify($this, "type");
    }

    public function clear() {
        echo "Text field cleared.\n";
    }
}

// Client code
function clientCode() {
    $mediator = new DialogMediator();

    $button = new Button($mediator);
    $textField = new TextField($mediator);

    $mediator->setButton($button);
    $mediator->setTextField($textField);

    $textField->type();
    $button->click();
}

// Usage example
clientCode();
