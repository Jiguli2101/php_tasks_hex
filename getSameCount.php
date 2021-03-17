<?php
    function getSameCount($firstArray, $secondArray)
    {
        $count = 0;
        $unique_1 = array_unique($firstArray);
        $unique_2 = array_unique($secondArray);
        foreach($unique_1 as $item) {
            foreach($unique_2 as $subItem) {
                if ($item === $subItem) {
                    $count++;
                }
            }
        }
        return $count;
    }

getSameCount([], []); // => 0
getSameCount([1, 10, 3], [10, 100, 35, 1]); // => 2
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // => 3
