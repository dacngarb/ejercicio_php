<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-4">EJERCICIO 18</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">¿Cuántos menús quieres generar?</label>
                            <input type="number" name="cantidad" class="form-control" min="1" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Generar menús
                        </button>
                    </form>

                    <?php

                    $menu = [
                        'entrante' => array('Ensalada César', 'Hummus', 'Boquerones al natural'),
                        'primero' => array('Gazpachuelo', 'Salmorejo', 'Ajo Blanco'),
                        'segundo' => array('Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo'),
                        'postre' => array('Helado 3 sabores', 'Flan', 'Tarta de Queso')
                    ];

                    if (isset($_POST["cantidad"])) {

                        $cantidad = $_POST["cantidad"];

                        if ($cantidad > 0) {

                            for ($i = 1; $i <= $cantidad; $i++) {

                                // Elegir un plato de cada categoría
                                $entrante = $menu["entrante"][array_rand($menu["entrante"])];
                                $primero = $menu["primero"][array_rand($menu["primero"])];
                                $segundo = $menu["segundo"][array_rand($menu["segundo"])];
                                $postre = $menu["postre"][array_rand($menu["postre"])];

                                echo "<div class='card mt-4 shadow'>";

                                echo "<div class='card-header bg-primary text-white'>";
                                echo "<h4 class='mb-0'>Menú sugerido " . $i . "</h4>";
                                echo "</div>";

                                echo "<div class='card-body'>";

                                echo "<p><strong>Entrante:</strong> " . $entrante . "</p>";
                                echo "<p><strong>Primer plato:</strong> " . $primero . "</p>";
                                echo "<p><strong>Segundo plato:</strong> " . $segundo . "</p>";
                                echo "<p class='mb-0'><strong>Postre:</strong> " . $postre . "</p>";

                                echo "</div>";
                                echo "</div>";
                            }
                        } else {

                            echo "<div class='alert alert-danger mt-4'>";
                            echo "Introduce una cantidad mayor que cero.";
                            echo "</div>";
                        }
                    }

                    ?>

                </div>

                <a href="index.html" class="btn btn-success mt-3">&lt;- VOLVER</a>

            </div>
        </div>
    </div>
</body>

</html>