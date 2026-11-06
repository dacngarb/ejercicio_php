
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php

$personas = [
    ["nombre" => "Carlos", "apellido" => "García López", "correo" => "carlos@gmail.com", "telefono" => "612345678"],
    ["nombre" => "María", "apellido" => "Fernández Ruiz", "correo" => "maria@gmail.com", "telefono" => "623456789"],
    ["nombre" => "Antonio", "apellido" => "Martínez Pérez", "correo" => "antonio@gmail.com", "telefono" => "634567890"],
    ["nombre" => "Laura", "apellido" => "Sánchez Díaz", "correo" => "laura@gmail.com", "telefono" => "645678901"],
    ["nombre" => "David", "apellido" => "Romero Torres", "correo" => "david@gmail.com", "telefono" => "656789012"],
    ["nombre" => "Lucía", "apellido" => "Navarro Gil", "correo" => "lucia@gmail.com", "telefono" => "667890123"]
];

?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Listado de personas</h2>
        </div>

        <div class="card-body">

            <p class="text-muted">
                Listado de personas registradas en nuestra base de datos.
            </p>

            <div class="table-responsive">

                <table class="table table-striped table-hover table-bordered">

                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        foreach ($personas as $persona): 
                        ?>

                        <tr>
                            <td><?php echo htmlspecialchars($persona["nombre"]); ?></td>
                            <td><?php echo htmlspecialchars($persona["apellido"]); ?></td>
                            <td><?php echo htmlspecialchars($persona["correo"]); ?></td>
                            <td><?php echo htmlspecialchars($persona["telefono"]); ?></td>
                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <div class="alert alert-info">
                Total de personas: <?php echo count($personas); ?>
            </div>

        </div>
    </div>

</div>

</body>
</html>
