<?php

function uncaret(array &$target, string $caretString, $value)
{
    $caretExplode = explode('^', $caretString);
    $targetVal = &$target;
    
    foreach ($caretExplode as $key) {
        if (!isset($targetVal[$key])) {
            $targetVal[$key] = [];
        }
        $targetVal = &$targetVal[$key];
    }
    
    $targetVal = $value;
}

$profile = ['2021' => ['Donations' => 200, 'Recruitment' => 20]];

uncaret($profile, "2021^Recruitment", 2);
uncaret($profile, "2021^Volunteering^Hours", 2);
uncaret($profile, "2021^Volunteering^Days", 1);

echo "<pre>";
print_r($profile);