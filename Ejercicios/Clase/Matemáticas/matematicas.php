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
    $aleatorio = rand(0,20);
    echo "Número aleatorio: " . "$aleatorio" . "<br>";
    while ($numero1 <= $aleatorio) {
        echo "Contador: " . "$numero1" . "<br>";
        $numero1++;
    }
    echo "La cuenta ha finalizado" . "<br>" . "<br>";

    echo "Ejemplo bucle FOR" . "<br>";
    for ($cuenta=0; $cuenta <= 10; $cuenta++) { 
        echo "Contador:" . "$cuenta" . "<br>";
    }
    echo "<br>";


    #Definimos una variable que sean boolean
    $esMayor=true;

    function persona($nombre, $edad){
        echo "Su nombre es: " . $nombre . "<br>";

        if ($edad%2==0) {
            echo "Su edad es par" . "<br>";
        }
        else {
            echo "Su edad es impar" . "<br>";
        }
    }
    echo "Ejemplo de FUNCIONES" . "<br>";
    persona("Manuel", 21);
    echo "<br>";

    echo "Ejemplo ARRAY" . "<br>";
    $alumnos = array("Manule", "Javi", "ErCapiDeAeronáutica");
    echo "Hay " . count($alumnos) . " alumnos" . "<br>";

    $selectAleatorio = rand(0,2);
    echo "El alumno es: " . $alumnos[$selectAleatorio] . "<br>" . "<br>";


    echo "Ejemplo IS_INT" . "<br>";
    function esNumero($number){
        if (is_int($number)) {
            echo "Es un número entero" . "<br>" . "<br>";
        } else {
            echo "No es un número" . "<br>" . "<br>";
        }
        
    }

    esNumero("hola");

    #Funcion Preséntate
    function suma($num1, $num2){
        $res=$num1 + $num2;
     echo "El resultado es: " . $res . "<br>";   
    }

    suma(1,2);
    suma(3,4);

?>
</body>
</html>