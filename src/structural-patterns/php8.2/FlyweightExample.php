<?php

// Flyweight class
class TreeType {
    private string $name;
    private string $color;
    private string $texture;

    public function __construct(string $name, string $color, string $texture) {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function draw(int $x, int $y): void {
        echo "Drawing a tree of type " . $this->name . " at (" . $x . ", " . $y . ") with color " . $this->color . " and texture " . $this->texture . "\n";
    }
}

// Flyweight Factory
class TreeFactory {
    private array $treeTypes = [];

    public function getTreeType(string $name, string $color, string $texture): TreeType {
        $key = $name . "_" . $color . "_" . $texture;
        if (!isset($this->treeTypes[$key])) {
            $this->treeTypes[$key] = new TreeType($name, $color, $texture);
        }
        return $this->treeTypes[$key];
    }
}

// Context class
class Tree {
    private int $x;
    private int $y;
    private TreeType $type;

    public function __construct(int $x, int $y, TreeType $type) {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }

    public function draw(): void {
        $this->type->draw($this->x, $this->y);
    }
}

// Client code
function clientCode(): void {
    $factory = new TreeFactory();

    $tree1 = new Tree(10, 20, $factory->getTreeType("Oak", "Green", "Rough"));
    $tree2 = new Tree(30, 40, $factory->getTreeType("Pine", "Dark Green", "Smooth"));
    $tree3 = new Tree(50, 60, $factory->getTreeType("Oak", "Green", "Rough")); // Reuses existing Oak tree type

    $tree1->draw();
    $tree2->draw();
    $tree3->draw();
}

// Usage example
clientCode();
