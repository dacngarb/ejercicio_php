<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 17</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <?php

                    // Compatibilidad con versiones anteriores de PHP
                    if (!function_exists("array_any")) {
                        function array_any($array, $callback)
                        {
                            foreach ($array as $n) {
                                if ($callback($n)) {
                                    return true;
                                }
                            }
                            return false;
                        }
                    }

                    if (!function_exists("array_find")) {
                        function array_find($array, $callback)
                        {
                            foreach ($array as $n) {
                                if ($callback($n)) {
                                    return $n;
                                }
                            }
                            return null;
                        }
                    }

                    // Función para comprobar si un número es primo
                    function esPrimo($num)
                    {

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

                    // Crear los dos arrays
                    $pares = range(2, 20, 2);
                    $multiplosDeTres = range(3, 39, 3);

                    // Unir los dos arrays
                    $todos = array_merge($pares, $multiplosDeTres);

                    echo "<div class='alert alert-secondary'>";
                    echo "<strong>Array de números pares:</strong><br>";
                    echo implode(", ", $pares);
                    echo "<hr>";
                    echo "<strong>Array de múltiplos de tres:</strong><br>";
                    echo implode(", ", $multiplosDeTres);
                    echo "</div>";

                    // Contar los números pares
                    $cantidadPares = count($pares);

                    echo "<div class='alert alert-success'>";
                    echo "<strong>Cantidad de números pares:</strong><br>";
                    echo $cantidadPares;
                    echo "</div>";

                    // Comprobar si hay algún múltiplo de 5
                    $hayMultiplo5 = array_any($todos, function ($n) {
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

                    // Extraer los números primos
                    $primos = array_filter($todos, function ($n) {
                        return esPrimo($n);
                    });

                    echo "<div class='alert alert-warning'>";
                    echo "<strong>Números primos:</strong><br>";
                    echo implode(", ", $primos);
                    echo "</div>";

                    // Buscar el primer número con dos cifras iguales
                    $encontrado = array_find($todos, function ($n) {
                        return $n >= 10 && $n <= 99 && $n % 11 == 0;
                    });

                    echo "<div class='alert alert-primary'>";
                    echo "<strong>Primer número con dos cifras iguales:</strong><br>";
                    echo $encontrado;
                    echo "</div>";

                    // Obtener el cuadrado de cada número
                    $cuadrados = array_map(function ($n) {
                        return $n * $n;
                    }, $todos);

                    echo "<div class='alert alert-danger'>";
                    echo "<strong>Cuadrado de los números:</strong><br>";
                    echo implode(", ", $cuadrados);
                    echo "</div>";

                    // Multiplicar cada número por dos
                    $dobles = $todos;

                    array_walk($dobles, function (&$n) {
                        $n = $n * 2;
                    });

                    echo "<div class='alert alert-dark'>";
                    echo "<strong>Números multiplicados por dos:</strong><br>";
                    echo implode(", ", $dobles);
                    echo "</div>";

                    // Buscar los números que están en ambos arrays
                    $comunes = array_intersect($pares, $multiplosDeTres);

                    echo "<div class='alert alert-success'>";
                    echo "<strong>Números que están en ambos arrays:</strong><br>";
                    echo implode(", ", $comunes);
                    echo "</div>";

                    // Contar las apariciones de cada número
                    $repetidos = array_count_values($todos);

                    echo "<div class='alert alert-secondary'>";
                    echo "<strong>Recuento de apariciones de los números:</strong><br>";
                    echo "<pre>";
                    print_r($repetidos);
                    echo "</pre>";
                    echo "</div>";

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>

</html>