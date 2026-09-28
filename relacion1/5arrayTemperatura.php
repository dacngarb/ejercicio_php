<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <?php
    const TEMPERATURAS_MAXIMAS = [
    "Lunes"     => 22.5,
    "Martes"    => 23.8,
    "Miércoles" => 21.0,
    "Jueves"    => 25.4,
    "Viernes"   => 26.1,
    "Sábado"    => 24.7,
    "Domingo"   => 23.0
    ];

    echo "<h3>Mostrar el primer día </h3>";
    $temperatura_lunes = TEMPERATURAS_MAXIMAS["Lunes"];
    echo $temperatura_lunes."ºC<br><br>";

    echo "<h3>Temperaturas máximas de la semana:</h3>";
    foreach (TEMPERATURAS_MAXIMAS as $dia => $temperatura) {
    echo "- $dia: $temperatura °C<br>";
    }

    echo "<h3>Mostrar tabla</h3>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Días</th>";
    echo "<th>Temperaturas</th>";
    echo "</tr>";

    foreach (TEMPERATURAS_MAXIMAS as $dia => $temperatura) {
        echo "<tr>";
        echo "<td>" . $dia . "</td>";
        echo "<td>" . $temperatura . " °C</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>