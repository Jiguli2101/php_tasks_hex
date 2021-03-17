<?php

function isPalindrome($word)
{
    $l = mb_strlen($word);
    if ($l <= 0) {
        return false;
    }
    for ($i = 0; $i <= ($l / 2); $i++) {
        if ($word[$i] !== $word[($l - 1) - $i]) {
            return false;
        }
    }
    return true;
}


isPalindrome('qw1q');
isPalindrome('radar'); // true
isPalindrome('maam'); // true
isPalindrome('a');     // true
isPalindrome('abs');   // false
