<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php

        $num = 25;
        $binario = "";

        while ($num > 0) {
            $resto = $num % 2;
            $binario = $resto . $binario;
            $num = intdiv($num, 2);
        }

        echo "El número en binario es: " . $binario;

    ?>
</body>
</html>