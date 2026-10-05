<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-secondary ">

    <!--Como se monta un grid para distribuir el espacio-->
    <!--1º un div de class container-->
    <div id="main" class="container bg-secondary-subtle text-center">
        <h2 class="text-primary text-center mt-5 pt-3" >Formulario de referencia</h2>
        
        <!--2º un div de class row-->
        <div class="row">

            <!--3º Varios div para columnas, indicando reparto de las 12 areas de columna-->
            <div class="col-md-3 col-sm-1 col-0">
                <!--Aqui va un espacion en blanco a la ixquierda-->
            </div>
            <div class="col-md-6 col-sm-10 col-12">
                <form class="border 50 rounded-3 border-warning p-4 shadow-lg bg-info pb-5" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    
                    <div class="mb-3 border-text-secondary">
                        <label for="n1" class="form-label fw-bold">Número 1</label>
                        <input type="number" class="form-control" id="n1" aria-describedby="emailHelp"  name="n1">
                    <!--<div id="emailHelp" class="form-text">Es obligatorio</div>-->
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="op">
                            <option selected>Elige un operador</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="n2" class="form-label fw-bold">Número 2</label>
                        <input type="number" class="form-control" id="n2" name="n2">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Calcular</button>
                </form>
                <!--Aquí se procesan los datos al pulsar el botón enviar-->
                    <?php  
                        if (isset($_GET["submit"])){//solo se ejecuta si he pulsado submit

                            //zona de "descarga" de datos
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
                    ?>

            </div>
            <div class="col-md-3 col-sm-1 col-0">
                <!--Aqui va un espacion en blanco a la ixquierda-->           
            </div>
        </div>
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">


    </script>       
</body>
</html>