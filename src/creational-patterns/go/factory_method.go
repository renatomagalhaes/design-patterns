package main

import "fmt"

// Product interface
type Product interface {
	Use() string
}

// Concrete Product 1
type ConcreteProductA struct{}

func (p *ConcreteProductA) Use() string {
	return "Using Product A"
}

// Concrete Product 2
type ConcreteProductB struct{}

func (p *ConcreteProductB) Use() string {
	return "Using Product B"
}

// Creator interface
type Creator interface {
	FactoryMethod() Product
}

// Concrete Creator 1
type ConcreteCreatorA struct{}

func (c *ConcreteCreatorA) FactoryMethod() Product {
	return &ConcreteProductA{}
}

// Concrete Creator 2
type ConcreteCreatorB struct{}

func (c *ConcreteCreatorB) FactoryMethod() Product {
	return &ConcreteProductB{}
}

// Client code
func clientCode(creator Creator) {
	product := creator.FactoryMethod()
	fmt.Println(product.Use())
}

func main() {
	fmt.Println("App: Launched with ConcreteCreatorA.")
	clientCode(&ConcreteCreatorA{})

	fmt.Println("App: Launched with ConcreteCreatorB.")
	clientCode(&ConcreteCreatorB{})
}
