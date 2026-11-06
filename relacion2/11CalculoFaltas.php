
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 - Resultado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-dark">

    <div id="main" class="container py-5">

        <h2 class="text-center text-info fw-bold mb-5">
            Calculadora de notas
        </h2>

        <div class="row justify-content-center">

            <div class="col-md-7 col-sm-10 col-12">

                <div class="bg-white border rounded-4 p-4 shadow-lg">

                    <h4 class="text-center text-primary mb-4">
                        Resultado de las notas
                    </h4>

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {

                            if (isset($_GET["n1"], $_GET["n2"], $_GET["faltas"])) {

                                $n1 = (float) $_GET["n1"];
                                $n2 = (float) $_GET["n2"];
                                $faltas = (float) $_GET["faltas"];

                                $notaMedia = ($n1 + $n2) / 2;
                                $notaTotal = $notaMedia - $faltas * 0.25;

                                echo "La nota es: ".$notaTotal;
                                if($notaTotal >= 5){
                                    echo ". Está aprobado";
                                }else{
                                    echo ". Está suspenso";
                                }

                            }
                            
                        }
                        
                    ?>

                    <div class="d-grid mt-4">
                        <a href="11CaptacionNota.html"
                           class="btn btn-primary btn-lg fw-bold">
                            Volver a la calculadora
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
