package main

import "fmt"

// Iterator interface defines methods for iterating over a collection
type Iterator interface {
	HasNext() bool
	Next() interface{}
}

// Aggregate interface defines methods to create an iterator
type Aggregate interface {
	CreateIterator() Iterator
}

// ConcreteAggregate is a concrete collection that implements the Aggregate interface
type ConcreteAggregate struct {
	items []interface{}
}

func (c *ConcreteAggregate) CreateIterator() Iterator {
	return &ConcreteIterator{
		aggregate: c,
		index:     0,
	}
}

// ConcreteIterator implements the Iterator interface for ConcreteAggregate
type ConcreteIterator struct {
	aggregate *ConcreteAggregate
	index     int
}

func (i *ConcreteIterator) HasNext() bool {
	return i.index < len(i.aggregate.items)
}

func (i *ConcreteIterator) Next() interface{} {
	if i.HasNext() {
		item := i.aggregate.items[i.index]
		i.index++
		return item
	}
	return nil
}

// Client code
func main() {
	aggregate := &ConcreteAggregate{
		items: []interface{}{"Item 1", "Item 2", "Item 3"},
	}

	iterator := aggregate.CreateIterator()

	for iterator.HasNext() {
		item := iterator.Next()
		fmt.Println(item)
	}
}
