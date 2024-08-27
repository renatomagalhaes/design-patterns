package main

import "fmt"

// Subject interface defines methods to attach, detach and notify observers
type Subject interface {
	Attach(observer Observer)
	Detach(observer Observer)
	Notify()
}

// Observer interface defines the update method for observers
type Observer interface {
	Update(data string)
}

// ConcreteSubject maintains a list of observers and notifies them of any changes
type ConcreteSubject struct {
	observers []Observer
	state     string
}

func (s *ConcreteSubject) Attach(observer Observer) {
	s.observers = append(s.observers, observer)
}

func (s *ConcreteSubject) Detach(observer Observer) {
	for i, o := range s.observers {
		if o == observer {
			s.observers = append(s.observers[:i], s.observers[i+1:]...)
			break
		}
	}
}

func (s *ConcreteSubject) Notify() {
	for _, observer := range s.observers {
		observer.Update(s.state)
	}
}

func (s *ConcreteSubject) SetState(state string) {
	s.state = state
	s.Notify()
}

// ConcreteObserver implements the Observer interface and reacts to updates
type ConcreteObserver struct {
	name string
}

func (o *ConcreteObserver) Update(data string) {
	fmt.Printf("%s received update: %s\n", o.name, data)
}

// Client code
func main() {
	subject := &ConcreteSubject{}

	observer1 := &ConcreteObserver{name: "Observer 1"}
	observer2 := &ConcreteObserver{name: "Observer 2"}

	subject.Attach(observer1)
	subject.Attach(observer2)

	subject.SetState("State 1")
	subject.SetState("State 2")

	subject.Detach(observer1)

	subject.SetState("State 3")
}
