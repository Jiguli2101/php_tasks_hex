<?php
$data = [
    [-5, 7, 1],
    [3, 2, 3],
    [-1, -1, 10],
];

    function getIndexOfWarmestDay($array)
    {
        if (empty($array)) {
         return null;
        }
             foreach ($array as $value) {
            $resultArray[] = max($value);
        }
        $max = max($resultArray);
        foreach ($resultArray as $key => $value) {
            if ($value === $max) {
                return $key;
            }
        }
    }

getIndexOfWarmestDay($data);