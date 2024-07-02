<?php
// Type declaration, also known as type hinting, is a feature in PHP that allows 
// you to specify the expected data type of a function's parameters or return value. 
// This helps in enforcing the correct usage of data types, improving code readability, and reducing errors.

// In PHP, you can use type declarations for the following data types:

// 1. Scalar types (int, float, string, bool): You can specify these types directly in the function 

function sum(int $a, int $b): int
{
    return $a + $b;
}
// 2. Compound types (array, callable, iterable, object): You can specify these types using 
// the type name in the function signature. For example:


function processArray(array $arr): void
{
    // Process the array
}
// 3. Nullable types: You can specify that a parameter or return value can be null by adding a question
// mark (?) before the type name. For example:

function getValue(?string $name): ?string
{
    return $name;
}
