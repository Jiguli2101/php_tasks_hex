<?php
function getDifference(array $arr1, array $arr2)
{
    $Diff = array_filter($arr1, function ($item) use ($arr2) {
        return !in_array($item, $arr2);
    });

    return array_values($Diff);
}

print_r (getDifference([2, 1], [2, 3]));