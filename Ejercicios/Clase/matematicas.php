<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Matemáticas</title>
</head>
<body>
<?php
    echo "Ejemplo de bucle WHILE" . "<br>";
    $numero = 0;
    while ($numero <= 10) {
        echo "Contador: " . "$numero" . "<br>";
        $numero++;
    }
    echo "La cuenta ha finalizado" . "<br>" . "<br>";

    echo "Ejemplo 2 de bucle WHILE" . "<br>";
    $numero1 = 0;
    $aleatorio = rand(0,100);
    echo "Número aleatorio: " . "$aleatorio" . "<br>";
    while ($numero1 <= $aleatorio) {
        echo "Contador: " . "$numero1" . "<br>";
        $numero1++;
    }
    echo "La cuenta ha finalizado";
?>
</body>
</html>