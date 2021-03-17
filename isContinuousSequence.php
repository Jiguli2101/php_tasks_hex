<?php

function isContinuousSequence($array)
{
    if(empty($array)) return false;
    $first = reset($array);
    foreach ($array as $i => $num) {
        if( $num !== $i + $first) {
            return false;
            #print_r ("false");
        }
    }
    if(!( $num !== $i + $first)) {
        return true;
        #print_r ("true");
    }
}


isContinuousSequence([10, 11, 12, 13, 14]);

