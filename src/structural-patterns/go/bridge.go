package main

import "fmt"

// Implementor interface defines the implementation methods
type Implementor interface {
	OperationImpl() string
}

// ConcreteImplementorA implements Implementor
type ConcreteImplementorA struct{}

func (c *ConcreteImplementorA) OperationImpl() string {
	return "ConcreteImplementorA: Here's the result on the platform A."
}

// ConcreteImplementorB implements Implementor
type ConcreteImplementorB struct{}

func (c *ConcreteImplementorB) OperationImpl() string {
	return "ConcreteImplementorB: Here's the result on the platform B."
}

// Abstraction defines the interface for the client to interact with
type Abstraction struct {
	implementor Implementor
}

func (a *Abstraction) Operation() string {
	return fmt.Sprintf("Abstraction: Base operation with:\n%s", a.implementor.OperationImpl())
}

// RefinedAbstraction is an extended version of Abstraction
type RefinedAbstraction struct {
	Abstraction
}

func NewRefinedAbstraction(implementor Implementor) *RefinedAbstraction {
	return &RefinedAbstraction{
		Abstraction: Abstraction{
			implementor: implementor,
		},
	}
}

func (r *RefinedAbstraction) Operation() string {
	return fmt.Sprintf("RefinedAbstraction: Extended operation with:\n%s", r.implementor.OperationImpl())
}

// Client code
func main() {
	implementorA := &ConcreteImplementorA{}
	abstraction := NewRefinedAbstraction(implementorA)
	fmt.Println(abstraction.Operation())

	implementorB := &ConcreteImplementorB{}
	abstraction.implementor = implementorB
	fmt.Println(abstraction.Operation())
}
