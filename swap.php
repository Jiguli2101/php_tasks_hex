<?php

    function swap(&$a, &$b) {
        $a+=+$b-$b=$a;
    }

    $a = 5;
    $b = 8;


swap($a, $b);
print_r($a);
print_r($b);
