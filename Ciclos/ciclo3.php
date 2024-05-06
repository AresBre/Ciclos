<?php

    function fibonacci($n) {
        $num1 = 0;
        $num2 = 1;
        $suma = 0;

        echo "Los primeros $n terminos de la serie de Fibonacci son: ";

        for ($i = 1; $i <= $n; $i++) {
            echo $num1 . " ";
            $suma += $num1;
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }

        echo "<br>La suma de los primeros $n terminos de la serie de Fibonacci es: $suma";
    }

    if(isset($_POST['submit'])){
        $n = $_POST['n'];
        fibonacci($n);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="n">Ingrese el número de términos a mostrar:</label>
        <input type="number" id="n" name="n" min="1" required>
        <input type="submit" name="submit" value="Mostrar">
    </form>
</body>
</html>