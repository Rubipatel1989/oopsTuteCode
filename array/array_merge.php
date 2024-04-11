<?php

// In PHP, the array_merge function is used to merge two or more arrays into 
// a single  array. It takes multiple arrays as arguments and returns a 
// new array containing all the elements of the input arrays.
$array1 = array('a', 'b', 'c');
$array2 = array(1, 2, 3);
$array3 = array('x', 'y', 'z');

$result = array_merge($array1, $array2, $array3);

print_r($result);

Array
(
    [0] => a,
    [1] => b,
    [2] => c,
    [3] => 1,
    [4] => 2,
    [5] => 3,
    [6] => x,
    [7] => y,
    [8] => z,
);
