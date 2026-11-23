<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-4">
            Calcular MCD y división
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="GET">

                        <div class="mb-3">
                            <label for="num1" class="form-label">
                                Introduce el primer número:
                            </label>

                            <input type="number" name="num1" id="num1"
                                class="form-control" min="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="num2" class="form-label">
                                Introduce el segundo número:
                            </label>

                            <input type="number" name="num2" id="num2"
                                class="form-control" min="1" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Calcular
                            </button>
                        </div>

                    </form>

                    <?php

                    function division($num1, $num2)
                    {
                        $cociente = 0;
                        $resto = $num1;

                        while ($resto >= $num2) {
                            $resto = $resto - $num2;
                            $cociente++;
                        }

                        return array($cociente, $resto);
                    }

                    function divisionRecursiva($num1, $num2, $cociente = 0)
                    {
                        if ($num1 < $num2) {
                            return array($cociente, $num1);
                        } else {
                            return divisionRecursiva($num1 - $num2, $num2, $cociente + 1);
                        }
                    }

                    function mcd($num1, $num2)
                    {
                        while ($num2 != 0) {
                            $resto = $num1 % $num2;
                            $num1 = $num2;
                            $num2 = $resto;
                        }

                        return $num1;
                    }

                    function mcdRecursivo($num1, $num2)
                    {
                        if ($num2 == 0) {
                            return $num1;
                        } else {
                            return mcdRecursivo($num2, $num1 % $num2);
                        }
                    }

                    if (isset($_GET["num1"]) && isset($_GET["num2"])) {

                        $num1 = $_GET["num1"];
                        $num2 = $_GET["num2"];

                        $resultadoDivision = division($num1, $num2);
                        $resultadoDivisionRecursiva = divisionRecursiva($num1, $num2);

                        echo "<hr>";

                        echo "<h3 class='text-success'>División</h3>";

                        echo "<p><strong>Cociente:</strong> " . $resultadoDivision[0] . "</p>";
                        echo "<p><strong>Resto:</strong> " . $resultadoDivision[1] . "</p>";

                        echo "<h3 class='text-success'>División recursiva</h3>";

                        echo "<p><strong>Cociente:</strong> " . $resultadoDivisionRecursiva[0] . "</p>";
                        echo "<p><strong>Resto:</strong> " . $resultadoDivisionRecursiva[1] . "</p>";

                        echo "<h3 class='text-primary'>Máximo común divisor</h3>";

                        echo "<p><strong>MCD:</strong> " . mcd($num1, $num2) . "</p>";

                        echo "<h3 class='text-primary'>MCD recursivo</h3>";

                        echo "<p><strong>MCD:</strong> " . mcdRecursivo($num1, $num2) . "</p>";
                    }

                    ?>

                </div>

                <a href="index.html">
                    <button type="button" class="btn btn-success mt-2">
                        &lt;- VOLVER
                    </button>
                </a>

            </div>
        </div>

    </div>

</body>

</html>