<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php 
    $num1 = 4;
    $num2 = 35;
    $num3 = 23;

    if ($num1 == 0){
        echo "No es posible calcular una ecuación de segundo grado si el primer número es 0.";
    } else {
        $calculoDicrimiente = ($num2 ** 2) - (4 * $num1 * $num3);

        
        if ($calculoDicrimiente > 0){
            $solución1 = (-$num2 + sqrt($calculoDicrimiente)) / (2 * $num1);
            $solución2 = (-$num2 - sqrt($calculoDicrimiente)) / (2 * $num1);
            echo "La ecuación tiene dos soluciones reales: <br>";
            echo "solución 1 = " . $solución1 . "<br>";
            echo "solución 2 = " . $solución2 . "<br>";

        } elseif ($calculoDicrimiente == 0) {
            $x = -$num2 / (2 * $num1);
            echo "La ecuación tiene una solución única: <br>";
            echo "x = " . $x;
        
        } else {
            echo "La ecuación no tiene soluciones reales";
        }
    }
    ?>
</body>
</html>