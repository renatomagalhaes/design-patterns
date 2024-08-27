package main

import "fmt"

// Command interface defines a method for executing commands
type Command interface {
	Execute()
}

// ConcreteCommand1 implements the Command interface
type ConcreteCommand1 struct {
	receiver *Receiver
}

func (c *ConcreteCommand1) Execute() {
	c.receiver.Action1()
}

// ConcreteCommand2 implements the Command interface
type ConcreteCommand2 struct {
	receiver *Receiver
}

func (c *ConcreteCommand2) Execute() {
	c.receiver.Action2()
}

// Receiver knows how to perform the actions
type Receiver struct{}

func (r *Receiver) Action1() {
	fmt.Println("Receiver: Performing Action 1")
}

func (r *Receiver) Action2() {
	fmt.Println("Receiver: Performing Action 2")
}

// Invoker holds a command and can execute it
type Invoker struct {
	command Command
}

func (i *Invoker) SetCommand(command Command) {
	i.command = command
}

func (i *Invoker) ExecuteCommand() {
	if i.command != nil {
		i.command.Execute()
	}
}

// Client code
func main() {
	receiver := &Receiver{}

	command1 := &ConcreteCommand1{receiver: receiver}
	command2 := &ConcreteCommand2{receiver: receiver}

	invoker := &Invoker{}

	invoker.SetCommand(command1)
	invoker.ExecuteCommand()

	invoker.SetCommand(command2)
	invoker.ExecuteCommand()
}
