<?php
function getIntersectionOfSortedArray($arr_1, $arr_2)
{
    $result = [];
    $i = 0;
    $j = 0;
    if (empty($arr_1) || empty($arr_2)) {
        return $result;
    }
    do {
        if ($arr_1[$i] === $arr_2[$j]) {
            $result[] = $arr_1[$i];
            $i++;
            $j++;
        } elseif ($arr_1[$i] > $arr_2[$j]) {
            $j++;
        } else {
            $i++;
        }
    } while ($i < count($arr_1) && $j < count($arr_2));

    return $result;
}

getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
// => [10, 24]

