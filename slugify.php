<?php
function slugify(string $str)
{
    $str = trim($str);
    $str = preg_replace('/[[:space:]][[:space:]]+/u', ' ', $str);
    $lower = strtolower($str);
    $array = explode(" ", $lower);
    $result = implode('-', $array);
    print_r ($result .PHP_EOL);
}

slugify(''); // ''
slugify('test'); // 'test'
slugify('test me'); // 'test-me'
slugify('La La la LA'); // 'la-la-la-la'
slugify('O la      lu'); // 'o-la-lu'
slugify(' yOu   '); // 'you'
