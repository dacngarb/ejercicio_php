<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 12</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <?php

                    function swap(&$n1, &$n2)
                    {

                        $aux = $n1;
                        $n1 = $n2;
                        $n2 = $aux;
                    }

                    function ordenarBurbuja(&$array)
                    {

                        for ($i = 0; $i < count($array) - 1; $i++) {

                            for ($j = 0; $j < count($array) - 1 - $i; $j++) {

                                if ($array[$j] > $array[$j + 1]) {

                                    swap($array[$j], $array[$j + 1]);
                                }
                            }
                        }
                    }

                    $datos = ['Pérez', 'García', 'López', 'Márquez', 'Álvarez', 'Domínguez', 'Ruíz', 'Díaz'];

                    echo "<h5>Array original:</h5>";
                    print_r($datos);

                    ordenarBurbuja($datos);

                    echo "<h5 class='mt-3'>Array ordenado:</h5>";
                    print_r($datos);

                    $numeros = [8, 3, 10, 1, 5, 2];

                    echo "<hr>";
                    echo "<h5>Array de números original:</h5>";
                    print_r($numeros);

                    ordenarBurbuja($numeros);

                    echo "<h5 class='mt-3'>Array de números ordenado:</h5>";
                    print_r($numeros);

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>
            </div>
        </div>
    </div>
</body>

</html>