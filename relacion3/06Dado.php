
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center text-primary fw-bold mb-4">Simulación de dados</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="bg-white border rounded-4 p-4 shadow-lg">

                <form action="" method="GET">

                    <div class="mb-3">
                        <label class="form-label">Número de tiradas:</label>
                        <input type="number" name="tiradas" class="form-control" min="1" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Simular</button>

                </form>

                <?php

                if (isset($_GET["tiradas"])) {

                    $tiradas = $_GET["tiradas"];

                    $dadoNormal = array(0, 0, 0, 0, 0, 0);
                    $dadoTrucado = array(0, 0, 0, 0, 0, 0);

                    for ($i = 0; $i < $tiradas; $i++) {

                        $resultadoNormal = rand(1, 6);
                        $dadoNormal[$resultadoNormal - 1]++;

                        $resultadoTrucado = rand(1, 8);

                        if ($resultadoTrucado > 5) {
                            $resultadoTrucado = 6;
                        }

                        $dadoTrucado[$resultadoTrucado - 1]++;

                    }

                    echo "<h4 class='text-center mt-4'>Dado normal</h4>";

                    echo "<table class='table table-bordered text-center'>";
                    echo "<tr class='table-primary'>";
                    echo "<th>Resultado</th>";
                    echo "<th>Frecuencia</th>";
                    echo "</tr>";

                    for ($i = 0; $i < 6; $i++) {
                        echo "<tr>";
                        echo "<td>" . ($i + 1) . "</td>";
                        echo "<td>" . $dadoNormal[$i] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                    echo "<h4 class='text-center mt-4'>Dado trucado</h4>";

                    echo "<table class='table table-bordered text-center'>";
                    echo "<tr class='table-danger'>";
                    echo "<th>Resultado</th>";
                    echo "<th>Frecuencia</th>";
                    echo "</tr>";

                    for ($i = 0; $i < 6; $i++) {
                        echo "<tr>";
                        echo "<td>" . ($i + 1) . "</td>";
                        echo "<td>" . $dadoTrucado[$i] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                }

                ?>

            </div>

            <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>

        </div>
    </div>

</div>

</body>
</html>
