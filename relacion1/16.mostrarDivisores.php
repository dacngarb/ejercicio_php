<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <style>
        b{
            color: red
        }
    </style>
</head>
<body>

    

    <?php
        $num = 10;

        echo "<h2>Divisores del número $num: </h2>";
        for($i = 1; $i <= $num; $i++){
            if($num % $i != 0){
                echo "$i ";
            }else {
                echo "<b>$i </b>";
            }
        }
    ?>
</body>
</html>