<?php

//find all possibel pairs which is equal to 12 and all pairs must be unique;
$numbers =  [7,5,11,1,9,3,1,11,5,7];
$unique_pairs = array();
for ($i = 0; $i < count($numbers) - 1; $i++) {
    for ($j = $i + 1; $j < count($numbers); $j++) {
        if ($numbers[$i] + $numbers[$j] === 12) {
            // Check if the pair is already in the unique_pairs array
            $pair = array($numbers[$i], $numbers[$j]);
            sort($pair); // Sort the pair to ensure uniqueness
            if (!in_array($pair, $unique_pairs)) {
                $unique_pairs[] = $pair;
            }
        }
    }
}

// Print unique pairs
echo "Unique pairs that sum up to 12:\n";
foreach ($unique_pairs as $pair) {
    echo "(" . $pair[0] . ", " . $pair[1] . ")\n";
}
