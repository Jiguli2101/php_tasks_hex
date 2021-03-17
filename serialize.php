<?php

function dump($filename, $structure)
{
    if (!is_file($filename)) {
        touch($filename);
    }

    if (empty($structure)) {
        $result = false;
    } else {
        $text = serialize($structure);
        $fd = fopen($filename, "w");
        if (!$fd) {
            echo ('Невозможно открыть файл');
        }
        fwrite($fd, $text);
        fclose($fd);
        $result = true;
    }

    return $result;
}


function load($filename)
{
    $fd = fopen($filename, "r");
    if (!$fd) {
        echo ('Невозможно открыть файл');
    }
    $text = fread($fd, filesize($filename));
    fclose($fd);

    $obj = unserialize($text);
    return $obj;


}


$data = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

dump('/save', $data);
$loaded_data = load('/save');
if ($data === $loaded_data) {
    echo 'Данные извлечены успешно';
} else {
    echo 'Что то не так';
}


