<?php
$nombre=$_POST["text1"];
$apellidos=$_POST["text2"];
$edad=$_POST["text3"];
$activo=$_POST["operacion"];

$fichero= fopen("ticket.txt", "w+");
fwrite($fichero, $nombre . "\r\n");
fwrite($fichero, $apellidos . "\r\n");
fwrite($fichero, $edad . "\r\n");
if ($activo == "Si") {
    fwrite($fichero, "Activo: SI\r\n");
}else {
    fwrite($fichero, "Activo: NO\r\n");
}
fclose($fichero);

$peso=filesize("ticket.txt");

$lectura=fopen("ticket.txt", "a+");
echo fread($lectura,$peso);
fclose($lectura);
?>