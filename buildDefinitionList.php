<?php

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];



function buildDefinitionList($list)
{
    $parts = [];
    if (empty($list)) {
        return '';
    }
    foreach ($list as $item) {
        $parts[] = "<dt>{$item[0]}</dt><dd>{$item[1]}</dd>";
    }
    $innerString = implode('', $parts);
    return "<dl>{$innerString}</dl>";
}

buildDefinitionList($definitions);