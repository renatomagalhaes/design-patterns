package main

import "fmt"

// Mediator interface defines the method for notifying components
type Mediator interface {
	Notify(sender Component, event string)
}

// Component is the base component that holds a reference to the mediator
type Component struct {
	mediator Mediator
}

func (c *Component) SetMediator(mediator Mediator) {
	c.mediator = mediator
}

// ConcreteComponent1 represents a component in the system
type ConcreteComponent1 struct {
	Component
}

func (c *ConcreteComponent1) DoA() {
	fmt.Println("Component 1 does A.")
	c.mediator.Notify(c, "A")
}

func (c *ConcreteComponent1) DoB() {
	fmt.Println("Component 1 does B.")
	c.mediator.Notify(c, "B")
}

// ConcreteComponent2 represents another component in the system
type ConcreteComponent2 struct {
	Component
}

func (c *ConcreteComponent2) DoC() {
	fmt.Println("Component 2 does C.")
	c.mediator.Notify(c, "C")
}

func (c *ConcreteComponent2) DoD() {
	fmt.Println("Component 2 does D.")
	c.mediator.Notify(c, "D")
}

// ConcreteMediator implements the Mediator interface and coordinates interactions
type ConcreteMediator struct {
	component1 *ConcreteComponent1
	component2 *ConcreteComponent2
}

func NewMediator(c1 *ConcreteComponent1, c2 *ConcreteComponent2) *ConcreteMediator {
	return &ConcreteMediator{component1: c1, component2: c2}
}

func (m *ConcreteMediator) Notify(sender Component, event string) {
	switch event {
	case "A":
		fmt.Println("Mediator reacts on A and triggers following operations:")
		m.component2.DoC()
	case "D":
		fmt.Println("Mediator reacts on D and triggers following operations:")
		m.component1.DoB()
	}
}

// Client code
func main() {
	component1 := &ConcreteComponent1{}
	component2 := &ConcreteComponent2{}
	mediator := NewMediator(component1, component2)

	component1.SetMediator(mediator)
	component2.SetMediator(mediator)

	fmt.Println("Client triggers operation A.")
	component1.DoA()

	fmt.Println("Client triggers operation D.")
	component2.DoD()
}
