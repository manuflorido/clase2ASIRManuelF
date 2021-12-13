<?php
$texto=$_POST["text"];
$operacion=$_POST["operacion"];

switch ($operacion) {
    case 'leer':
        //Si quiere leer
        $var2=filesize("log.txt");
        $var=fopen("log.txt","r") or die("Error 404 Server Not Found");
        echo fread($var,$var2);
        fclose($var);
        break;

    case 'escribir':
        //Si quiere escribir
        $var=fopen("log.txt","a") or die("Error 404 Server Not Found");
        fwrite($var,"<br>" . $texto);
        fclose($var);
        echo "Su información ha sido añadida al fichero log.txt"; 
        break;
    
    default:
        echo "Te comes los mocos";
        break;
}

?>