<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    

    <?php
    $num = 18;
    $contador = 0;
    for ($x = 1; $x <= $num; $x++){
        if ($num % $x == 0){
            $contador = $contador + 1;       
        }

        if ($contador > 2){
            break;
        } 
    }
    if ($contador > 2) {
        echo $num." no es primo";
    } else {
        echo $num." es primo";
    }
    ?>
</body>
</html>