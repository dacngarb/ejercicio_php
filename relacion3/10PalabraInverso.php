<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 10</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Introduce un texto:</label>
                            <input type="text" name="texto" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Invertir palabras
                        </button>
                    </form>

                    <?php

                    if (isset($_POST["texto"])) {

                        $texto = $_POST["texto"];

                        $palabras = explode(" ", $texto);

                        $resultado = "";

                        for ($i = count($palabras) - 1; $i >= 0; $i--) {

                            $resultado = $resultado . $palabras[$i] . " ";
                        }

                        echo "<div class='alert alert-success mt-4'>";
                        echo "Texto con las palabras en orden inverso: <strong>" . $resultado . "</strong>";
                        echo "</div>";
                    }

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>

</html>