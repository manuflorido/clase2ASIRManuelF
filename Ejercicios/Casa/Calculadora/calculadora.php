<?php
include 'funcionesCalculadora.php';
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];

        $operador = $_POST["operacion"];
        switch ($operador) {
            case 'suma':
                suma($num1,$num2);
                break;
            case 'resta':
                resta($num1,$num2);
                break;
            case 'multiplicacion':
                mult($num1,$num2);
                break;
            case 'division':
                div($num1,$num2);
                break;
            case 'resto':
                resto($num1,$num2);
                break;
            case 'exponente':
                exponente($num1,$num2);
                break;
            case 'fibonacci':
                fibo($num1);
                break;
            case 'raiz':
                raiz($num1);
                break;
            default:
                echo "La has liado";
                break;
        }
    ?>