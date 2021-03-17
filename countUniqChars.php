<?php

function countUniqChars($text)
{
    if ($text === '') {
        return 0;
    }
    $arrayChars = str_split($text);
    $result = [];
    foreach ($arrayChars as $char) {
        if (!in_array($char, $result)) {
            $result[] = $char;
        }
    }
    return count($result);
}

$text1 = 'yyab';
countUniqChars($text1); // => 3

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // => 13

$text3 = '';
countUniqChars($text3); // => 0
