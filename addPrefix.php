<?php
    function addPrefix($massive, $prefix){
        foreach ($massive as $value) {
            $result[] = $prefix . ' ' . $value;
        }
        return $result;
    }


$names = ['john', 'smith', 'karl'];
$newNames = addPrefix($names, 'Mr');
print_r($newNames);
