<?php

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];

    function findIndex($temperatures, $num){
        $net = -1;
        if (in_array($num, $temperatures)) {
          $newArr = array_keys($temperatures, $num);
          return $newArr[0];
        }else{
            return $net;
        }
    }





findIndex($temperatures, 34); // => 1
findIndex($temperatures, 40); // => 3
findIndex($temperatures, 3);  // => -1
