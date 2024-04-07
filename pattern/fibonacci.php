<?php
//Write a fibonacci series till largest number is less than 50

function fibonacci($n){
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    for ($i = 2; $fib[$i - 1] < $n; ++$i) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        if ($fib[$i] >= $n) break; // Break the loop if the next Fibonacci number exceeds 50
    }
    return $fib;
}

// Generate Fibonacci series till the largest number is less than 50
$fib_series = fibonacci(50);

// Output the Fibonacci series
echo "Fibonacci series till the largest number less than 50:\n";
foreach ($fib_series as $number) {
    echo $number . " ";
}
