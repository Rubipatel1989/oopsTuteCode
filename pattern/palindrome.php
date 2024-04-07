<?php
 //palindrome विलोमपद
function palindrome($input){
    $input_string = strval($input);
    $length = strlen($input_string);
    $mid = floor($length/2);
    for($i = 0; $i <= $mid; $i++){
        if($input_string[$i] != $input_string[$length - $i - 1]){
            return false;
        }
    } 
    return true;
}

if(palindrome($string)){
    echo " String is palindrome";
} else{
    echo " String not palindrome";
}

$string = 'Pawan';
palindrome($string);