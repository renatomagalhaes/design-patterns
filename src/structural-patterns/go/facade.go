package main

import "fmt"

// SubsystemA represents a complex part of the system
type SubsystemA struct{}

func (s *SubsystemA) OperationA() string {
	return "SubsystemA: Ready!\n"
}

// SubsystemB represents another complex part of the system
type SubsystemB struct{}

func (s *SubsystemB) OperationB() string {
	return "SubsystemB: Go!\n"
}

// SubsystemC represents yet another complex part of the system
type SubsystemC struct{}

func (s *SubsystemC) OperationC() string {
	return "SubsystemC: Fire!\n"
}

// Facade provides a simplified interface to the complex subsystems
type Facade struct {
	subsystemA *SubsystemA
	subsystemB *SubsystemB
	subsystemC *SubsystemC
}

func NewFacade() *Facade {
	return &Facade{
		subsystemA: &SubsystemA{},
		subsystemB: &SubsystemB{},
		subsystemC: &SubsystemC{},
	}
}

func (f *Facade) Operation() string {
	result := "Facade initializes subsystems:\n"
	result += f.subsystemA.OperationA()
	result += f.subsystemB.OperationB()
	result += f.subsystemC.OperationC()
	result += "Facade orders subsystems to perform the action:\n"
	return result
}

// Client code
func main() {
	facade := NewFacade()
	fmt.Println(facade.Operation())
}
