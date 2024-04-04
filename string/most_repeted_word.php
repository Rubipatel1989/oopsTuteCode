<?php
function findMostRepeatedWord($string) {
    $words = str_word_count(strtolower($string), 1); // Split string into array of words
    $wordCounts = array_count_values($words); // Count occurrences of each word

    $mostRepeatedWord = "";
    $highestCount = 0;

    foreach ($wordCounts as $word => $count) {
        if ($count > $highestCount) {
            $mostRepeatedWord = $word;
            $highestCount = $count;
        }
    }

    return $mostRepeatedWord;
}

$string = "Hello world hello hello hello hello hello PHP PHP PHP PHP";
echo "Most repeated word: " . findMostRepeatedWord($string);