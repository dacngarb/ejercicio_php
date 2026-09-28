<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $nota1 = 9;
        $nota2 = 5;
        $faltasInjustificadas = 2;

        $notaMedia = ($nota1 + $nota2) / 2;
        $notaTotal = $notaMedia - $faltasInjustificadas;

        echo "La nota es: ".$notaTotal;
        if($notaTotal >= 5){
            echo ". Está aprobado";
        }else{
            echo ". Está suspenso";
        }
    ?>
</body>
</html>