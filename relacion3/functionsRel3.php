<?php

function swap(&$n1, &$n2) {

    $aux = $n1;
    $n1 = $n2;
    $n2 = $aux;

}

function invertirArray(&$array) {

    $inicio = 0;
    $final = count($array) - 1;

    while ($inicio < $final) {

        swap($array[$inicio], $array[$final]);

        $inicio++;
        $final--;

    }

}

?>