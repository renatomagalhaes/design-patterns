<?php

// Iterator Interface
interface Iterator {
    public function hasNext(): bool;
    public function next(): ?string;
}

// Aggregate Interface
interface Collection {
    public function createIterator(): Iterator;
}

// Concrete Iterator
class BookIterator implements Iterator {
    private array $books;
    private int $position = 0;

    public function __construct(array $books) {
        $this->books = $books;
    }

    public function hasNext(): bool {
        return $this->position < count($this->books);
    }

    public function next(): ?string {
        return $this->books[$this->position++] ?? null;
    }
}

// Concrete Collection
class BookCollection implements Collection {
    private array $books = [];

    public function addBook(string $book): void {
        $this->books[] = $book;
    }

    public function createIterator(): Iterator {
        return new BookIterator($this->books);
    }
}

// Client code
function clientCode(): void {
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
