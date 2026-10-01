<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $num1 = 2;
        $num2 = 23;

        $cociente = 0;
        $resto = $num1;

        while ($resto >= $num2) {
            $resto = $resto - $num2;
            $cociente++;
        }

        echo "Dividendo: $num1<br>";
        echo "Divisor: $num2<br>";
        echo "Cociente: $cociente<br>";
        echo "Resto: $resto<br>";

    ?>
</body>
</html>