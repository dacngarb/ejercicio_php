<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
        $num1 = 5;
        $calculoPrimeros = 0;
        

        for ($x = 1; $x <= $num1; $x ++){

            
            $calculoPrimeros = $x + $calculoPrimeros;
         
        }
        echo "La suma de los primeros ". $num1. " es = ". $calculoPrimeros. "<br>";

  
    ?>

    
</body>
</html>