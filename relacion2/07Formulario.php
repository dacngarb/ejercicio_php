
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de dos números</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-secondary">

    <div id="main" class="container bg-secondary-subtle text-center">

        <h2 class="text-primary mt-5 pt-3">
            Formulario de dos números
        </h2>

        <div class="row">

            <!-- Espacio izquierdo -->
            <div class="col-md-3 col-sm-1"></div>

            <!-- Formulario -->
            <div class="col-md-6 col-sm-10 col-12">

                <form method="POST" action=""
                      class="border rounded-3 border-warning p-4 shadow-lg bg-info mb-5">

                    <div class="mb-3">
                        <label for="numero1" class="form-label fw-bold">
                            Primer número
                        </label>

                        <input type="number" step="any"
                               class="form-control"
                               id="numero1"
                               name="numero1"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="numero2" class="form-label fw-bold">
                            Segundo número
                        </label>

                        <input type="number" step="any"
                               class="form-control"
                               id="numero2"
                               name="numero2"
                               required>
                    </div>

                    <button type="submit" name="enviar"
                            class="btn btn-primary">
                        Enviar
                    </button>

                </form>

                <?php
                if (isset($_POST['enviar'])) {

                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];

                    echo "<div class='alert alert-success'>";
                    echo "Primer número: " . $numero1 . "<br>";
                    echo "Segundo número: " . $numero2;
                    echo "</div>";
                }
                ?>

            </div>

            <!-- Espacio derecho -->
            <div class="col-md-3 col-sm-1"></div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
