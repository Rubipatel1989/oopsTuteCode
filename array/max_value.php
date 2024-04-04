<?php 
function printMaxValue($array) {
    $maxValue = null;  // Initialize a variable to track the maximum value

    foreach ($array as $item) {
        if (is_array($item)) {
            $maxValue = max($maxValue, printMaxValue($item));  // Recursive call for nested arrays
        } else {
            $maxValue = max($maxValue, $item);  // Update maxValue for non-array elements
        }
    }

    return $maxValue;  // Return the maximum value found
}
$array = $b = array(1, 2, 3, 4, 555, 6, 7, 89, 9);
// $array = [
//     100, 95, [
//         [
//             60, 70, 80
//         ],
//         50, 400
//     ]
// ];

$maxValue = printMaxValue($array);
echo "Maximum value: $maxValue\n";