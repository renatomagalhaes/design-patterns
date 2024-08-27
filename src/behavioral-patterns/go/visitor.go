package main

import "fmt"

// Element interface defines the accept method for the Visitor
type Element interface {
	Accept(visitor Visitor)
}

// Visitor interface defines a visit method for each concrete element
type Visitor interface {
	VisitConcreteElementA(element *ConcreteElementA)
	VisitConcreteElementB(element *ConcreteElementB)
}

// ConcreteElementA implements the Element interface
type ConcreteElementA struct {
	data string
}

func (e *ConcreteElementA) Accept(visitor Visitor) {
	visitor.VisitConcreteElementA(e)
}

func (e *ConcreteElementA) OperationA() string {
	return fmt.Sprintf("ConcreteElementA operation with data: %s", e.data)
}

// ConcreteElementB implements the Element interface
type ConcreteElementB struct {
	number int
}

func (e *ConcreteElementB) Accept(visitor Visitor) {
	visitor.VisitConcreteElementB(e)
}

func (e *ConcreteElementB) OperationB() string {
	return fmt.Sprintf("ConcreteElementB operation with number: %d", e.number)
}

// ConcreteVisitor1 implements the Visitor interface
type ConcreteVisitor1 struct{}

func (v *ConcreteVisitor1) VisitConcreteElementA(element *ConcreteElementA) {
	fmt.Println("ConcreteVisitor1 visiting", element.OperationA())
}

func (v *ConcreteVisitor1) VisitConcreteElementB(element *ConcreteElementB) {
	fmt.Println("ConcreteVisitor1 visiting", element.OperationB())
}

// ConcreteVisitor2 implements the Visitor interface
type ConcreteVisitor2 struct{}

func (v *ConcreteVisitor2) VisitConcreteElementA(element *ConcreteElementA) {
	fmt.Println("ConcreteVisitor2 visiting", element.OperationA())
}

func (v *ConcreteVisitor2) VisitConcreteElementB(element *ConcreteElementB) {
	fmt.Println("ConcreteVisitor2 visiting", element.OperationB())
}

// Client code
func main() {
	elements := []Element{
		&ConcreteElementA{data: "example"},
		&ConcreteElementB{number: 42},
	}

	visitor1 := &ConcreteVisitor1{}
	visitor2 := &ConcreteVisitor2{}

	for _, element := range elements {
		element.Accept(visitor1)
	}

	fmt.Println()

	for _, element := range elements {
		element.Accept(visitor2)
	}
}
