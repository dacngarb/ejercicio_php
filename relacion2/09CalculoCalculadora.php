
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 - Calculadora</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-dark">

    <div id="main" class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Calculadora matemática
        </h2>

        <div class="row justify-content-center">

            <div class="col-md-7 col-sm-10 col-12">

                <form class="bg-white border rounded-4 p-4 shadow-lg"
                      method="get"
                      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                    <h4 class="text-center text-primary mb-4">
                        Introduce los números
                    </h4>

                    <!-- Número 1 -->
                    <div class="mb-4">
                        <label for="n1" class="form-label fw-bold">
                            Primer número
                        </label>

                        <input type="number"
                               step="any"
                               class="form-control form-control-lg"
                               id="n1"
                               name="n1"
                               placeholder="Introduce el primer número"
                               required>
                    </div>

                    <!-- Operador -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Operación matemática
                        </label>

                        <select class="form-select form-select-lg"
                                name="op" required>

                            <option value="" selected disabled>
                                Elige una operación
                            </option>

                            <option value="+">Sumar (+)</option>
                            <option value="-">Restar (-)</option>
                            <option value="*">Multiplicar (*)</option>
                            <option value="/">Dividir (/)</option>
                            <option value="%">Módulo (%)</option>

                        </select>
                    </div>

                    <!-- Número 2 -->
                    <div class="mb-4">
                        <label for="n2" class="form-label fw-bold">
                            Segundo número
                        </label>

                        <input type="number"
                               step="any"
                               class="form-control form-control-lg"
                               id="n2"
                               name="n2"
                               placeholder="Introduce el segundo número"
                               required>
                    </div>

                    <!-- Botón -->
                    <div class="d-grid">
                        <button type="submit"
                                class="btn btn-success btn-lg fw-bold"
                                name="submit">
                            Calcular resultado
                        </button>
                    </div>

                </form>

                <!-- PHP -->
                <?php  
                    if($_SERVER["REQUEST_METHOD"] == "GET"){
                        if (isset($_GET["submit"])){
                            $n1 = $_GET["n1"];
                            $n2 = $_GET["n2"];
                            $op = $_GET["op"];

                            $resultado = match($op){
                                "+" => $n1 + $n2,
                                "-" => $n1 - $n2,
                                "*" => $n1 * $n2,
                                "/" => $n1 / $n2,
                                "%" => $n1 % $n2,
                            };
                            echo "El resultado es: $resultado";
                        }     
                    }else{
                        if (isset($_POST["submit"])){
                            $n1 = $_POST["n1"];
                            $n2 = $_POST["n2"];
                            $op = $_POST["op"];

                            $resultado = match($op){
                                "+" => $n1 + $n2,
                                "-" => $n1 - $n2,
                                "*" => $n1 * $n2,
                                "/" => $n1 / $n2,
                                "%" => $n1 % $n2,
                            };
                            echo "El resultado es: $resultado";
                        } 
                    }
                    
                ?>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
