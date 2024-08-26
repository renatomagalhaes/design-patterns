<?php

// Abstraction
abstract class Notification {
    protected MessageSender $sender;

    public function __construct(MessageSender $sender) {
        $this->sender = $sender;
    }

    abstract public function send(string $message): void;
}

// Refined Abstraction
class AlertNotification extends Notification {
    public function send(string $message): void {
        $this->sender->sendMessage("Alert: " . $message);
    }
}

class LogNotification extends Notification {
    public function send(string $message): void {
        $this->sender->sendMessage("Log: " . $message);
    }
}

// Implementor
interface MessageSender {
    public function sendMessage(string $message): void;
}

// Concrete Implementors
class EmailSender implements MessageSender {
    public function sendMessage(string $message): void {
        echo "Sending Email: " . $message . "\n";
    }
}

class SmsSender implements MessageSender {
    public function sendMessage(string $message): void {
        echo "Sending SMS: " . $message . "\n";
    }
}

// Client code
function clientCode(Notification $notification): void {
    $notification->send("This is a test message.");
}

// Usage example
$emailSender = new EmailSender();
$notification = new AlertNotification($emailSender);
clientCode($notification);

$smsSender = new SmsSender();
$notification = new LogNotification($smsSender);
clientCode($notification);
