
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        b {
            color: red;
        }
    </style>
</head>
<body class="bg-dark">

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Resultado del ejercicio 16
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

                            if ($num > 0 && ($opcion == "primo" || $opcion == "divisores")) {

                                if ($opcion == "primo") {

                                    $contador = 0;

                                    for ($x = 1; $x <= $num; $x++) {
                                        if ($num % $x == 0) {
                                            $contador++;
                                        }
                                    }

                                    if ($contador > 2) {
                                        echo "<div class='alert alert-danger text-center'>";
                                        echo "$num no es primo";
                                        echo "</div>";
                                    } else {
                                        echo "<div class='alert alert-success text-center'>";
                                        echo "$num es primo";
                                        echo "</div>";
                                    }

                                } else {

                                    echo "<div class='alert alert-info'>";
                                    echo "<h5>Divisores del número $num:</h5>";

                                    for ($i = 1; $i <= $num; $i++) {
                                        if ($num % $i == 0) {
                                            echo "<b>$i </b>";
                                        } else {
                                            echo "$i ";
                                        }
                                    }

                                    echo "</div>";
                                }

                            } else {
                                echo "<div class='alert alert-danger'>";
                                echo "Los datos introducidos no son válidos.";
                                echo "</div>";
                            }

                        } else {
                            echo "<div class='alert alert-danger'>";
                            echo "Debes introducir un número y elegir una opción.";
                            echo "</div>";
                        }
                    ?>

                    <div class="text-center mt-4">
                        <a href="16CaptacionNumero.html" class="btn btn-primary">
                            Volver
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
