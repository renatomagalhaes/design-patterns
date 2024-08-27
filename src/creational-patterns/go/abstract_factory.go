package main

import "fmt"

// AbstractProductA interface
type AbstractProductA interface {
	UseA() string
}

// AbstractProductB interface
type AbstractProductB interface {
	UseB() string
}

// ConcreteProductA1 implements AbstractProductA
type ConcreteProductA1 struct{}

func (p *ConcreteProductA1) UseA() string {
	return "Using Product A1"
}

// ConcreteProductA2 implements AbstractProductA
type ConcreteProductA2 struct{}

func (p *ConcreteProductA2) UseA() string {
	return "Using Product A2"
}

// ConcreteProductB1 implements AbstractProductB
type ConcreteProductB1 struct{}

func (p *ConcreteProductB1) UseB() string {
	return "Using Product B1"
}

// ConcreteProductB2 implements AbstractProductB
type ConcreteProductB2 struct{}

func (p *ConcreteProductB2) UseB() string {
	return "Using Product B2"
}

// AbstractFactory interface
type AbstractFactory interface {
	CreateProductA() AbstractProductA
	CreateProductB() AbstractProductB
}

// ConcreteFactory1 implements AbstractFactory
type ConcreteFactory1 struct{}

func (f *ConcreteFactory1) CreateProductA() AbstractProductA {
	return &ConcreteProductA1{}
}

func (f *ConcreteFactory1) CreateProductB() AbstractProductB {
	return &ConcreteProductB1{}
}

// ConcreteFactory2 implements AbstractFactory
type ConcreteFactory2 struct{}

func (f *ConcreteFactory2) CreateProductA() AbstractProductA {
	return &ConcreteProductA2{}
}

func (f *ConcreteFactory2) CreateProductB() AbstractProductB {
	return &ConcreteProductB2{}
}

// Client code
func clientCode(factory AbstractFactory) {
	productA := factory.CreateProductA()
	productB := factory.CreateProductB()

	fmt.Println(productA.UseA())
	fmt.Println(productB.UseB())
}

func main() {
	fmt.Println("Client: Testing client code with the first factory type:")
	clientCode(&ConcreteFactory1{})

	fmt.Println("Client: Testing the same client code with the second factory type:")
	clientCode(&ConcreteFactory2{})
}
