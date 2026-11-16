<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <?php
        class Fruta{
            public $nombre;
            public $color;

            function set_nombre($nombre, $color){
                $this->nombre = $nombre;
                $this->color = $color;
            }

            function get_nombre(){
                echo "Name: ".$this->nombre.", Color: ",$this->color."<br>";
                
            }
        }

        $apple = new Fruta();
        $apple->set_nombre('Apple', 'rojo');
        $apple->get_nombre();

        $banana = new Fruta();
        $banana->set_nombre('Banana', 'Amarillo');
        $banana->get_nombre();

    ?>
<br>
<a href="index.html" >
    <button type="submit" class="btn btn-primary btn-success mt-2" name="submit"> &lt;- VOLVER </button>
</a>
</body>
</html>