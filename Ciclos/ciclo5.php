<?php

    function tabla_multiplicar($numero) {
        echo "Tabla de multiplicar del $numero:\n";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "\n" . "<br>";
        }
    }

    if(isset($_POST['submit'])){
        $numero = $_POST['numero'];
        tabla_multiplicar($numero);
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
        <label for="numero">Ingrese un numero para mostrar su tabla de multiplicar:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" name="submit" value="Mostrar tabla">
    </form>
</body>
</html>