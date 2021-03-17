<?php
declare(strict_types=1); # включение режима строго типизации


# Итеративно
function luke_iteration($dlina_iteration)
{
    $luke_massive_iteration = [];
    $n_iteration = 0;
    $dlina_iteration = $dlina_iteration -1;

    while (!empty($dlina_iteration) && ($n_iteration <= $dlina_iteration)) {
        $Ln_iteration = (pow(1.61803398875, $n_iteration)) + (pow(-0.61803398875, $n_iteration));
        ++$n_iteration;
        #  т.к. intval(1) = 0;
        $LnZ_iteration = (int)str_replace(' ', '', $Ln_iteration);
        array_push($luke_massive_iteration, $LnZ_iteration);
    }
    return $luke_massive_iteration;
}
echo "~~~~~ ~~~~~ Итераторы: ".PHP_EOL;
print_r (luke_iteration(20));


# Рекурсивно

function luke_recursion($dlina_recursion){

    $luke_massive_recursion = [];
    $n_recursion=0;
    $dlina_recursion = $dlina_recursion -1;
    if (!empty($dlina_recursion) && ($n_recursion <= $dlina_recursion)){
        for ($n_recursion=0; $n_recursion <= $dlina_recursion; $n_recursion++) {
            $Ln_recursion = (pow(1.61803398875,$n_recursion))+(pow(-0.61803398875,$n_recursion));
            #  intval(1) = 0;
            $LnZ_recursion = (int)str_replace(' ', '', $Ln_recursion);
            array_push($luke_massive_recursion,$LnZ_recursion);
        }

    }else{
        echo "Введите длину не больше 166 и не 0";
    }

    return $luke_massive_recursion;
}
echo "~~~~~ ~~~~~ Рекурсия: ".PHP_EOL;
print_r (luke_recursion(20));





# Генераторы

function luke_generators($dlina_generators){
    $n_generators = 0;
    #$dlina_generators = $dlina_generators - 1;
    if (!empty($dlina_generators) && ($n_generators <= $dlina_generators)) {
        for ($n_generators=0; $n_generators <= $dlina_generators; $n_generators++){
            $Ln_generators = (pow(1.61803398875, $n_generators)) + (pow(-0.61803398875, $n_generators));
            $LnZ_generators = (int)str_replace(' ','',$Ln_generators);
            yield $LnZ_generators;
        }
    }else{
        echo "Введите длину не больше 166 и не 0".PHP_EOL;
    }
}

$generator = luke_generators(20);
echo "~~~~~ ~~~~~ Генераторы: ".PHP_EOL;
foreach ($generator as $value) {
    echo "$value\n";
}








$count = 50;
    echo '#Выполнение итеративной функции' . PHP_EOL;
    $beforeTime = microtime(true);
    echo luke_iteration($count) . PHP_EOL;
    $time = number_format(microtime(true) - $beforeTime, 8);
    echo $time . PHP_EOL;

    echo '#Выполнение рекурсивной функции' . PHP_EOL;
    $beforeTime = microtime(true);
    echo luke_recursion($count) . PHP_EOL;
    $time = number_format(microtime(true) - $beforeTime, 8);
    echo $time . PHP_EOL;

    echo '#Выполнение  функции с генератором' . PHP_EOL;
    $beforeTime = microtime(true);
    $gen = luke_generators($count);
    foreach ($gen as $value) {
        $count--;
        if ($count === 0 ) {
            break;
        }
    }
    $time = number_format(microtime(true) - $beforeTime, 8);
    echo $time . PHP_EOL;







