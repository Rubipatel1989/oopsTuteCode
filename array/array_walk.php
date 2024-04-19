<?php
// array_walk is a PHP function used to apply a user-defined function to each element of an array.
// It modifies the array elements in place. The main purpose of array_walk is to perform 
// an operation on each element of an array without needing to manually loop through the array.


$array = ["apple", "orange", "banana"];

function addPrefix(&$value, $key, $prefix)
{
    $value = $prefix . $value;
}

array_walk($array, 'addPrefix', 'fruit_');

print_r($array);

// Array
// (
//     [0] => fruit_apple
//     [1] => fruit_orange
//     [2] => fruit_banana
// )

