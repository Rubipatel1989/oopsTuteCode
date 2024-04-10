<?php
// PHP doesn't support true method overloading like some other languages. However, you can 
//     achieve similar functionality using magic methods, specifically __call.

// 1. Define a class with a __call method. This method takes two arguments: the name of the called 
//     method and an array of arguments passed to it.
// 2. Inside the __call method, you can check the called method name and the number of arguments.
// 3. Based on the combination of name and arguments, you can perform different actions 
//     within the method.

class Shape {
    const PI = 3.142;
  
    public function __call($name, $arguments) {
      if ($name == 'area') {
        switch (count($arguments)) {
          case 0:
            return 0;
          case 1:
            return self::PI * $arguments[0]; // Area of circle
          case 2:
            return $arguments[0] * $arguments[1]; // Area of rectangle
          default:
            throw new Exception("Invalid number of arguments for area()");
        }
      } else {
        throw new Exception("Undefined method '$name'");
      }
    }
  }
  
  $circle = new Shape();
  echo $circle->area(3); // Output: 28.274
  
  $rectangle = new Shape();
  echo $rectangle->area(5, 4); // Output: 20