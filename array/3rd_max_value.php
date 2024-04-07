
<?php
// Array of numbers
$numbers = array(10, 5, 23, 9, 17, 31, 42, 80);

// Sort the array in descending order
for ($i = 0; $i < count($numbers) - 1; $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] < $numbers[$j]) {
            // Swap elements
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}

// Print the sorted array
//echo "Sorted array in descending order:\n";
foreach ($numbers as $number) {
    echo $number . " ";
}

// Find the 3rd largest element
$third_largest = $numbers[2];
echo "\n\nThird largest element is: " . $third_largest;
?>
