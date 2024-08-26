<?php

// Subject interface
interface Image {
    public function display(): void;
}

// Real Subject
class RealImage implements Image {
    private string $filename;

    public function __construct(string $filename) {
        $this->filename = $filename;
        $this->loadImageFromDisk();
    }

    private function loadImageFromDisk(): void {
        echo "Loading " . $this->filename . "\n";
    }

    public function display(): void {
        echo "Displaying " . $this->filename . "\n";
    }
}

// Proxy
class ProxyImage implements Image {
    private ?RealImage $realImage = null;
    private string $filename;

    public function __construct(string $filename) {
        $this->filename = $filename;
    }

    public function display(): void {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename);
        }
        $this->realImage->display();
    }
}

// Client code
function clientCode(): void {
    $image = new ProxyImage("photo.jpg");
    $image->display(); // Loads and displays the image
    $image->display(); // Displays the image without loading
}

// Usage example
clientCode();
