<?php
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];

        echo "<p>El factorial de $numero es: " . factorial($numero) . "</p>";
    }

    function factorial($n) {

        if ($n == 0 || $n == 1) {
            return 1;
        } else {

            $resultado = 1;

            for ($i = 2; $i <= $n; $i++) {
                $resultado *= $i;
            }
            return $resultado;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>
    <h2>Calculadora de Factorial</h2>
    <form method="post" action="">
        <label for="numero">Ingrese un numero:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular factorial">
    </form>
</body>
</html>