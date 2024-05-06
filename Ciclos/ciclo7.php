<?php
    function piramide($cantidad){
        for($num = 1; $num <= $cantidad; $num++){
            for($mun = 1; $mun <= $num; $mun++){
                echo $mun; 
            }
            echo "<br>";
        }
    }

    piramide(5)
?>