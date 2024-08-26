<?php

// Component interface
interface Notifier {
    public function send(string $message): void;
}

// Concrete Component
class BasicNotifier implements Notifier {
    public function send(string $message): void {
        echo "Sending message: " . $message . "\n";
    }
}

// Decorator class
class NotifierDecorator implements Notifier {
    protected Notifier $wrapped;

    public function __construct(Notifier $notifier) {
        $this->wrapped = $notifier;
    }

    public function send(string $message): void {
        $this->wrapped->send($message);
    }
}

// Concrete Decorators
class EncryptedNotifier extends NotifierDecorator {
    public function send(string $message): void {
        $encryptedMessage = $this->encrypt($message);
        parent::send($encryptedMessage);
    }

    private function encrypt(string $message): string {
        return "Encrypted(" . $message . ")";
    }
}

class LoggedNotifier extends NotifierDecorator {
    public function send(string $message): void {
        parent::send($message);
        $this->log($message);
    }

    private function log(string $message): void {
        echo "Logging message: " . $message . "\n";
    }
}

// Client code
function clientCode(Notifier $notifier): void {
    $notifier->send("Hello World!");
}

// Usage example
$basicNotifier = new BasicNotifier();
$encryptedNotifier = new EncryptedNotifier($basicNotifier);
$loggedNotifier = new LoggedNotifier($encryptedNotifier);

clientCode($loggedNotifier);
