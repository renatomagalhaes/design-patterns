<?php

// Iterator Interface
interface Iterator {
    public function hasNext();
    public function next();
}

// Aggregate Interface
interface Collection {
    public function createIterator();
}

// Concrete Iterator
class BookIterator implements Iterator {
    private $books;
    private $position = 0;

    public function __construct($books) {
        $this->books = $books;
    }

    public function hasNext() {
        return $this->position < count($this->books);
    }

    public function next() {
        return $this->books[$this->position++];
    }
}

// Concrete Collection
class BookCollection implements Collection {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function createIterator() {
        return new BookIterator($this->books);
    }
}

// Client code
function clientCode() {
    $collection = new BookCollection();
    $collection->addBook("Design Patterns");
    $collection->addBook("Clean Code");
    $collection->addBook("Refactoring");

    $iterator = $collection->createIterator();

    while ($iterator->hasNext()) {
        echo $iterator->next() . "\n";
    }
}

// Usage example
clientCode();
