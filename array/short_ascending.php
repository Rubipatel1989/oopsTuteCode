<?php
// Define an array
$array = [5, 2, 8, 1, 9, 4];

// Sort the array in ascending order without using predefined functions
$shortArray = [];
$min = PHP_INT_MAX;
echo $min; die;
// Find the minimum value in the array
foreach ($array as $value) {
    if ($value < $min) {
        $min = $value;
    }
}

// Add the minimum value to the shortened array
$shortArray[] = $min;

// Find the next minimum value greater than the previous value
while (count($shortArray) < count($array)) {
    $nextMin = PHP_INT_MAX;
    foreach ($array as $value) {
        if ($value > end($shortArray) && $value < $nextMin) {
            $nextMin = $value;
        }
    }
    $shortArray[] = $nextMin;
}

// Display the shortened array
print_r($shortArray);