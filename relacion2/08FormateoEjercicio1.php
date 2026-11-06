<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
</head>
<body>
    <body class="bg-muted-inverse ">

   
    <div id="main" class="container bg-success text-center">
        <h2 class="text-primary text-center mt-5 pt-3" >Formulario de referencia</h2>
        
        <div class="row">

            <div class="col-md-3 col-sm-1 col-0">
            </div>
            <div class="col-md-6 col-sm-10 col-12">
                <form class="border 50 rounded-3 border-warning p-4 shadow-lg bg-info pb-5" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    
                    <div class="mb-3 border-text-secondary">
                        <label for="n1" class="form-label fw-bold">Número 1</label>
                        <input type="number" class="form-control" id="n1" aria-describedby="emailHelp"  name="n1">                    </div>
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
                        <label class="form-check-label" for="exampleCheck1" >Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Calcular</button>
                </form>
                    <?php  
                        if (isset($_GET["submit"])){

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
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">


    </script>       
</body>
</html>