
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Ejercicio 15 - Factorial
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Calculadora de factorial
                    </h3>

                    <form method="POST" action="">

                        <div class="mb-3">
                            <label for="num1" class="form-label">
                                Introduce un número
                            </label>

                            <input type="text" class="form-control"
                                   id="num1" name="num1">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Calcular
                            </button>
                        </div>

                    </form>

                    <?php
                        if (isset($_POST["num1"])) {

                            $num1 = $_POST["num1"];
                            $calculoFactorial = 1;

                            if ($num1 == "" || !is_numeric($num1) || $num1 < 0 || $num1 != (int)$num1) {

                                echo "<div class='alert alert-danger mt-4'>";
                                echo "Introduce un número entero positivo.";
                                echo "</div>";

                            } else {

                                echo "<div class='alert alert-info mt-4'>";

                                for ($x = 1; $x <= $num1; $x++) {

                                    $resultadoAnterior = $calculoFactorial;
                                    $calculoFactorial = $x * $calculoFactorial;

                                    echo $x . " * " . $resultadoAnterior . " = " . $calculoFactorial . "<br>";
                                }

                                echo "</div>";

                                echo "<div class='alert alert-success text-center'>";
                                echo "El factorial de " . $num1 . " es: " . $calculoFactorial;
                                echo "</div>";
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {

            let numero = document.getElementById("num1").value.trim();

            if (numero == "" || isNaN(numero) || numero < 0 || numero % 1 != 0) {

                alert("Introduce un número entero positivo.");
                event.preventDefault();

            }

        });
    </script>

</body>
</html>
