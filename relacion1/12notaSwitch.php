<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
        $nota = 10;

        if ($nota >= 0 && $nota < 5){
            echo "Suspenso";
        }elseif ($nota == 5){
            echo "Suficiente";
        }elseif ($nota == 6){
            echo "Bien";
        }elseif ($nota == 7 || $nota == 8){
            echo "Notable";
        }elseif ($nota == 9 || $nota == 10){
            echo "Sobresaliente";
        }
    ?>
</body>
</html>