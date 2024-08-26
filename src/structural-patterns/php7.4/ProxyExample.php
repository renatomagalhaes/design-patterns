<?php

// Subject interface
interface Image {
    public function display();
}

// Real Subject
class RealImage implements Image {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
        $this->loadImageFromDisk();
    }

    private function loadImageFromDisk() {
        echo "Loading " . $this->filename . "\n";
    }

    public function display() {
        echo "Displaying " . $this->filename . "\n";
    }
}

// Proxy
class ProxyImage implements Image {
    private $realImage;
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function display() {
        if ($this->realImage === null) {
            $this->realImage = new RealImage($this->filename);
        }
        $this->realImage->display();
    }
}

// Client code
function clientCode() {
    $image = new ProxyImage("photo.jpg");
    $image->display(); // Loads and displays the image
    $image->display(); // Displays the image without loading
}

// Usage example
clientCode();
