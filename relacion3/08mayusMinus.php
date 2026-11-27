<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-4">Transformar texto</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST" onsubmit="return validar()">

                        <div class="mb-3">
                            <label class="form-label">Introduce un texto:</label>
                            <textarea name="texto" id="texto" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo de selección:</label>

                            <select name="tipo" id="tipo" class="form-select" onchange="mostrarOpciones()">
                                <option value="ambas">Permitir ambas opciones</option>
                                <option value="una">Elegir solamente una opción</option>
                            </select>
                        </div>

                        <div id="opcionesAmbas">

                            <label class="form-label">Opciones:</label>

                            <div class="form-check">
                                <input type="checkbox" name="mayusculas" id="mayusculas" class="form-check-input">
                                <label class="form-check-label" for="mayusculas">Mayúsculas</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="minusculas" id="minusculas" class="form-check-input">
                                <label class="form-check-label" for="minusculas">Minúsculas</label>
                            </div>

                        </div>

                        <div id="opcionesUna" style="display:none;">

                            <label class="form-label">Elige una opción:</label>

                            <div class="form-check">
                                <input type="radio" name="opcion" id="radioMayusculas" value="mayusculas" class="form-check-input">
                                <label class="form-check-label" for="radioMayusculas">Mayúsculas</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="opcion" id="radioMinusculas" value="minusculas" class="form-check-input">
                                <label class="form-check-label" for="radioMinusculas">Minúsculas</label>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>

                    </form>

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $texto = $_POST["texto"];

                        echo "<h5 class='mt-4 text-primary'>Resultado:</h5>";

                        if ($_POST["tipo"] == "ambas") {

                            if (isset($_POST["mayusculas"])) {
                                echo "<p class='alert alert-primary'>" . htmlspecialchars(mb_strtoupper($texto, "UTF-8")) . "</p>";
                            }

                            if (isset($_POST["minusculas"])) {
                                echo "<p class='alert alert-success'>" . htmlspecialchars(mb_strtolower($texto, "UTF-8")) . "</p>";
                            }
                        } else {

                            if ($_POST["opcion"] == "mayusculas") {
                                echo "<p class='alert alert-primary'>" . htmlspecialchars(mb_strtoupper($texto, "UTF-8")) . "</p>";
                            }

                            if ($_POST["opcion"] == "minusculas") {
                                echo "<p class='alert alert-success'>" . htmlspecialchars(mb_strtolower($texto, "UTF-8")) . "</p>";
                            }
                        }
                    }

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>

            </div>
        </div>

    </div>

    <script>
        function mostrarOpciones() {

            let tipo = document.getElementById("tipo").value;

            if (tipo == "ambas") {
                document.getElementById("opcionesAmbas").style.display = "block";
                document.getElementById("opcionesUna").style.display = "none";
            } else {
                document.getElementById("opcionesAmbas").style.display = "none";
                document.getElementById("opcionesUna").style.display = "block";
            }

        }

        function validar() {

            let texto = document.getElementById("texto").value;
            let tipo = document.getElementById("tipo").value;

            if (texto.trim() == "") {
                alert("Introduce un texto");
                return false;
            }

            if (tipo == "ambas") {

                let mayusculas = document.getElementById("mayusculas").checked;
                let minusculas = document.getElementById("minusculas").checked;

                if (!mayusculas && !minusculas) {
                    alert("Selecciona al menos una opción");
                    return false;
                }

            } else {

                let opcion = document.querySelector('input[name="opcion"]:checked');

                if (opcion == null) {
                    alert("Selecciona una opción");
                    return false;
                }

            }

            return true;

        }
    </script>

</body>

</html>