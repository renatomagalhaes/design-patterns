package main

import (
	"fmt"
	"strconv"
	"strings"
)

// Expression interface defines the interpret method
type Expression interface {
	Interpret() int
}

// NumberExpression represents an integer in the language
type NumberExpression struct {
	number int
}

func (n *NumberExpression) Interpret() int {
	return n.number
}

// AdditionExpression represents an addition operation
type AdditionExpression struct {
	left, right Expression
}

func (a *AdditionExpression) Interpret() int {
	return a.left.Interpret() + a.right.Interpret()
}

// SubtractionExpression represents a subtraction operation
type SubtractionExpression struct {
	left, right Expression
}

func (s *SubtractionExpression) Interpret() int {
	return s.left.Interpret() - s.right.Interpret()
}

// Parser to parse strings into expressions
func parseToken(token string) Expression {
	if n, err := strconv.Atoi(token); err == nil {
		return &NumberExpression{number: n}
	} else if token == "+" {
		return nil // special handling in main parser
	} else if token == "-" {
		return nil // special handling in main parser
	}
	return nil
}

// Client code
func main() {
	expression := "3 4 + 2 -"
	tokens := strings.Split(expression, " ")
	var stack []Expression

	for _, token := range tokens {
		if token == "+" {
			right := stack[len(stack)-1]
			stack = stack[:len(stack)-1]
			left := stack[len(stack)-1]
			stack = stack[:len(stack)-1]
			addition := &AdditionExpression{left: left, right: right}
			stack = append(stack, addition)
		} else if token == "-" {
			right := stack[len(stack)-1]
			stack = stack[:len(stack)-1]
			left := stack[len(stack)-1]
			stack = stack[:len(stack)-1]
			subtraction := &SubtractionExpression{left: left, right: right}
			stack = append(stack, subtraction)
		} else {
			stack = append(stack, parseToken(token))
		}
	}

	result := stack[0].Interpret()
	fmt.Println("Result:", result) // Output should be 5
}
