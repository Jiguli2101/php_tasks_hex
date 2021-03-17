<?php
function simple($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if (($num % $i) === 0) {
            return false;
        }
    }
    return true;
}

function sayPrimeOrNot($num)
{
    simple($num) ? print_r('yes') : print_r('no');
}



sayPrimeOrNot(5); // => yes
sayPrimeOrNot(4); // => no
