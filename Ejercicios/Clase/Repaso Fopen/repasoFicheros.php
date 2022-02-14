<?php

//Comprobación de si existe un fichero
if (file_exists("../../Casa/Cadenas/cadenas.html") == true) {
    echo "Si existe el fichero" . "<br>";
} else {
    echo "No existe el fichero" . "<br>";
}


//Crear un fichero
$fichero= fopen("tela.txt","a");

if ($fichero == false) {
    echo "El fichero no se ha creado" . "<br>";
} else {
    echo "El fichero se ha creado" . "<br>";
}

fclose($fichero);

$telita=fopen("tela.txt","w+");
if ($telita == false) {
    echo "El fichero no se ha creado" . "<br>";
} else {
    //Escritura dentro del archivo
    fwrite($telita,"Hola buenas tardes mi bro\r\n");
    fwrite($telita,"Que pasa hermano");
    fflush($telita);
}
fclose($telita);

//Leer fichero
echo readfile("tela.txt") . "<br>";

//Peso del archivo
$pesoArchivo=filesize("tela.txt");

$telita=fopen("tela.txt","a+");
echo fread($telita, $pesoArchivo);
fclose($telita);


?>