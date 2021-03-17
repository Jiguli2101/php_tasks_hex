<?php
function bubbleSort($array)
{
    $count = count($array);
    do {
        $swapped = false;
        for ($i = 0; $i < $count - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $swapped = true;
            }
        }
    } while ($swapped);

    return $array;
}



bubbleSort([]); // => []
bubbleSort([3, 10, 4, 3]); // => [3, 3, 4, 10]
