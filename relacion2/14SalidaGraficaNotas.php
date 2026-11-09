
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container py-5">
        <h2 class="text-center text-info fw-bold mb-5">
            Resultado del ejercicio 14
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <?php
                        $nota = isset($_GET["nota"]) ? (float) $_GET["nota"] : -1;

                        if ($nota >= 0 && $nota < 5) {
                            $resultado = "Suspenso";
                            $color = "bg-danger";
                        } elseif ($nota == 5) {
                            $resultado = "Suficiente";
                            $color = "bg-warning";
                        } elseif ($nota == 6) {
                            $resultado = "Bien";
                            $color = "bg-info";
                        } elseif ($nota == 7 || $nota == 8) {
                            $resultado = "Notable";
                            $color = "bg-primary";
                        } elseif ($nota == 9 || $nota == 10) {
                            $resultado = "Sobresaliente";
                            $color = "bg-success";
                        } else {
                            $resultado = "Nota no válida";
                            $color = "";
                        }
                    ?>

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Calificación del alumno
                    </h3>

                    <?php if ($nota >= 0 && $nota <= 10) { ?>

                        <div class="alert alert-info text-center">
                            <h4>Nota: <?php echo $nota; ?> / 10</h4>
                            <p class="mb-0">
                                Resultado: <?php echo $resultado; ?>
                            </p>
                        </div>

                        <p class="fw-bold">Progreso de la nota</p>

                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar <?php echo $color; ?>"
                                 role="progressbar"
                                 style="width: <?php echo $nota * 10; ?>%">
                                <?php echo $nota * 10; ?>%
                            </div>
                        </div>

                    <?php } else { ?>

                        <div class="alert alert-danger text-center">
                            La nota introducida no es válida.
                        </div>

                    <?php } ?>

                    <div class="text-center mt-4">
                        <a href="14SalidaGraficaNotas.html" class="btn btn-primary">
                            Volver
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
