<?php

class LetterCounter
{
    public static function CountLettersAsString($requestData)
    {
        $requestData = strtolower($requestData);
        $charCount = [];

        // Count
        foreach (str_split($requestData) as $char) {
            if (ctype_alpha($char)) {
                if (isset($charCount[$char])) {
                    $charCount[$char]++;
                } else {
                    $charCount[$char] = 1;
                }
            }
        }

        // create output string
        $output = [];
        foreach ($charCount as $letter => $count) {
            $output[] = "$letter:" . str_repeat("*", $count);
        }

        return implode(",", $output);
    }
}

$obj = new LetterCounter();
echo $obj->CountLettersAsString("Kumar");