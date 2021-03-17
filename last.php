<?php

$last = function ($string) {
    if (empty($string)) {
        $last = null;
    } else {
        $last = $string[-1];
    }
    return $last;
};

print_r ($last('')); // => null
print_r($last('pow')); // => w
$last('kids'); // => s
