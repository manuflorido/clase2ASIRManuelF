<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Fechas <?php echo date("d/n/Y");?></title>
</head>
<body>

    <h2>Ejercicio de tratamiento de fechas</h2>

    <p>Vamos a aprender a tratar fechas en php y funcionalidades</p>
    <br>

<?php
    echo "Vamos a trabajar con fechas" . "<br>";
    echo "Hoy es: " . date("l") . "<br>";
    echo "Dime la fecha actual: " . date("Y-m-d") . "<br>". "<br>". "<br>";

$hora = date("H");
 echo "Ejercicio ejemplo IF" . "<br>";
 echo "Son las: " . date("h:i:s") . "<br>";
    if($hora<15){
        echo "Estoy en el aula 5 churri" . "<br>" . "<br>". "<br>";
    }else {
        echo "Estoy ya en casa brrrr" . "<br>". "<br>". "<br>";
    }

$segundos = date("s");
  echo "Ejercicio ejemplo ELSEIF" . "<br>";
  echo "$segundos" . "<br>";
      if($segundos<=10){
         echo "Primeros 10 segundos" . "<br>";
      }elseif($segundos>=50) {
         echo "Últimos 10 segundos" . "<br>";
      }else {
         echo "Segundos intermedios" . "<br>";
      }

echo "<br>" . "<br>" . "Ejercicio ejemplo switch" . "<br>";
$colores = "verde";
switch ($colores) {
    case 'Rojo':
        echo "La sangre es de color: " . "$colores" . "<br>";
        break;

    case 'Verde':
        echo "La hierba es de color: " . "$colores" . "<br>";
        break;

    case 'Azul':
        echo "Mi color favorito es el: " . "$colores" . "<br>";
        break;
            
    default:
        echo "No tengo el color " . "$colores" . " en la base de datos";
        break;
}

?>

</body>
</html>