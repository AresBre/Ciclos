<?php
    function patron($numero){
        for($n = 1; $n <= $numero; $n++){
            for($g = 1; $g <= $n; $g++){
                echo "*";
            }
            echo "<br>";
        }

        for($n = $numero-1; $n >= 1; $n--){
            for($g = 1; $g <= $n; $g++){
                echo "*";
            }
            echo "<br>";
        }
    }

    patron(5);
?>