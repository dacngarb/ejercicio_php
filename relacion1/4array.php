<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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