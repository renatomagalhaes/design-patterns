package main

import "fmt"

// Target interface represents the interface that the client expects to use
type Target interface {
	Request() string
}

// Adaptee struct represents the existing interface that needs adapting
type Adaptee struct{}

// SpecificRequest is a method of Adaptee that is incompatible with the Target interface
func (a *Adaptee) SpecificRequest() string {
	return "Specific request"
}

// Adapter struct adapts the Adaptee to the Target interface
type Adapter struct {
	adaptee *Adaptee
}

// NewAdapter returns a new instance of Adapter
func NewAdapter(adaptee *Adaptee) *Adapter {
	return &Adapter{adaptee: adaptee}
}

// Request adapts the SpecificRequest method of Adaptee to the Target interface
func (a *Adapter) Request() string {
	return a.adaptee.SpecificRequest()
}

// Client code uses the Target interface
func clientCode(target Target) {
	fmt.Println(target.Request())
}

func main() {
	adaptee := &Adaptee{}
	adapter := NewAdapter(adaptee)

	fmt.Println("Client: I can work just fine with the Adapter:")
	clientCode(adapter)
}
