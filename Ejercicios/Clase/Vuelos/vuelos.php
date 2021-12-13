<?php
include 'funcionesVuelos.php';

if (isset($_POST["infovuelo1"]) && isset($_POST["infovuelo2"])) {
    //Herramientas
$selector = $_POST["operacion"];

//Vuelo 1
$vuelo1=$_POST["infovuelo1"];
$cod1=$vuelo1["cod1"];
$cO1=$vuelo1["cO1"];
$cD1=$vuelo1["cD1"];
$precio1=$vuelo1["precio1"];
$fecha1=$vuelo1["fecha1"];
//$vuelo1 = [$cod1, $cO1, $cD1, $precio1, $fecha1];

//Vuelo 2
$vuelo2=$_POST["infovuelo2"];
$cod2=$vuelo2["cod2"];
$cO2=$vuelo2["cO2"];
$cD2=$vuelo2["cD2"];
$precio2=$vuelo2["precio2"];
$fecha2=$vuelo2["fecha2"];
//$vuelo2 = [$cod2, $cO2, $cD2, $precio2, $fecha2];

//Pruebas
//$vuelo1 = ["primero", "asegundo", "tercero", "tela"];
//$vuelo2 = ["cuarto", "quinto", "sexto", "tela"];



switch ($selector) {
    case 'uneV':
        uneV($vuelo1, $vuelo2);
        break;
    case 'difV':
        difV($vuelo1, $vuelo2);
        break;
    case 'sortV':
        sortV($vuelo1, $vuelo2);
        break;
    case 'eqV':
        eqV($vuelo1, $vuelo2);
        break;
    default:
        echo "La has liado";
        break;
    }

}


?>