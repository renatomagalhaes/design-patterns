<?php

// Singleton class
class Database {
    private static ?Database $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {
        // Private constructor code
    }

    // Static method to get the single instance
    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Example method
    public function connect(): string {
        return "Connected to the database.";
    }
}

// Client code
function clientCode(): void {
    $db1 = Database::getInstance();
    $db2 = Database::getInstance();

    if ($db1 === $db2) {
        echo "Same instance\n";
    } else {
        echo "Different instances\n";
    }

    echo $db1->connect();
}

// Usage example
clientCode();
