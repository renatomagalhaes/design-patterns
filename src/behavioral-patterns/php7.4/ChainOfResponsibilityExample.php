<?php

// Handler interface
interface Handler {
    public function setNext(Handler $handler): Handler;
    public function handle($request): ?string;
}

// Abstract Handler
abstract class AbstractHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler): Handler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle($request): ?string {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

// Concrete Handlers
class AuthHandler extends AbstractHandler {
    public function handle($request): ?string {
        if ($request === "auth") {
            return "Handled by AuthHandler\n";
        }
        return parent::handle($request);
    }
}

class DataHandler extends AbstractHandler {
    public function handle($request): ?string {
        if ($request === "data") {
            return "Handled by DataHandler\n";
        }
        return parent::handle($request);
    }
}

class ErrorHandler extends AbstractHandler {
    public function handle($request): ?string {
        return "Handled by ErrorHandler (Default)\n";
    }
}

// Client code
function clientCode(Handler $handler) {
    foreach (["auth", "data", "unknown"] as $request) {
        echo "Client: Who wants to handle \"$request\"?\n";
        $result = $handler->handle($request);
        if ($result) {
            echo $result;
        } else {
            echo "No handler could process the request\n";
        }
    }
}

// Usage example
$authHandler = new AuthHandler();
$dataHandler = new DataHandler();
$errorHandler = new ErrorHandler();

$authHandler->setNext($dataHandler)->setNext($errorHandler);

clientCode($authHandler);
