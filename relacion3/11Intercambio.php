<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 11</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <?php

                    include "functionsRel3.php";

                    $numeros = array(1, 2, 3, 4, 5);

                    echo "<h5>Array original:</h5>";
                    echo "<p>";
                    print_r($numeros);
                    echo "</p>";

                    invertirArray($numeros);

                    echo "<h5>Array invertido:</h5>";
                    echo "<p>";
                    print_r($numeros);
                    echo "</p>";

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>
</html>