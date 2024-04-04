<?php
// The Factory Method pattern defines an interface for creating objects but lets subclasses decide which class to 
// instantiate. In PHP, you can implement it by defining an abstract class with a method for creating objects, 
// which subclasses then implement to create specific instances.

interface FamilyfactoryInterface{
    public function create(): Family;
}

class FamilyFactory implements FamilyfactoryInterface{
    public function create(): Family{
        $family = new Family();
        return $family;
    }
}
