<?php
    function patron_Z($altura) {

        for ($fila = 1; $fila <= $altura; $fila++) {

            if ($fila == 1 || $fila == $altura) {
                for ($i = 1; $i <= $altura; $i++) {
                    echo "*";
                }
            } else {
                for ($i = 1; $i <= $altura - $fila; $i++) {
                    echo "&nbsp;";
                }
                echo "*";
            }
            echo "<br>";
        }
    }

    patron_Z(7);
?>