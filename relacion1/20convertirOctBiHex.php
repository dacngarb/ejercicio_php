<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <?php

        $num = 25;

        echo "Número decimal: $num<br><br>";

        echo "Elige una opción:<br>";
        echo "1. Convertir a binario<br>";
        echo "2. Convertir a octal<br>";
        echo "3. Convertir a hexadecimal<br><br>";

        $opcion = 1;

        switch ($opcion) {
            case 1:
                echo "Resultado en binario: " . decbin($num);
                break;

            case 2:
                echo "Resultado en octal: " . decoct($num);
                break;

            case 3:
                echo "Resultado en hexadecimal: " . dechex($num);
                break;

            default:
                echo "Opción no válida.";
        }

    ?>

</body>
</html>