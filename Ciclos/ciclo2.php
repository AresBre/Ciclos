<?php

    function suma_naturales($n) {
        $suma = 0;
        $i = 1;
        while ($i <= $n) {
            $suma += $i;
            $i++;
        }
        return $suma;
    }

    $resultado = suma_naturales(20);

    echo "La suma de los primeros 20 numeros naturales es: " . $resultado;
?>