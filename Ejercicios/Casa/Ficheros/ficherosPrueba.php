<?php

$datosRecogidos=$_POST["texto1"];

echo readfile("pruebaFichero.txt") . "<br>" . "<br>";
$var2=filesize("pruebaFichero.txt");

//APERTURA Y LECTURA DE FICHERO
$var=fopen("pruebaFichero.txt","r") or die ("El migue de aeronáutica") . "<br>";
echo fread($var, $var2);
fclose($var);

//ESCRIBIR EN UN FICHERO
$fichero=fopen("pruebaFichero.txt","w") or die ("El migue de aeronáutica") . "<br>";
$nuevoTexto="Que te gustan las variables";
$nuevoTexto2=$datosRecogidos;
fwrite($fichero,$nuevoTexto);
fclose($fichero);





?>