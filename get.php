<?php
    function get($massive,$index,$value=NULL){
        if (array_key_exists($index, $massive)) {
            $value = $massive[$index];
        }
        return $value;
    }

$cities = ['moscow', 'london', 'berlin', 'porto'];
get($cities, 1); // => london
get($cities, 4); // => null
get($cities, 10, 'paris'); // => paris
