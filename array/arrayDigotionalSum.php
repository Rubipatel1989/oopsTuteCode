<?php

##1. ########## Array arrayDigotional Sum
$arr = array(
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
);
$diagonalSum = 0;
foreach ($arr as $k => $arr1) {
    $diagonalSum += $arr1[$k];
}


echo $diagonalSum . "<br>";

