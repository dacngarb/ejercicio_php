<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $num1 = 5;
        $calculoFactorial = 1;
        

        for ($x = 1; $x <= $num1; $x ++){

            $resultadoAnterior = $calculoFactorial;
            $calculoFactorial = $x * $calculoFactorial;
            echo $x. " * ". $resultadoAnterior. "= ". $calculoFactorial. "<br>";
            

           
        }
        
         
    ?>
    <br>
<a href="index.html" >
    <button type="submit" class="btn btn-primary btn-success mt-2" name="submit"> &lt;- VOLVER </button>
</a>
</body>
</html>