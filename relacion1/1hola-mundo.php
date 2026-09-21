<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo PHP</title>
</head>
<body>

    <!-- Hola mundo como texto básico -->
    <?php echo 'Hola mundo'; ?>    

    <!-- Hola mundo como encabezado niivel 2 -->
    <h2><?php echo 'Hola mundo'; ?></h2>

    <!-- Hola mundo como parrafo con estilos -->
    <p style="color: red; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center;">
        <?php echo 'Hola mundo'; ?></p>
    
    <!-- Hola mundo cosalto de lineas -->
     <?php echo 'Hola<br>mundo'; ?>

    <!-- Hola mundo cosalto de lineas -->
    <br>
    <?php echo 'version: '.phpversion(), phpinfo(); ?>

    <!-- Mostrar fecha y hora del sistema  -->                
    <?php echo date("d-m-Y H:i:s") . "\n";  ?>

</body>
</html>