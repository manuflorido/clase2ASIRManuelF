<?php
    $text1=$_POST["text1"];
    $text2=$_POST["text2"];
    $text3=$_POST["text3"];

    #Función cuenta caracteres
    function cuentac($text1){
        $res=strlen($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " caracteres";
    }

    #Función cuenta palabras
    function cuentap($text1){
        $res=str_word_count($text1);
        echo "El texto '" . $text1 .  "' tiene " . $res . " palabras";

    }

    #Función invierte texto
    function invierte($text1){
        $res=strrev($text1);
        echo "El texto '" . $text1 . "' invertido es " . $res;
    }

    #Función búsqueda
    function busqueda($text1, $text2){
        $res=strpos($text1,$text2);
          if ($res==True) {
            echo "La palabra " . $text2 . " se encuentra en el texto";
        } else {
            echo "La palabra " . $text2 . " no se encuentra en el texto";
        }
        
    }
    #Función reemplaza
    function reemplaza($text3,$text2,$text1){
        $res=str_replace($text3,$text2,$text1);
        echo "El nuevo orden es: " . $res;
    }

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