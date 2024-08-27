package main

import "fmt"

// Component interface defines the interface for objects that can be decorated
type Component interface {
	Operation() string
}

// ConcreteComponent is a basic implementation of the Component interface
type ConcreteComponent struct{}

func (c *ConcreteComponent) Operation() string {
	return "ConcreteComponent"
}

// Decorator embeds a Component and adds additional behavior
type Decorator struct {
	component Component
}

func (d *Decorator) Operation() string {
	if d.component != nil {
		return d.component.Operation()
	}
	return ""
}

// ConcreteDecoratorA adds additional behavior to the component
type ConcreteDecoratorA struct {
	Decorator
}

func (d *ConcreteDecoratorA) Operation() string {
	return fmt.Sprintf("ConcreteDecoratorA(%s)", d.Decorator.Operation())
}

// ConcreteDecoratorB adds even more behavior to the component
type ConcreteDecoratorB struct {
	Decorator
}

func (d *ConcreteDecoratorB) Operation() string {
	return fmt.Sprintf("ConcreteDecoratorB(%s)", d.Decorator.Operation())
}

// Client code
func main() {
	component := &ConcreteComponent{}

	decoratorA := &ConcreteDecoratorA{}
	decoratorA.component = component

	decoratorB := &ConcreteDecoratorB{}
	decoratorB.component = decoratorA

	fmt.Println(decoratorB.Operation())
}
