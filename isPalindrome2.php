<?php
function isPalindromeReverse($word)
{
    $l = mb_strlen($word);
    if ($l <= 0) {
        return false;
    }
    $reverse = '';
    for ($i = $l; $i >= 0; $i--) {
        $reverse .= mb_substr($word, $i, 1);
    }
    return $reverse === $word;
}

isPalindromeReverse('radar'); // true
isPalindromeReverse('maam'); // true
isPalindromeReverse('a');     // true
isPalindromeReverse('abs');   // false
