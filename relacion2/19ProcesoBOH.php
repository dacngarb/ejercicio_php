
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Ejercicio 19 - Resultado de la conversión
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Resultado
                    </h3>

                    <?php

                        if (isset($_GET["num"]) && isset($_GET["opcion"])) {

                            $num = (int) $_GET["num"];
                            $opcion = $_GET["opcion"];

                            echo "<div class='alert alert-info'>";
                            echo "Número decimal: $num";
                            echo "</div>";

                            switch ($opcion) {
                                case 1:
                                    echo "<div class='alert alert-success'>";
                                    echo "Resultado en binario: " . decbin($num);
                                    echo "</div>";
                                    break;

                                case 2:
                                    echo "<div class='alert alert-success'>";
                                    echo "Resultado en octal: " . decoct($num);
                                    echo "</div>";
                                    break;

                                case 3:
                                    echo "<div class='alert alert-success'>";
                                    echo "Resultado en hexadecimal: " . strtoupper(dechex($num));
                                    echo "</div>";
                                    break;

                                default:
                                    echo "<div class='alert alert-danger'>";
                                    echo "Opción no válida.";
                                    echo "</div>";
                            }

                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "Debes introducir un número y elegir una conversión.";
                            echo "</div>";
                        }

                    ?>

                    <div class="d-grid mt-3">
                        <a href="19ConverBOH.html" class="btn btn-primary">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
