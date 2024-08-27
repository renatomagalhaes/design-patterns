package main

import "fmt"

// Memento stores the state of the Originator
type Memento struct {
	state string
}

// NewMemento creates a new Memento with the given state
func NewMemento(state string) *Memento {
	return &Memento{state: state}
}

// GetState returns the state saved in the Memento
func (m *Memento) GetState() string {
	return m.state
}

// Originator holds the state that can be saved to a Memento
type Originator struct {
	state string
}

// SetState sets the state of the Originator
func (o *Originator) SetState(state string) {
	fmt.Printf("Originator: Setting state to %s\n", state)
	o.state = state
}

// Save creates a Memento containing the current state
func (o *Originator) Save() *Memento {
	fmt.Println("Originator: Saving to Memento.")
	return NewMemento(o.state)
}

// Restore restores the Originator's state from a Memento
func (o *Originator) Restore(memento *Memento) {
	o.state = memento.GetState()
	fmt.Printf("Originator: State after restoring from Memento: %s\n", o.state)
}

// Caretaker manages saving and restoring of Mementos
type Caretaker struct {
	mementos []*Memento
}

func (c *Caretaker) AddMemento(m *Memento) {
	c.mementos = append(c.mementos, m)
}

func (c *Caretaker) GetMemento(index int) *Memento {
	if index >= 0 && index < len(c.mementos) {
		return c.mementos[index]
	}
	return nil
}

// Client code
func main() {
	originator := &Originator{}
	caretaker := &Caretaker{}

	originator.SetState("State 1")
	caretaker.AddMemento(originator.Save())

	originator.SetState("State 2")
	caretaker.AddMemento(originator.Save())

	originator.SetState("State 3")
	fmt.Println("Originator current state:", originator.state)

	originator.Restore(caretaker.GetMemento(1))
	fmt.Println("Originator current state after restoring:", originator.state)
}
