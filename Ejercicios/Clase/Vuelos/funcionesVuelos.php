<?php
//Funciones

//Une Vuelos
function uneV ($vuelo1, $vuelo2){
    $var = array_merge($vuelo1, $vuelo2);
    print_r($var);
    echo "<br>";
}

//Diferencia entre vuelos
function difV ($vuelo1, $vuelo2){
    $var = array_diff($vuelo1, $vuelo2);
    print_r($var);
    echo "<br>";
}

//Ordena vuelos
function sortV ($vuelo1, $vuelo2){
    // $resOrdena = array(uneV($vuelo1, $vuelo2));
    // sort($resOrdena);
    // print_r($resOrdena);
    $var = array_merge($vuelo1, $vuelo2);
    ksort($var);
    print_r($var);
}

//Información Común
function eqV ($vuelo1, $vuelo2){
    $var = array_intersect($vuelo1, $vuelo2);
    print_r($var);
}
?>