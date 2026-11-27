
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center text-primary fw-bold mb-4">Funciones de fecha y hora</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="bg-white border rounded-4 p-4 shadow-lg">

                <?php

                date_default_timezone_set("Europe/Madrid");

                function nombreDia($fecha) {
                    $dias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
                    $numero = date("w", strtotime($fecha));
                    return $dias[$numero];
                }

                function nombreMes($fecha) {
                    $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
                    $numero = date("n", strtotime($fecha));
                    return $meses[$numero - 1];
                }

                $ahora = new DateTime();

                echo "<h4 class='text-primary mb-3'>Fecha y hora actual</h4>";

                echo "<p>Fecha: " . date("d/m/Y") . "</p>";
                echo "<p>Hora: " . date("H:i:s") . "</p>";
                echo "<p>Día de la semana: " . nombreDia(date("Y-m-d")) . "</p>";
                echo "<p>Mes: " . nombreMes(date("Y-m-d")) . "</p>";
                echo "<p>Año: " . date("Y") . "</p>";
                echo "<p>Marca de tiempo: " . time() . "</p>";

                echo "<hr>";

                echo "<h4 class='text-primary mb-3'>Otras funciones</h4>";

                $fechaCreada = mktime(0, 0, 0, 12, 25, date("Y"));
                echo "<p>Fecha creada con mktime(): " . date("d/m/Y", $fechaCreada) . "</p>";

                $fechaSiguiente = strtotime("+7 days");
                echo "<p>Fecha dentro de 7 días: " . date("d/m/Y", $fechaSiguiente) . "</p>";

                echo "<hr>";

                echo "<h4 class='text-primary mb-3'>Aritmética de fechas</h4>";

                $futura = $ahora->add(new DateInterval("P10D"));
                echo "<p>Fecha dentro de 10 días: " . $futura->format("d/m/Y") . "</p>";

                $pasada = $ahora->sub(new DateInterval("P5D"));
                echo "<p>Fecha de hace 5 días: " . $pasada->format("d/m/Y") . "</p>";

                $diferencia = $ahora->diff($futura);
                echo "<p>Días entre la fecha actual y la futura: " . $diferencia->days . "</p>";

                ?>

            </div>

            <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>

        </div>
    </div>

</div>

</body>
</html>
