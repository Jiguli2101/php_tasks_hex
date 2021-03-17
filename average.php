<?php

function average(...$arg)
{
    if (!empty($arg)) {
        return array_sum($arg) / count($arg);
    } else {
        return null;
    }
}

average(0); // => 0
average(0, 10); // => 5
average(-3, 4, 2, 10); // => 3.25
average(); // => null
