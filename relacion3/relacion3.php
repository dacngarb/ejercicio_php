<?php

function esPrimo($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}


function esPrimoRecursivo($num, $divisor = 2)
{
    if ($num < 2) {
        return false;
    }

    if ($divisor == $num) {
        return true;
    }

    if ($num % $divisor == 0) {
        return false;
    }

    return esPrimoRecursivo($num, $divisor + 1);
}


function factorial($num)
{
    $resultado = 1;

    for ($i = 1; $i <= $num; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}


function factorialRecursivo($num)
{
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * factorialRecursivo($num - 1);
    }
}


function division($num1, $num2)
{
    $cociente = 0;
    $resto = $num1;

    while ($resto >= $num2) {
        $resto = $resto - $num2;
        $cociente++;
    }

    return array($cociente, $resto);
}


function divisionRecursiva($num1, $num2, $cociente = 0)
{
    if ($num1 < $num2) {
        return array($cociente, $num1);
    } else {
        return divisionRecursiva($num1 - $num2, $num2, $cociente + 1);
    }
}


function mcd($num1, $num2)
{
    while ($num2 != 0) {
        $resto = $num1 % $num2;
        $num1 = $num2;
        $num2 = $resto;
    }

    return $num1;
}


function mcdRecursivo($num1, $num2)
{
    if ($num2 == 0) {
        return $num1;
    } else {
        return mcdRecursivo($num2, $num1 % $num2);
    }
}

?>