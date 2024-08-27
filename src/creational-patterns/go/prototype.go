package main

import "fmt"

// Prototype interface defines the method for cloning objects
type Prototype interface {
	Clone() Prototype
	GetDetails() string
}

// ConcretePrototype1 implements the Prototype interface
type ConcretePrototype1 struct {
	name string
}

func (p *ConcretePrototype1) Clone() Prototype {
	return &ConcretePrototype1{name: p.name}
}

func (p *ConcretePrototype1) GetDetails() string {
	return fmt.Sprintf("Prototype1: %s", p.name)
}

// ConcretePrototype2 implements the Prototype interface
type ConcretePrototype2 struct {
	name string
}

func (p *ConcretePrototype2) Clone() Prototype {
	return &ConcretePrototype2{name: p.name}
}

func (p *ConcretePrototype2) GetDetails() string {
	return fmt.Sprintf("Prototype2: %s", p.name)
}

// Client code
func main() {
	prototype1 := &ConcretePrototype1{name: "Prototype 1"}
	prototype2 := &ConcretePrototype2{name: "Prototype 2"}

	clone1 := prototype1.Clone()
	clone2 := prototype2.Clone()

	fmt.Println(clone1.GetDetails())
	fmt.Println(clone2.GetDetails())
}
