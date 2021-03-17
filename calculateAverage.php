<?php

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

    function calculateAverage($temperatures)
    {
        if (empty($temperatures)) {
            return null;
        }else{
            $middle = array_sum($temperatures)/count($temperatures);
             return $middle;
        }

    }


calculateAverage($temperatures); // => 38.5




