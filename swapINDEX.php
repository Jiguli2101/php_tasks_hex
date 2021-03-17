<?php
$names = ['john', 'smith', 'karl'];

function swap($names,$key){
    $left=$key-1;
    $right=$key+1;

    if (array_key_exists($left, $names)) {

        if (array_key_exists($right, $names)) {
            $temp = $names[$left];
            $names[$left] = $names[$right];
            $names[$right] = $temp;
            print_r($names);

        }else{
            print_r($names);
        }

    }else{
        print_r($names);
    }
}

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']


