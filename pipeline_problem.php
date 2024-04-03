<?php
function make_pipeline(...$funcs)
{
    return function ($arg) use ($funcs) {
        return array_reduce($funcs, function ($result, $func) {
            return $func($result);
        }, $arg);
    };
}

$fun = make_pipeline(
    function ($x) {
        return $x * 3;
    },
    function ($x) {
        return $x + 1;
    },
    function ($x) {
        return $x / 2;
    },
    function ($x) {
        return $x + 20;
    }

);

echo $fun(3); # should print 25
