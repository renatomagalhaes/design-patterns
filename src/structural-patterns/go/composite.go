package main

import "fmt"

// Component interface defines the interface for all objects in the composition
type Component interface {
	Operation() string
	Add(Component)
	Remove(Component)
	GetChild(int) Component
}

// Leaf represents the leaf objects in the composition
type Leaf struct {
	name string
}

func (l *Leaf) Operation() string {
	return fmt.Sprintf("Leaf %s", l.name)
}

func (l *Leaf) Add(c Component) {
	// Leaf doesn't support Add
}

func (l *Leaf) Remove(c Component) {
	// Leaf doesn't support Remove
}

func (l *Leaf) GetChild(i int) Component {
	return nil // Leaf doesn't have children
}

// Composite represents a node that can have children
type Composite struct {
	children []Component
	name     string
}

func (c *Composite) Operation() string {
	result := fmt.Sprintf("Composite %s", c.name)
	for _, child := range c.children {
		result += fmt.Sprintf("\n  %s", child.Operation())
	}
	return result
}

func (c *Composite) Add(component Component) {
	c.children = append(c.children, component)
}

func (c *Composite) Remove(component Component) {
	for i, child := range c.children {
		if child == component {
			c.children = append(c.children[:i], c.children[i+1:]...)
			break
		}
	}
}

func (c *Composite) GetChild(i int) Component {
	if i >= 0 && i < len(c.children) {
		return c.children[i]
	}
	return nil
}

// Client code
func main() {
	leaf1 := &Leaf{name: "Leaf 1"}
	leaf2 := &Leaf{name: "Leaf 2"}

	composite := &Composite{name: "Composite 1"}
	composite.Add(leaf1)
	composite.Add(leaf2)

	leaf3 := &Leaf{name: "Leaf 3"}
	composite2 := &Composite{name: "Composite 2"}
	composite2.Add(leaf3)

	root := &Composite{name: "Root"}
	root.Add(composite)
	root.Add(composite2)

	fmt.Println(root.Operation())
}
