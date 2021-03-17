<?php

function without(array $items, ...$values)
{
    $filtered = array_filter($items, function ($item) use ($values) {
        return !in_array($item, $values);
    });

    return array_values($filtered);
}


without([3, 4, 10, 4, 'true'], 4); // => [3, 10, 'true']
without(['3', 2], 0, 5, 11); // => ['3', 2]
