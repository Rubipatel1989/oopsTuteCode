<?php
function findMostRepeatedCharacter($string) {
    $chars = str_split(strtolower($string)); // Split string into array of characters
    $charCounts = array_count_values($chars); // Count occurrences of each character

    $mostRepeatedChar = "";
    $highestCount = 0;

    foreach ($charCounts as $char => $count) {
        if ($count > $highestCount) {
            $mostRepeatedChar = $char;
            $highestCount = $count;
        }
    }

    return $mostRepeatedChar;
}

$string = "Hello, world! Pa aa aapa";
echo "Most repeated character: " . findMostRepeatedCharacter($string);