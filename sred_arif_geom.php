<?php


function sred_arif($massive,$ot,$do){
    echo "\n---\n";
    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    $result = array_sum($slice) / sizeof($slice);
    echo "Средн. ариф: ".PHP_EOL;
    echo $result;
}
 sred_arif(luke_iteration(20),0,7);


function sred_geom($massive,$ot,$do){
 echo "\n---\n";
    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    $n = count($slice);

    if (!count($slice)) {
        return 0;
    }

    $total = count($slice);
    $power = 1 / $total;

    $chunkProducts = array();
    $chunks = array_chunk($slice, 10);

    foreach ($chunks as $chunk) {
        $chunkProducts[] = pow(array_product($chunk), $power);
    }

    $result = array_product($chunkProducts);
    echo "Среднее геометрическое: ".PHP_EOL ;
    print_r ($result);
}
sred_geom(luke_iteration(20),0,7);





function sred_harmonic ($massive,$ot,$do) {
 echo "\n---\n";
    if (!count($massive)) {
        return 0;
    }

    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    $n = count($slice);
    for ($i = 0; $i < $n; $i++) {
        $sum += 1 / ($slice[$i]);
    }
    echo "Среднее гармоническое: " .PHP_EOL;
    print_r ($n / $sum);
}

sred_harmonic(luke_iteration(20),0,10);




function mediana($massive,$ot,$do){
    if (!count($massive)) {
        return 0;
    }

    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    echo "\n---\n";
    sort($slice);
    $count = sizeof($slice);   // cache the count
    $index = floor($count/2);  // cache the index
    if (!$count) {
        echo "no values";
    } elseif ($count & 1) {    // count is odd
        echo 'медиана для нечетной последовательности: ' .PHP_EOL;
        echo  $slice[$index];
    } else {
        echo 'медиана для четной последовательности: ' .PHP_EOL; // count is even
        echo  ($slice[$index-1] + $slice[$index]) / 2;
    }

}
mediana(luke_iteration(20),0,11);



# mod
function mod($massive,$ot,$do){
    if (!count($massive)) {
        return 0;
    }

    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    echo "\n---\n";
    echo "нахождение моды последовательности: " . PHP_EOL;

    $massive_stroka = implode($slice);
    $digits = str_split($massive_stroka);
    $max_element_massive= array_count_values($digits);
    arsort($max_element_massive);

    reset($max_element_massive);
    $current_m = current ($max_element_massive);
    $next_1 = next($max_element_massive);
    $maxFrequentElement = key($max_element_massive);
    if ($current_m == $next_1){
        $filtred = array_filter($max_element_massive,$current_m);
        echo 'Их несколько';
        print_r (array_keys($filtred));
    }else{
        print_r ($maxFrequentElement);
    }
}
mod(luke_iteration(20),0,19);





function sred_otkl($massive,$ot,$do){
    if (!count($massive)) {
        return 0;
    }

    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    echo "\n---\n";
    $value = sqrt(array_reduce($slice, function($prev, $item){
                      return $prev + pow($item, 2);
                  }, 0) / count($slice));
    echo "среднее квадратичное отклонение: ".PHP_EOL;
    print_r ($value);
}

sred_otkl(luke_iteration(20),0,7);






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