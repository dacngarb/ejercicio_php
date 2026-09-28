<?php
    $rubricaCalificaciones = array(
        "Incial" => 0.2, 
        "Primera" => 0.1, 
        "Segunda" => 0.3, 
        "Tercera" => 0.4
    );

    $notasAlumno = array(
        "Incial" => 6, 
        "Primera" => 5, 
        "Segunda" => 9, 
        "Tercera" => 3
    );

    $notaFinal = 0;

    foreach ($rubricaCalificaciones as $notaEvaluacion => $rubrica) {
        $notaFinal += $notasAlumno[$notaEvaluacion] * $rubrica;
    }

    echo "La nota final del alumno es: " . $notaFinal;
?>
