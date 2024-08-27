package main

import (
	"fmt"
	"sync"
)

// Singleton struct
type Singleton struct {
	value string
}

var instance *Singleton
var once sync.Once

// GetInstance returns the singleton instance
func GetInstance() *Singleton {
	once.Do(func() {
		instance = &Singleton{value: "I am the singleton instance"}
	})
	return instance
}

func main() {
	singleton1 := GetInstance()
	fmt.Println(singleton1.value)

	singleton2 := GetInstance()
	fmt.Println(singleton2.value)

	if singleton1 == singleton2 {
		fmt.Println("Both instances are the same")
	}
}
