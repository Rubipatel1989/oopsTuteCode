<?php

// In Opps when a message can display more than one form that’s called Polymorphism.
// Suppose we have an interface named with Shape and method calcArea(). When Shape implements in class 
// Circle then it’s calculated area and also when Shape implements in class Rectangle then also this calculates area.

// Overloding
interface Shape {

    public function calcArea();
}

class Circle implements Shape {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calcArea() {
        return $this->radius * $this->radius * pi();
    }
}

class Rectanglee implements Shape {

    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea() {
        return $this->width * $this->height;
    }

}
