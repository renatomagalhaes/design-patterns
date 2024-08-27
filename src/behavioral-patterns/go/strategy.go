package main

import "fmt"

// Strategy interface defines a method for executing a strategy
type Strategy interface {
	Execute(a, b int) int
}

// ConcreteStrategyAdd implements the addition strategy
type ConcreteStrategyAdd struct{}

func (s *ConcreteStrategyAdd) Execute(a, b int) int {
	return a + b
}

// ConcreteStrategySubtract implements the subtraction strategy
type ConcreteStrategySubtract struct{}

func (s *ConcreteStrategySubtract) Execute(a, b int) int {
	return a - b
}

// ConcreteStrategyMultiply implements the multiplication strategy
type ConcreteStrategyMultiply struct{}

func (s *ConcreteStrategyMultiply) Execute(a, b int) int {
	return a * b
}

// Context maintains a reference to a strategy and delegates execution to it
type Context struct {
	strategy Strategy
}

func (c *Context) SetStrategy(strategy Strategy) {
	c.strategy = strategy
}

func (c *Context) ExecuteStrategy(a, b int) int {
	return c.strategy.Execute(a, b)
}

// Client code
func main() {
	context := &Context{}

	context.SetStrategy(&ConcreteStrategyAdd{})
	fmt.Println("10 + 5 =", context.ExecuteStrategy(10, 5))

	context.SetStrategy(&ConcreteStrategySubtract{})
	fmt.Println("10 - 5 =", context.ExecuteStrategy(10, 5))

	context.SetStrategy(&ConcreteStrategyMultiply{})
	fmt.Println("10 * 5 =", context.ExecuteStrategy(10, 5))
}
