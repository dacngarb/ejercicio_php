<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-4">Transformar texto</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Introduce un texto:</label>
                            <textarea name="texto" id="texto" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>

                    </form>
                    <?php

                    if (isset($_POST["texto"])) {

                        $texto = $_POST["texto"];

                        $palabras = explode(" ", $texto);

                        $palabraLarga = $palabras[0];

                        for ($i = 1; $i < count($palabras); $i++) {

                            if (strlen($palabras[$i]) > strlen($palabraLarga)) {
                                $palabraLarga = $palabras[$i];
                            }
                        }

                        echo "<div class='alert alert-success mt-4'>";
                        echo "La palabra más larga es: <strong>" . $palabraLarga . "</strong>";
                        echo "</div>";
                    }
                    ?>

                </div>
                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>

        </div>
</body>

</html>