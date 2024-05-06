<?php

    $numeros = array();

    for ($n = 1,; $m <= 10; $n++){
        $numeros = $_POST["numero"];
    }

    $suma = array_sum($numeros);

    $promedio = $suma / count($numeros);

    echo "La suma de los numeros es: $suma\n";
    echo "El promedio de los numeros es: $promedio\n";

?>