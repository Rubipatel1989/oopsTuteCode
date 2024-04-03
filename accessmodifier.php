<?php
class Fruit {
    public $name = 'Mango';
    protected $color = 'Red';
    private $weight = '12.34';
  }
  
  $mango = new Fruit();
  $mango = $mango->name; // OK
  $color =$mango->color; // ERROR
  $weight = $mango->weight; // ERROR
  
  echo $mango;
  echo $color;
  echo $weight;