
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 16</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <?php

                    // Función array_all
                    if (!function_exists("array_all")) {
                        function array_all($array, $callback) {
                            foreach ($array as $n) {
                                if (!$callback($n)) {
                                    return false;
                                }
                            }
                            return true;
                        }
                    }

                    // Función array_any
                    if (!function_exists("array_any")) {
                        function array_any($array, $callback) {
                            foreach ($array as $n) {
                                if ($callback($n)) {
                                    return true;
                                }
                            }
                            return false;
                        }
                    }

                    // Función array_find
                    if (!function_exists("array_find")) {
                        function array_find($array, $callback) {
                            foreach ($array as $n) {
                                if ($callback($n)) {
                                    return $n;
                                }
                            }
                            return null;
                        }
                    }

                    // Función para comprobar si un número es primo
                    function esPrimo($num) {

                        if ($num < 2) {
                            return false;
                        }

                        for ($i = 2; $i < $num; $i++) {
                            if ($num % $i == 0) {
                                return false;
                            }
                        }

                        return true;
                    }

                    // Crear array del 1 al 100
                    $numeros = range(1, 100);

                    echo "<div class='alert alert-secondary'>";
                    echo "<strong>Array original:</strong><br>";
                    echo implode(", ", $numeros);
                    echo "</div>";

                    // Comprobar si todos son positivos
                    $todosPositivos = array_all($numeros, function ($n) {
                        return $n > 0;
                    });

                    echo "<div class='alert alert-success'>";
                    echo "<strong>¿Todos son positivos?</strong><br>";

                    if ($todosPositivos) {
                        echo "Sí, todos son positivos.";
                    } else {
                        echo "No todos son positivos.";
                    }

                    echo "</div>";

                    // Comprobar si hay algún múltiplo de 5
                    $hayMultiplo5 = array_any($numeros, function ($n) {
                        return $n % 5 == 0;
                    });

                    echo "<div class='alert alert-info'>";
                    echo "<strong>¿Hay algún múltiplo de 5?</strong><br>";

                    if ($hayMultiplo5) {
                        echo "Sí, hay múltiplos de 5.";
                    } else {
                        echo "No hay múltiplos de 5.";
                    }

                    echo "</div>";

                    // Obtener los números primos
                    $primos = array_filter($numeros, function ($n) {
                        return esPrimo($n);
                    });

                    echo "<div class='alert alert-warning'>";
                    echo "<strong>Números primos:</strong><br>";
                    echo implode(", ", $primos);
                    echo "</div>";

                    // Buscar el primer número con dos cifras iguales
                    $encontrado = array_find($numeros, function ($n) {
                        return $n >= 10 && $n <= 99 && $n % 11 == 0;
                    });

                    echo "<div class='alert alert-primary'>";
                    echo "<strong>Primer número con dos cifras iguales:</strong><br>";
                    echo $encontrado;
                    echo "</div>";

                    // Obtener el cuadrado de cada número
                    $cuadrados = array_map(function ($n) {
                        return $n * $n;
                    }, $numeros);

                    echo "<div class='alert alert-danger'>";
                    echo "<strong>Cuadrado de los números:</strong><br>";
                    echo implode(", ", $cuadrados);
                    echo "</div>";

                    // Multiplicar cada número por dos
                    $dobles = $numeros;

                    array_walk($dobles, function (&$n) {
                        $n = $n * 2;
                    });

                    echo "<div class='alert alert-dark'>";
                    echo "<strong>Números multiplicados por dos:</strong><br>";
                    echo implode(", ", $dobles);
                    echo "</div>";

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>
</html>
