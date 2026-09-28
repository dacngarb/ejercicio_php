<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $lado1 = 2;
        $lado2 = 3;
        $lado3 = 1;

        echo "Lados del triángulo: <br> 
        Lado 1: ".$lado1."<br>Lado 2: ".$lado2."<br>Lado 3: ".$lado3;
    
       if(($lado1 + $lado2 > $lado3) and
        ($lado1 + $lado3 > $lado2)and
        ($lado2 + $lado3 > $lado1)){

            if (($lado1 == $lado2) and ($lado2 == $lado3)){
                echo "<br>El triangulo es equilatero";
            }else{
                if (($lado1 == $lado2) or ($lado2 == $lado3)
                    or ($lado1 == $lado3)){
                    echo "<br>El triangulo es isoscele";
                }else{
                    echo"<br>El triangulo es escaleno";
                }
            }
        }else{
            echo "<br>Los lados no forman un triangulo";
        }
    ?>
</body>
</html>