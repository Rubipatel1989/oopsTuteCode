<?php

// A return-type declaration, also known as a return type hint, is a feature in PHP that 
// allows you to specify the data type of the value that a function should return. This helps in 
// enforcing the correct return type, improving code readability, and reducing errors.

// In PHP, you can specify the return type of a function using a colon (:) followed 
// by the desired type after the closing parenthesis of the parameter list and before the 
// opening curly brace of the function body. For example:

    function sum(int $a, int $b): int {
        return $a + $b;
    }
    