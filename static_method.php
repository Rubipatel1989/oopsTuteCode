<?php

// Static methods can be called directly - without creating an instance of the class first. 
// Static methods are declared with the static keyword:

class Animal{
    public static function cow($name){
        echo " Animal is " . $name;
    }
}
Animal::cow('Cow');