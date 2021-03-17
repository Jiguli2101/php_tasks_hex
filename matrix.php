<?php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 0],

];

/* Правило треугольников */

echo "Правило треугольников, определитель третьего порядка равен: ",
    $matrix[0][0] *  $matrix[1][1] * $matrix [2][2] +
    $matrix[2][0] *  $matrix[0][1] * $matrix [1][2] +
    $matrix[0][2] *  $matrix[1][0] * $matrix [2][1] -

    $matrix[2][0] *  $matrix[1][1] * $matrix [0][2] -
    $matrix[2][2] *  $matrix[1][0] * $matrix [0][1] -
    $matrix[0][0] *  $matrix[2][1] * $matrix [1][2]  ;

