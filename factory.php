<?php
// In software engineering, a Design Pattern is a general repeatable solution to commonly occurring 
// problem in software Design. Good Object-oriented designs should be reusable, maintainable 
// and extensible and Design Patterns in PHP could be very helpful in doing that. 
// It does not only help in solving problems, it implies an optimal way addressing common challenges.

//  Design Patterns
// 	a). Creational Patterns: Design patterns that are used in object creation mechanisms, 
//         to create objects that can be 	decoupled from the system that implemented them.
// 	b). Structural Patterns: This eases the design by identifying simple ways to realize 
//         relationships between entities
// 	c). Behavioral Patterns: They are used to manage relationships, responsibilities, 
//         and algorithms between objects

interface FamilyfactoryInterface{
    public function create(): Family;
}

class FamilyFactory implements FamilyfactoryInterface{
    public function create(): Family{
        $family = new Family();
        return $family;
    }
}
