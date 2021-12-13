<?php
include 'funcionCadenas.php';
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];

    $operador = $_POST["operacion"];
    switch ($operador) {
        case 'cuentac':
            cuentac($text1);
            break;
        case 'cuentap':
            cuentap($text1);
            break;
        case 'invierte':
            invierte($text1);
            break;
        case 'busq':
            busqueda($text1, $text2);
            break;
        case 'reem':
            reemplaza($text3,$text2,$text1);
            break;
        default:
            echo "La has liado";
            break;
        }






?>