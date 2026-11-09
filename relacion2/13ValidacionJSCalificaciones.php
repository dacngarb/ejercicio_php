
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - Resultado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-dark">

    <div id="main" class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Calculadora de notas
        </h2>

        <div class="row justify-content-center">

            <div class="col-md-7 col-sm-10 col-12">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h4 class="text-center text-primary mb-4">
                        Resultado del alumno
                    </h4>

                    <?php

                    $rubricaCalificaciones = array(
                        "Inicial" => 0.2,
                        "Primera" => 0.1,
                        "Segunda" => 0.3,
                        "Tercera" => 0.4
                    );

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {

                        if (isset($_GET["nInicial"], $_GET["n1"], $_GET["n2"], $_GET["n3"])) {

                            // Recogemos las notas
                            $nInicial = (float) $_GET["nInicial"];
                            $n1 = (float) $_GET["n1"];
                            $n2 = (float) $_GET["n2"];
                            $n3 = (float) $_GET["n3"];

                            // Asociamos cada nota con su porcentaje
                            $notasAlumno = array(
                                "Inicial" => $nInicial,
                                "Primera" => $n1,
                                "Segunda" => $n2,
                                "Tercera" => $n3
                            );

                            // Calculamos la nota final
                            $notaFinal = 0;

                            foreach ($rubricaCalificaciones as $notaEvaluacion => $rubrica) {

                                $notaFinal += $notasAlumno[$notaEvaluacion] * $rubrica;

                            }

                            // Mostramos los resultados
                            echo '<div class="alert alert-info">';
                            echo "<strong>Nota inicial:</strong> " . $nInicial . "<br>";
                            echo "<strong>Primera nota:</strong> " . $n1 . "<br>";
                            echo "<strong>Segunda nota:</strong> " . $n2 . "<br>";
                            echo "<strong>Tercera nota:</strong> " . $n3;
                            echo '</div>';

                            echo '<div class="alert alert-success text-center">';
                            echo "<h5>La nota final del alumno es:</h5>";
                            echo '<h2 class="fw-bold">' . round($notaFinal, 2) . '</h2>';
                            echo '</div>';

                        } else {

                            echo '<div class="alert alert-danger">
                                    Faltan datos del formulario.
                                  </div>';

                        }
                    }

                    ?>

                    <div class="d-grid mt-4">
                        <a href="13ValidacionJSCalificaciones.html"
                           class="btn btn-primary btn-lg fw-bold">
                            Volver a introducir notas
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
