<?php 
function findMaxMinMulti($arr) {
    if (empty($arr)) {
        return null; // or handle empty array as needed
    }

    $max = $min = $arr[0];

    foreach ($arr as $subarray) {
        if(is_array($subarray) && count($subarray) >= 1){
            foreach ($subarray as $value) {
                if ($value > $max) {
                    $max = $value;
                }
    
                if ($value < $min) {
                    $min = $value;
                }
            }
        } else{            
            if ($subarray > $max) {
                $max = $subarray;
            }

            if ($subarray < $min) {
                $min = $subarray;
            }
        }
        
    }

    return ["max" => $max, "min" => $min];
}

$array = [100,
    [30, 5, 31],
    [9, 4, 7],
    [200, 8, 6]
];

$result = findMaxMinMulti($array);
echo "Max: " . $result["max"] . ", Min: " . $result["min"];
