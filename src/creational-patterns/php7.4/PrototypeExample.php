<?php

// Prototype Interface
interface Prototype {
    public function clone(): Prototype;
}

// Concrete Prototype
class Document implements Prototype {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function clone(): Prototype {
        // Shallow copy
        return clone $this;
    }

    public function __toString() {
        return "Document: [Title: $this->title, Content: $this->content]";
    }
}

// Client code
function clientCode() {
    $originalDocument = new Document("Original", "This is the original document.");

    $clonedDocument = $originalDocument->clone();
    $clonedDocument->title = "Cloned";
    $clonedDocument->content = "This is the cloned document.";

    echo $originalDocument . "\n"; // Output: Original document
    echo $clonedDocument . "\n";   // Output: Cloned document
}

// Usage example
clientCode();
