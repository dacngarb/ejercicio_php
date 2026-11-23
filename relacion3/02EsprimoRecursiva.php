<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-4">
            Calcular factorial
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="GET">

                        <div class="mb-3">
                            <label for="num" class="form-label">
                                Introduce un número:
                            </label>

                            <input type="number" name="num" id="num"
                                class="form-control" min="0" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Calcular
                            </button>
                        </div>

                    </form>

                    <?php

                    function factorial($num)
                    {
                        $resultado = 1;

                        for ($i = 1; $i <= $num; $i++) {
                            $resultado = $resultado * $i;
                        }

                        return $resultado;
                    }

                    function factorialRecursivo($num)
                    {
                        if ($num == 0 || $num == 1) {
                            return 1;
                        } else {
                            return $num * factorialRecursivo($num - 1);
                        }
                    }

                    if (isset($_GET["num"])) {

                        $num = $_GET["num"];

                        echo "<hr>";
                        echo "<h3 class='text-success'>El factorial de $num es:</h3>";

                        echo "<p><strong>Utilizando un bucle:</strong> " . factorial($num) . "</p>";

                        echo "<p><strong>Utilizando recursividad:</strong> " . factorialRecursivo($num) . "</p>";
                    }

                    ?>

                </div>
                <a href="index.html">
                    <button type="button" class="btn btn-success mt-2">&lt;- VOLVER
                    </button>
                </a>
            </div>
        </div>

    </div>

</body>

</html>