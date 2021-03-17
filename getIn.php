<?php
function getIn(array $data, array $keys)
{
    $current = $data;
    foreach ($keys as $key) {
        if (!isset($current[$key])) {
            return null;
        }
        $current = $current[$key];
    }
    return $current;
}

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];


getIn($data, ['undefined']);        // => null
getIn($data, ['user']);             // => 'ubuntu'
getIn($data, ['user', 'ubuntu']);   // => null
getIn($data, ['hosts', 1, 'name']); // => 'web2'
getIn($data, ['hosts', 0]);         // => ['name' => 'web1']
