<?php
// Overriding is work with parent child concept. It must be 2 or more than 2 class in overriding. 
// When a method of parent class is override in child class then this is called overriding.

class Dad {

    public function bike() {
        echo "Bike";
    }

}

class Son extends Dad {

    public function bike() {
        echo "New Bike";
    }

}

$bike = new Son();
echo $bike->bike();
echo "<br>";

