<?php

    function mostrar_naturales($n) {
        for ($i = 1; $i <= $n; $i++) {
            echo $i . " ";
        }
    }

    echo "Los primeros 10 numeros naturales son: ";
    mostrar_naturales(10);
    
?>