package main

import (
	"fmt"
	"strings"
)

// Flyweight represents the shared part of the object that can be used in multiple contexts
type Flyweight struct {
	sharedState string
}

func NewFlyweight(sharedState string) *Flyweight {
	return &Flyweight{sharedState: sharedState}
}

func (f *Flyweight) Operation(uniqueState string) string {
	return fmt.Sprintf("Flyweight: Shared [%s], Unique [%s]", f.sharedState, uniqueState)
}

// FlyweightFactory manages flyweight objects and ensures they are shared properly
type FlyweightFactory struct {
	flyweights map[string]*Flyweight
}

func NewFlyweightFactory() *FlyweightFactory {
	return &FlyweightFactory{flyweights: make(map[string]*Flyweight)}
}

func (f *FlyweightFactory) GetFlyweight(sharedState string) *Flyweight {
	key := strings.ToLower(sharedState)
	if _, exists := f.flyweights[key]; !exists {
		f.flyweights[key] = NewFlyweight(sharedState)
	}
	return f.flyweights[key]
}

func (f *FlyweightFactory) ListFlyweights() {
	count := len(f.flyweights)
	fmt.Printf("FlyweightFactory: I have %d flyweights:\n", count)
	for key := range f.flyweights {
		fmt.Println(key)
	}
}

// Client code
func main() {
	factory := NewFlyweightFactory()

	flyweight1 := factory.GetFlyweight("StateA")
	fmt.Println(flyweight1.Operation("Context1"))

	flyweight2 := factory.GetFlyweight("StateB")
	fmt.Println(flyweight2.Operation("Context2"))

	flyweight3 := factory.GetFlyweight("StateA")
	fmt.Println(flyweight3.Operation("Context3"))

	factory.ListFlyweights()
}
