package main

import "fmt"

// Subject interface defines the interface for RealSubject and Proxy
type Subject interface {
	Request() string
}

// RealSubject is the object that the proxy represents
type RealSubject struct{}

func (r *RealSubject) Request() string {
	return "RealSubject: Handling request."
}

// Proxy is the proxy for RealSubject
type Proxy struct {
	realSubject *RealSubject
}

func NewProxy(realSubject *RealSubject) *Proxy {
	return &Proxy{realSubject: realSubject}
}

func (p *Proxy) Request() string {
	if p.CheckAccess() {
		result := p.realSubject.Request()
		p.LogAccess()
		return result
	}
	return "Proxy: Access denied."
}

func (p *Proxy) CheckAccess() bool {
	fmt.Println("Proxy: Checking access prior to firing a real request.")
	return true // Simulate access granted
}

func (p *Proxy) LogAccess() {
	fmt.Println("Proxy: Logging the time of request.")
}

// Client code
func main() {
	realSubject := &RealSubject{}
	proxy := NewProxy(realSubject)

	fmt.Println(proxy.Request())
}
