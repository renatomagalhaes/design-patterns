package main

import "fmt"

// AbstractClass defines the template method and its steps
type AbstractClass interface {
	Step1()
	Step2()
	Step3()
	TemplateMethod()
}

// BaseClass provides the default implementation of the TemplateMethod
type BaseClass struct{}

func (b *BaseClass) TemplateMethod() {
	b.Step1()
	b.Step2()
	b.Step3()
}

func (b *BaseClass) Step1() {
	fmt.Println("BaseClass: Step 1")
}

func (b *BaseClass) Step2() {
	fmt.Println("BaseClass: Step 2")
}

func (b *BaseClass) Step3() {
	fmt.Println("BaseClass: Step 3")
}

// ConcreteClassA provides a specific implementation of the steps
type ConcreteClassA struct {
	BaseClass
}

func (c *ConcreteClassA) Step1() {
	fmt.Println("ConcreteClassA: Step 1")
}

// ConcreteClassB provides another specific implementation of the steps
type ConcreteClassB struct {
	BaseClass
}

func (c *ConcreteClassB) Step3() {
	fmt.Println("ConcreteClassB: Step 3")
}

// Client code
func main() {
	classA := &ConcreteClassA{}
	classA.TemplateMethod()

	fmt.Println()

	classB := &ConcreteClassB{}
	classB.TemplateMethod()
}
