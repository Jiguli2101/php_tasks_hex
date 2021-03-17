<?php

function getComposerFileData($path)
{
    $json= file_get_contents($path);
    return json_decode($json, true);
}

$path = '../composer.json';
print_r(getComposerFileData($path));

