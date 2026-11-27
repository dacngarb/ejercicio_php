<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 13</h1>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Introduce una cadena de texto:</label>
                            <input type="text" name="texto" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Mostrar resultados
                        </button>
                    </form>

                    <?php

                    if (isset($_POST["texto"])) {

                        $texto = $_POST["texto"];

                        // Texto del revés
                        $textoReves = strrev($texto);

                        echo "<div class='alert alert-info mt-4'>";
                        echo "<strong>Texto del revés:</strong> " . $textoReves;

                        if (strtolower($texto) == strtolower($textoReves)) {
                            echo "<br>La cadena es un palíndromo.";
                        } else {
                            echo "<br>La cadena no es un palíndromo.";
                        }

                        echo "</div>";

                        // Palabras del revés
                        $palabras = explode(" ", $texto);
                        $resultado = "";

                        for ($i = count($palabras) - 1; $i >= 0; $i--) {
                            $resultado = $resultado . $palabras[$i] . " ";
                        }

                        echo "<div class='alert alert-success'>";
                        echo "<strong>Palabras en orden inverso:</strong> " . $resultado;
                        echo "</div>";

                        // Mayúsculas y minúsculas
                        echo "<div class='alert alert-warning'>";
                        echo "<strong>Mayúsculas:</strong> " . strtoupper($texto);
                        echo "<br>";
                        echo "<strong>Minúsculas:</strong> " . strtolower($texto);
                        echo "</div>";

                        // Contar caracteres y palabras
                        $caracteres = strlen($texto);
                        $numeroPalabras = count($palabras);

                        echo "<div class='alert alert-primary'>";
                        echo "<strong>Número de caracteres:</strong> " . $caracteres;
                        echo "<br>";
                        echo "<strong>Número de palabras:</strong> " . $numeroPalabras;
                        echo "</div>";

                        // Encriptación
                        echo "<div class='alert alert-secondary'>";
                        echo "<strong>CRYPT:</strong> " . crypt($texto, "ab");
                        echo "<br><strong>MD5:</strong> " . md5($texto);
                        echo "<br><strong>SHA1:</strong> " . sha1($texto);
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