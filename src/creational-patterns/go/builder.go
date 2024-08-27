package main

import "fmt"

// Product is the complex object being built
type House struct {
	walls   string
	roof    string
	floor   string
	windows int
}

// Builder interface defines the steps to build the product
type HouseBuilder interface {
	SetWalls(walls string) HouseBuilder
	SetRoof(roof string) HouseBuilder
	SetFloor(floor string) HouseBuilder
	SetWindows(windows int) HouseBuilder
	Build() House
}

// ConcreteBuilder implements the Builder interface
type ConcreteHouseBuilder struct {
	house House
}

func (b *ConcreteHouseBuilder) SetWalls(walls string) HouseBuilder {
	b.house.walls = walls
	return b
}

func (b *ConcreteHouseBuilder) SetRoof(roof string) HouseBuilder {
	b.house.roof = roof
	return b
}

func (b *ConcreteHouseBuilder) SetFloor(floor string) HouseBuilder {
	b.house.floor = floor
	return b
}

func (b *ConcreteHouseBuilder) SetWindows(windows int) HouseBuilder {
	b.house.windows = windows
	return b
}

func (b *ConcreteHouseBuilder) Build() House {
	return b.house
}

// Director constructs the product using the builder
type Director struct {
	builder HouseBuilder
}

func NewDirector(b HouseBuilder) *Director {
	return &Director{builder: b}
}

func (d *Director) Construct() House {
	return d.builder.SetWalls("Brick Walls").
		SetRoof("Concrete Roof").
		SetFloor("Marble Floor").
		SetWindows(4).
		Build()
}

// Client code
func main() {
	builder := &ConcreteHouseBuilder{}
	director := NewDirector(builder)

	house := director.Construct()
	fmt.Printf("House built with: %s, %s, %s, %d windows\n", house.walls, house.roof, house.floor, house.windows)
}
