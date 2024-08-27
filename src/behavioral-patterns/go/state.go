package main

import "fmt"

// State interface defines the behavior associated with a particular state of the Context
type State interface {
	Handle(context *Context)
}

// ConcreteStateA implements the behavior for the first state
type ConcreteStateA struct{}

func (s *ConcreteStateA) Handle(context *Context) {
	fmt.Println("ConcreteStateA: Handling request and transitioning to ConcreteStateB.")
	context.SetState(&ConcreteStateB{})
}

// ConcreteStateB implements the behavior for the second state
type ConcreteStateB struct{}

func (s *ConcreteStateB) Handle(context *Context) {
	fmt.Println("ConcreteStateB: Handling request and transitioning to ConcreteStateA.")
	context.SetState(&ConcreteStateA{})
}

// Context maintains a reference to the current state and delegates requests to it
type Context struct {
	state State
}

func NewContext() *Context {
	return &Context{state: &ConcreteStateA{}}
}

func (c *Context) SetState(state State) {
	c.state = state
}

func (c *Context) Request() {
	c.state.Handle(c)
}

// Client code
func main() {
	context := NewContext()

	context.Request()
	context.Request()
	context.Request()
	context.Request()
}
