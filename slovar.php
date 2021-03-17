<?php
function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $key = crc32($key) % 1000;
    if (array_key_exists($key, $map)) {
        $result = false;
    } else {
        $map[$key] = $value;
        $result = true;
    }
    return $result;
}


function get(&$map, $key, $value = null)
{
    $key = crc32($key) % 1000;
    if (array_key_exists($key, $map)) {
        $result = $map[$key];
    } else {
        $result = $value;
    }
    return $result;
}

/*
$map = make();
$result = get($map, 'key');
print_r($result); // => null

set($map, 'key', 'value');
$result = get($map, 'key', 'value');
print_r($result); // => value

set($map, 'key2', 'value2');
$result = get($map, 'key2');
print_r($result); // => value2
*/