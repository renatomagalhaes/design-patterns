<?php

// Component interface
interface FileSystemComponent {
    public function showDetails(): void;
}

// Leaf class representing a File
class File implements FileSystemComponent {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function showDetails(): void {
        echo "File: " . $this->name . "\n";
    }
}

// Composite class representing a Directory
class Directory implements FileSystemComponent {
    private string $name;
    private array $components = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function addComponent(FileSystemComponent $component): void {
        $this->components[] = $component;
    }

    public function showDetails(): void {
        echo "Directory: " . $this->name . "\n";
        foreach ($this->components as $component) {
            $component->showDetails();
        }
    }
}

// Client code
function clientCode(): void {
    $file1 = new File("File1.txt");
    $file2 = new File("File2.txt");

    $dir1 = new Directory("Directory1");
    $dir1->addComponent($file1);

    $dir2 = new Directory("Directory2");
    $dir2->addComponent($file2);
    $dir2->addComponent($dir1);

    $dir2->showDetails();
}

// Usage example
clientCode();
