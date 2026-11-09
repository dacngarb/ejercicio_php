
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Resultado del ejercicio 17
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Resultado de la división
                    </h3>

                    <?php
                        if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["opciones"])) {

                            $num1 = (int) $_GET["num1"];
                            $num2 = (int) $_GET["num2"];
                            $opciones = $_GET["opciones"];

                            if ($num1 >= 0 && $num2 > 0 && ($num1 == $_GET["num1"]) && ($num2 == $_GET["num2"])) {

                                $cociente = 0;
                                $resto = $num1;

                                while ($resto >= $num2) {
                                    $resto = $resto - $num2;
                                    $cociente++;
                                }

                                echo "<div class='alert alert-info'>";
                                echo "Dividendo: $num1<br>";
                                echo "Divisor: $num2<br>";

                                if (in_array("cociente", $opciones)) {
                                    echo "<br><strong>Cociente: $cociente</strong><br>";
                                }

                                if (in_array("resto", $opciones)) {
                                    echo "<strong>Resto: $resto</strong>";
                                }

                                echo "</div>";

                            } else {
                                echo "<div class='alert alert-danger'>";
                                echo "Los números introducidos no son válidos.";
                                echo "</div>";
                            }

                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "Debes introducir los dos números y seleccionar al menos una opción.";
                            echo "</div>";
                        }
                    ?>

                    <div class="text-center mt-4">
                        <a href="17CaptacionDivision.html" class="btn btn-primary">
                            Volver
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
