<?php

// Flyweight class
class TreeType {
    private $name;
    private $color;
    private $texture;

    public function __construct($name, $color, $texture) {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function draw($x, $y) {
        echo "Drawing a tree of type " . $this->name . " at (" . $x . ", " . $y . ") with color " . $this->color . " and texture " . $this->texture . "\n";
    }
}

// Flyweight Factory
class TreeFactory {
    private $treeTypes = [];

    public function getTreeType($name, $color, $texture) {
        $key = $name . "_" . $color . "_" . $texture;
        if (!isset($this->treeTypes[$key])) {
            $this->treeTypes[$key] = new TreeType($name, $color, $texture);
        }
        return $this->treeTypes[$key];
    }
}

// Context class
class Tree {
    private $x;
    private $y;
    private $type;

    public function __construct($x, $y, TreeType $type) {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }

    public function draw() {
        $this->type->draw($this->x, $this->y);
    }
}

// Client code
function clientCode() {
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
