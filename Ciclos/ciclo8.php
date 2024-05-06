<?php
    function mostrar_piramide($altura) {
        $numero = 1; 

        for ($fila = 1; $fila <= $altura; $fila++) {

            for ($col = 1; $col <= $fila; $col++) {
                echo $numero . " ";
                $numero++;
            }

            echo "<br>";
        }
    }

    mostrar_piramide(4);
?>