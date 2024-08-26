<?php

// Mediator Interface
interface Mediator {
    public function notify(object $sender, string $event): void;
}

// Concrete Mediator
class DialogMediator implements Mediator {
    private Button $button;
    private TextField $textField;

    public function setButton(Button $button): void {
        $this->button = $button;
    }

    public function setTextField(TextField $textField): void {
        $this->textField = $textField;
    }

    public function notify(object $sender, string $event): void {
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
    protected Mediator $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void {
        $this->mediator = $mediator;
    }
}

// Concrete Components
class Button extends Component {
    public function click(): void {
        echo "Button clicked.\n";
        $this->mediator->notify($this, "click");
    }

    public function enable(): void {
        echo "Button enabled.\n";
    }
}

class TextField extends Component {
    public function type(): void {
        echo "Typing in the text field.\n";
        $this->mediator->notify($this, "type");
    }

    public function clear(): void {
        echo "Text field cleared.\n";
    }
}

// Client code
function clientCode(): void {
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
