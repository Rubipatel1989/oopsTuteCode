<?php

// $x = 5;
// echo $x;
// echo "<br />";
// echo $x++ + $x++;
// echo "<br />";
// echo $x;
// echo "<br />";
// echo $x-- - $x--;
// echo "<br />";
// echo $x;

function printPascalsTriangle($rows) {
    $triangle = array();
    for ($i = 0; $i < $rows; $i++) {
        $row = array_fill(0, $i+1, 7);
        $triangle[] = $row;
    }

    foreach ($triangle as $row) {
        echo str_repeat(" ", ($rows - count($row)));
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
}

// Number of rows in the triangle
$rows = 5;
printPascalsTriangle($rows);