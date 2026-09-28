<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
    <?php 
        const DIASSEMANA = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    
        echo "<h3>Mostrar el primer día </h3>";
        echo DIASSEMANA[0];
      

        echo "<h3>Mostrar consecutiva </h3>";
        foreach(DIASSEMANA as $dias){
            echo "$dias, ";
        }

        echo "<h3>Mostrar consecutiva en forma de lista</h3>";
        echo "<ol>";
        foreach(DIASSEMANA as $diaslista){
            echo "<li>" . $diaslista . "</li>"; 
        }
        echo "</ol>";
        echo "<br>";


    
    ?>

    
</body>
</html>