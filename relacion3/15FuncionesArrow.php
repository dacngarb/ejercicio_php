<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 15</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Introduce el radio:</label>
                            <input type="number" step="any" min="0.01" name="radio" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Calcular
                        </button>
                    </form>

                    <?php

                    $circunferencia = fn($n) => 2 * pi() * $n;

                    $circulo = fn($n) => pi() * $n * $n;

                    $esfera = fn($r) => (4 / 3) * pi() * $r * $r * $r;

                    if (isset($_POST["radio"])) {

                        $radio = $_POST["radio"];

                        if ($radio > 0) {

                            echo "<div class='alert alert-success mt-4'>";
                            echo "<strong>Longitud:</strong> " . $circunferencia($radio);
                            echo "</div>";

                            echo "<div class='alert alert-info'>";
                            echo "<strong>Área:</strong> " . $circulo($radio);
                            echo "</div>";

                            echo "<div class='alert alert-warning'>";
                            echo "<strong>Volumen:</strong> " . $esfera($radio);
                            echo "</div>";
                        } else {

                            echo "<div class='alert alert-danger mt-4'>";
                            echo "Introduce un radio positivo.";
                            echo "</div>";
                        }
                    }

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>

</html>