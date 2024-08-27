package main

import "fmt"

// Handler interface declares a method for building the chain of handlers
type Handler interface {
	SetNext(handler Handler) Handler
	Handle(request string) string
}

// BaseHandler is an abstract class that implements the chaining behavior
type BaseHandler struct {
	next Handler
}

func (h *BaseHandler) SetNext(handler Handler) Handler {
	h.next = handler
	return handler
}

func (h *BaseHandler) Handle(request string) string {
	if h.next != nil {
		return h.next.Handle(request)
	}
	return ""
}

// ConcreteHandler1 handles the request or passes it to the next handler
type ConcreteHandler1 struct {
	BaseHandler
}

func (h *ConcreteHandler1) Handle(request string) string {
	if request == "Request1" {
		return "ConcreteHandler1: Handled request.\n"
	}
	return h.BaseHandler.Handle(request)
}

// ConcreteHandler2 handles the request or passes it to the next handler
type ConcreteHandler2 struct {
	BaseHandler
}

func (h *ConcreteHandler2) Handle(request string) string {
	if request == "Request2" {
		return "ConcreteHandler2: Handled request.\n"
	}
	return h.BaseHandler.Handle(request)
}

// Client code
func main() {
	handler1 := &ConcreteHandler1{}
	handler2 := &ConcreteHandler2{}

	handler1.SetNext(handler2)

	fmt.Println("Client: Sending Request1.")
	fmt.Print(handler1.Handle("Request1"))

	fmt.Println("Client: Sending Request2.")
	fmt.Print(handler1.Handle("Request2"))

	fmt.Println("Client: Sending Request3.")
	fmt.Print(handler1.Handle("Request3"))
}
