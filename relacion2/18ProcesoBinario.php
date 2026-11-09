
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Resultado del ejercicio 18
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Conversión a binario
                    </h3>

                    <?php
                        if (isset($_GET["num"])) {

                            $num = $_GET["num"];

                            if ($num >= 0 && $num == (int)$num) {

                                $num = (int)$num;
                                $binario = "";

                                if ($num == 0) {
                                    $binario = "0";
                                } else {

                                    while ($num > 0) {
                                        $resto = $num % 2;
                                        $binario = $resto . $binario;
                                        $num = intdiv($num, 2);
                                    }

                                }

                                echo "<div class='alert alert-success text-center'>";
                                echo "<h5>Número en binario:</h5>";
                                echo "<h3 class='mb-0'>" . $binario . "</h3>";
                                echo "</div>";

                            } else {

                                echo "<div class='alert alert-danger text-center'>";
                                echo "Introduce un número entero positivo.";
                                echo "</div>";

                            }

                        } else {

                            echo "<div class='alert alert-danger text-center'>";
                            echo "No has introducido ningún número.";
                            echo "</div>";

                        }
                    ?>

                    <div class="text-center mt-4">
                        <a href="18CaptacionNumero.html" class="btn btn-primary">
                            Volver
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
