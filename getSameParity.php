<?php

function getSameParity($array)
{
    if (empty($array)) {   //проверяем массив на пустоту
        return $array;
    }
    $newArray = [];
    if ($array[0] % 2 == 0) {
        foreach ($array as $item) {
            if ($item % 2 == 0) {
                $newArray[] = $item;
            }
        }
    } elseif ($array[0] % 2 != 0) {
        foreach ($array as $item) {
            if ($item % 2 != 0) {
                $newArray[] = $item;
            }
        }
    }
    return $newArray;
}

getSameParity([]);        // => []
getSameParity([1, 2, 3]); // => [1, 3]
getSameParity([1, 2, 8]); // => [1]
getSameParity([2, 2, 8]); // => [2, 2, 8]

