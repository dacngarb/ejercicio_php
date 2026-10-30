<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora bootstrap</title>
</head>
<body>
    <h2>Formulario de referencia</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div>
            <label for="n1">Número 1</label>
            <input type="number" id="n1" name="n1">
        </div>

        <div>
            <select name="op">
                <option selected>Elige un operador</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
        </div>

        <div>
            <label for="n2">Número 2</label>
            <input type="number" id="n2" name="n2">
        </div>

        <div>
            <input type="checkbox" id="exampleCheck1">
            <label for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="submit">Calcular</button>

    </form>

    <?php
        if (isset($_GET["submit"])) {

            // Recogida de datos
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $op = $_GET["op"];

            // Operaciones
            $resultado = match($op) {
                "+" => $n1 + $n2,
                "-" => $n1 - $n2,
                "*" => $n1 * $n2,
                "/" => $n1 / $n2,
                "%" => $n1 % $n2,
            };

            echo "El resultado es: $resultado";
        }
    ?>
</body>
</html>