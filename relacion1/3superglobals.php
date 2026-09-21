<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        b{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Superglobals</h1>
    <ul>
        
        <?php
            echo "<li><b>Raiz: </b>".$_SERVER['DOCUMENT_ROOT']."</li><br>";
            echo "<li><b>Nombre del archivo: </b>".$_SERVER['PHP_SELF']."</li><br>";
            echo "<li><b>Nombre del servidor: </b>".$_SERVER['SERVER_NAME']."</li><br>";
            echo "<li><b>Cadena de identificación: </b>".$_SERVER['SERVER_SOFTWARE']."</li><br>";
            echo "<li><b>Nombre del protocolo: </b>".$_SERVER['SERVER_PROTOCOL']."</li><br>";
            echo "<li><b>Cabecera: </b>".$_SERVER['HTTP_HOST']."</li><br>";
            echo "<li><b>Nombre: </b>".$_SERVER['HTTP_USER_AGENT']."</li><br>";
            echo "<li><b>Dirección IP: </b>".$_SERVER['REMOTE_ADDR']."</li><br>";
            echo "<li><b>Puerto: </b>".$_SERVER['REMOTE_PORT']."</li><br>";
            echo "<li><b>Ruta absoluta: </b>".$_SERVER['SCRIPT_FILENAME']."</li><br>";
            echo "<li><b>URI: </b>".$_SERVER['REQUEST_URI']."</li><br>";

        ?>
        <?php
             var_dump($_SERVER);
             echo "<br><br>";
             print_r($_SERVER);
        ?>
    </ul>
</body>
</html>