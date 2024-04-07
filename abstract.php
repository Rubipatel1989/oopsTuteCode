<?php

// As name abstract class this is not complete itself, but need child class fulfill its property. 
// At least one abstract method compulsory in class.

abstract class Animal{
    abstract protected function makeSound();
}
interface AnimalInterface{
    public function make();
}
class Dog extends Animal implements AnimalInterface{
    public function makeSound(){
        return "Sonu ";
    }
    public function make(){
        return " Love You";
    }
}
$dob = new Dog();
echo $dob->makeSound() . " " . $dob->make();

