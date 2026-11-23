<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Ejercicio 16 - Números primos
        </h2>

        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h3 class="text-primary fw-bold text-center mb-4">
                        Introduce los datos
                    </h3>

                    <form action="" method="GET">

                        <div class="mb-3">
                            <label for="num" class="form-label">
                                Introduce un número natural
                            </label>

                            <input type="number" class="form-control"
                                   id="num" name="num" min="1" step="1" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Calcular
                            </button>
                        </div>

                    </form>

                    <?php

                    function esPrimo($num) {
                        if ($num < 2) {
                            return false;
                        }

                        for ($i = 2; $i < $num; $i++) {
                            if ($num % $i == 0) {
                                return false;
                            }
                        }

                        return true;
                    }

                    if (isset($_GET["num"])) {

                        $num = $_GET["num"];

                        echo "<hr>";
                        echo "<h4 class='text-success'>Números primos entre 1 y $num:</h4>";

                        for ($i = 1; $i <= $num; $i++) {
                            if (esPrimo($i)) {
                                echo $i . " ";
                            }
                        }
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