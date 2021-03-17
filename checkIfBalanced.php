<?php

function checkIfBalanced($expr)
{
    $stack = [];
    for ($i = 0; $i < strlen($expr); $i++) {
        $cur = $expr[$i];
        if ($cur === '(') {
            array_push($stack, $cur);
        } elseif ($cur === ')') {
            $prev = array_pop($stack);
            $pair = "{$prev}{$cur}";
            if ($pair !== '()') {return false;}
        }
    } return count($stack) == 0;
}






checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // => true
checkIfBalanced('(4 + 3))'); // => false
