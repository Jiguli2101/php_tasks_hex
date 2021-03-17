<?php

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}
function genDiff(array $data1, array $data2)
{
    $keys = union(array_keys($data1), array_keys($data2));
    $result = [];
    foreach ($keys as $key) {
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } elseif ($data1[$key] !== $data2[$key]) {
            $result[$key] = 'changed';
        } elseif ($data1[$key] === $data2[$key]) {
            $result[$key] = 'unchanged';
        }
    }
    return $result;
}


$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);
