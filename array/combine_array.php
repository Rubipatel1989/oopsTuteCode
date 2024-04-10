<?php

//In array_combine count of values in both array must be equal, otherwise give error.

// $a = ['x' => 1, 'y' => 2];
// $b = ['z' => 3, 'l' => 3];
// $c = array_combine($a, $b);

// print_r($c);

// Array
// (
//     [1] => 3
//     [2] => 3
// )

$a = [1, 2];
$b = [3, 4];
$c = array_combine($a, $b);
echo "<pre>";
print_r($c);

// Array
// (
//     [1] => 3
//     [2] => 4
// )