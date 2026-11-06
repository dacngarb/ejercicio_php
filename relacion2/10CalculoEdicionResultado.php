
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Resultado</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-dark">

    <div id="main" class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Calculadora matemática
        </h2>

        <div class="row justify-content-center">

            <div class="col-md-7 col-sm-10 col-12">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h4 class="text-center text-primary mb-4">
                        Resultado de la operación
                    </h4>

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "GET") {

                        if (isset($_GET["n1"], $_GET["n2"], $_GET["op"])) {

                            $n1 = (float) $_GET["n1"];
                            $n2 = (float) $_GET["n2"];
                            $op = $_GET["op"];

                            if (($op == "/" || $op == "%") && $n2 == 0) {

                                echo '<div class="alert alert-danger">
                                        No se puede dividir entre cero.
                                      </div>';

                            } else {

                                $resultado = match($op) {
                                    "+" => $n1 + $n2,
                                    "-" => $n1 - $n2,
                                    "*" => $n1 * $n2,
                                    "/" => $n1 / $n2,
                                    "%" => fmod($n1, $n2),
                                    default => null
                                };

                                if ($resultado !== null) {

                                    echo '<div class="alert alert-success text-center">
                                            El resultado de la operación es:
                                            <h3 class="fw-bold mt-2">' . $resultado . '</h3>
                                          </div>';

                                } else {

                                    echo '<div class="alert alert-danger">
                                            Operación no válida.
                                          </div>';

                                }
                            }

                        } else {

                            echo '<div class="alert alert-danger">
                                    No se han recibido todos los datos.
                                  </div>';

                        }
                    }

                    ?>

                    <!-- Botón volver -->
                    <div class="d-grid mt-4">
                        <a href="10CaptacionDatos.html"
                           class="btn btn-primary btn-lg fw-bold">
                            Volver a la calculadora
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
