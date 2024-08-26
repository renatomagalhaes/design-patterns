<?php

// Interface for Button
interface Button {
    public function render(): string;
}

// Interface for Checkbox
interface Checkbox {
    public function check(): string;
}

// Concrete Button for Windows
class WindowsButton implements Button {
    public function render(): string {
        return "Rendering a button in Windows style.";
    }
}

// Concrete Button for macOS
class MacOSButton implements Button {
    public function render(): string {
        return "Rendering a button in macOS style.";
    }
}

// Concrete Checkbox for Windows
class WindowsCheckbox implements Checkbox {
    public function check(): string {
        return "Checking a checkbox in Windows style.";
    }
}

// Concrete Checkbox for macOS
class MacOSCheckbox implements Checkbox {
    public function check(): string {
        return "Checking a checkbox in macOS style.";
    }
}

// Abstract Factory interface
interface GUIFactory {
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}

// Concrete Factory for Windows
class WindowsFactory implements GUIFactory {
    public function createButton(): Button {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox {
        return new WindowsCheckbox();
    }
}

// Concrete Factory for macOS
class MacOSFactory implements GUIFactory {
    public function createButton(): Button {
        return new MacOSButton();
    }

    public function createCheckbox(): Checkbox {
        return new MacOSCheckbox();
    }
}

// Client code
function clientCode(GUIFactory $factory) {
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();
    echo $button->render() . "\n";
    echo $checkbox->check() . "\n";
}

// Usage example
clientCode(new WindowsFactory()); // Output: Windows style components
clientCode(new MacOSFactory());   // Output: macOS style components
