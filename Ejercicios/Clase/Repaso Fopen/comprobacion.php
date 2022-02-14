<?php

if (! empty($_POST)) {
    if (isset($_POST["text1"])==true && isset($_POST["text2"])==true) {
        echo "Nombre: " . $_POST["text1"] . " apellidos: " . $_POST["text2"] . "<br>";
    }
    else {
        echo "Introduzca Nombre y Apellidos";
    }
} else {
    echo "Por favor, introduzca toda la información" . "<br>";
}


?>