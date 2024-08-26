<?php

// Component interface
interface Notifier {
    public function send($message);
}

// Concrete Component
class BasicNotifier implements Notifier {
    public function send($message) {
        echo "Sending message: " . $message . "\n";
    }
}

// Decorator class
class NotifierDecorator implements Notifier {
    protected $wrapped;

    public function __construct(Notifier $notifier) {
        $this->wrapped = $notifier;
    }

    public function send($message) {
        $this->wrapped->send($message);
    }
}

// Concrete Decorators
class EncryptedNotifier extends NotifierDecorator {
    public function send($message) {
        $encryptedMessage = $this->encrypt($message);
        parent::send($encryptedMessage);
    }

    private function encrypt($message) {
        return "Encrypted(" . $message . ")";
    }
}

class LoggedNotifier extends NotifierDecorator {
    public function send($message) {
        parent::send($message);
        $this->log($message);
    }

    private function log($message) {
        echo "Logging message: " . $message . "\n";
    }
}

// Client code
function clientCode(Notifier $notifier) {
    $notifier->send("Hello World!");
}

// Usage example
$basicNotifier = new BasicNotifier();
$encryptedNotifier = new EncryptedNotifier($basicNotifier);
$loggedNotifier = new LoggedNotifier($encryptedNotifier);

clientCode($loggedNotifier);
