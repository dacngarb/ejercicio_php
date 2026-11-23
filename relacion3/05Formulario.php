
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center text-primary fw-bold mb-4">
        Validación de datos
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="bg-white border rounded-4 p-4 shadow-lg">

                <form action="" method="POST" onsubmit="return validarFormulario()">

                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre"
                               class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="text" name="email" id="email"
                               class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de documento:</label>

                        <select name="tipo" id="tipo"
                                class="form-select"
                                onchange="mostrarCampos()" required>

                            <option value="">Selecciona un documento</option>
                            <option value="dni">DNI</option>
                            <option value="nie">NIE</option>
                            <option value="tie">TIE</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Número de documento:</label>

                        <input type="text" name="documento" id="documento"
                               class="form-control" required>
                    </div>

                    <div class="mb-3" id="campoSoporte" style="display:none;">

                        <label class="form-label">Número de soporte:</label>

                        <input type="text" name="soporte" id="soporte"
                               class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Enviar
                    </button>

                </form>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $nombre = htmlspecialchars($_POST["nombre"] ?? "");
                    $email = htmlspecialchars($_POST["email"] ?? "");
                    $tipo = htmlspecialchars($_POST["tipo"] ?? "");
                    $documento = htmlspecialchars($_POST["documento"] ?? "");
                    $soporte = htmlspecialchars($_POST["soporte"] ?? "");

                    echo "<div class='alert alert-success mt-4'>";
                    echo "<h5>Datos recibidos correctamente</h5>";

                    echo "Nombre: " . $nombre . "<br>";
                    echo "Email: " . $email . "<br>";
                    echo "Tipo de documento: " . $tipo . "<br>";
                    echo "Documento: " . $documento;

                    if ($tipo == "tie") {
                        echo "<br>Número de soporte: " . $soporte;
                    }

                    echo "</div>";
                }

                ?>

            </div>

            <a href="index.html" class="btn btn-success mt-3">
                &lt;- VOLVER
            </a>

        </div>
    </div>

</div>

<script src="05Validacion.js"></script>

</body>
</html>
