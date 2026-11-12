
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <div id="main" class="container bg-secondary-subtle text-center">

        <h2 class="text-primary text-center mt-5 pt-3">
            Formulario de referencia
        </h2>

        <div class="row">

            <div class="col-md-3 col-sm-1 col-0">
            </div>

            <div class="col-md-6 col-sm-10 col-12">

                <form class="border rounded-3 border-warning p-4 shadow-lg bg-info pb-5"
                      method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="mb-3">
                        <label for="n1" class="form-label fw-bold">
                            Número 1
                        </label>

                        <input type="number" class="form-control"
                               id="n1" name="n1" required>
                    </div>

                    <div class="mb-3">

                        <select class="form-select" name="op" required>

                            <option value="0" selected>Elige un operador</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>

                        </select>

                    </div>

                    <div class="mb-3">
                        <label for="n2" class="form-label fw-bold">
                            Número 2
                        </label>

                        <input type="number" class="form-control"
                               id="n2" name="n2" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">
                        Calcular
                    </button>

                </form>

                <?php

                    if (isset($_GET["submit"])) {

                        $n1 = $_GET["n1"];
                        $n2 = $_GET["n2"];
                        $op = $_GET["op"];

                        if ($op == "0") {

                            echo "<div class='alert alert-danger mt-3'>";
                            echo "Debes elegir un operador.";
                            echo "</div>";

                        } else {

                            if (($op == "/" || $op == "%") && $n2 == 0) {

                                echo "<div class='alert alert-danger mt-3'>";
                                echo "No se puede dividir entre cero.";
                                echo "</div>";

                            } else {

                                $resultado = match($op) {
                                    "+" => $n1 + $n2,
                                    "-" => $n1 - $n2,
                                    "*" => $n1 * $n2,
                                    "/" => $n1 / $n2,
                                    "%" => $n1 % $n2,
                                };

                                echo "<div class='alert alert-success mt-3'>";
                                echo "El resultado es: $resultado";
                                echo "</div>";

                            }
                        }
                    }

                ?>

            </div>

            <div class="col-md-3 col-sm-1 col-0">
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
