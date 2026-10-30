
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

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

    echo "<h3 class='text-primary'>Mostrar el primer día</h3>";
    $temperatura_lunes = TEMPERATURAS_MAXIMAS["Lunes"];
    echo "<p class='fs-5'>Lunes: $temperatura_lunes ºC</p>";

    echo "<h3 class='text-primary mt-4'>Temperaturas máximas de la semana:</h3>";

    foreach (TEMPERATURAS_MAXIMAS as $dia => $temperatura) {
        echo "<p>- $dia: $temperatura °C</p>";
    }

    echo "<h3 class='text-primary mt-4'>Mostrar tabla</h3>";
    ?>

    <table class="table table-striped table-bordered table-hover mt-3">
        <thead class="table-primary">
            <tr>
                <th>Días</th>
                <th>Temperaturas</th>
            </tr>
        </thead>

        <tbody>
        <?php
        foreach (TEMPERATURAS_MAXIMAS as $dia => $temperatura) {
            echo "<tr>";
            echo "<td>" . $dia . "</td>";
            echo "<td>" . $temperatura . " °C</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

</div>

</body>
</html>
