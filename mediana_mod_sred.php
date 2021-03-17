<?php
require_once __DIR__ . '\..\vendor\autoload.php';
use MathPHP\Statistics\Average;


function luke_iteration($dlina_iteration)
{
    $luke_massive_iteration = [];
    $n_iteration = 1;

    while (!empty($dlina_iteration) && ($n_iteration <= $dlina_iteration)) {
        $Ln_iteration = (pow(1.61803398875, $n_iteration)) + (pow(-0.61803398875, $n_iteration));
        # сделал If, т.к. intval(1) = 0;
        if ($Ln_iteration < 2) {
            array_push($luke_massive_iteration, $Ln_iteration);
        } elseif ($Ln_iteration > 2) {
            $LnZ_iteration = intval($Ln_iteration);
            array_push($luke_massive_iteration, $LnZ_iteration);
        }
        ++$n_iteration;
    }
    return $luke_massive_iteration;
}



function sred_arif($massive,$ot,$do){
    echo "\n---\n";
    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    $result = Average::mean($slice);
    echo "Sredn arif: ".PHP_EOL;
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

    $result = Average::geometricMean($slice);
    echo "Sredn geom: ".PHP_EOL ;
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
    echo "Sredn harm: " .PHP_EOL;
    print_r (Average::harmonicMean($slice));
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
    $result = Average::median($slice);
    echo "mediana: ".PHP_EOL;
    print_r ($result);

}
mediana(luke_iteration(20),0,11);




function mod($massive,$ot,$do){
    if (!count($massive)) {
        return 0;
    }

    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    echo "\n---\n";
    echo "mode: " . PHP_EOL;

    $massive_stroka = implode($slice);
    $digits = str_split($massive_stroka);
    $result = Average::mode($digits);
    print_r ($result);
}
mod(luke_iteration(20),0,18);





function sred_otkl($massive,$ot,$do){
    if (!count($massive)) {
        return 0;
    }
    $do = $do+1;
    $slice = array_slice($massive, $ot, $do);
    echo "\n---\n";
    $value = Average::quadraticMean($slice);
    echo "sredn kvdrat otkl: ".PHP_EOL;
    print_r ($value);
}

sred_otkl(luke_iteration(20),0,7);