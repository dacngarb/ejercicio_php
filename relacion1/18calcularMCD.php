<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php

        $num1 = 48;
        $num2 = 28;

        while ($num2 != 0) {
            $resto = $num1 % $num2;
            $num1 = $num2;
            $num2 = $resto;
        }

        echo "El máximo común divisor es: " . $num1;

    ?>

</body>
</html>