<?php

function reverse($num)
{
    $digits = str_split(abs($num));

    $reversed = [];
    for ($i = sizeof($digits) - 1; $i >= 0; $i--) {
        $reversed[] = $digits[$i];
    }
    $newNumber = (int) implode('', $reversed);

    return $num > 0 ? $newNumber : -$newNumber;
}


reverse(13); // 31
reverse(-123); // -321
