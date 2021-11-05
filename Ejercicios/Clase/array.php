<?php 

    $numeros = array(8,3,7,1);
    $suspensos = array("Migue", "Kerry");
    $coches = array("Ferrari", "Seat", "BMW", "Opel", "Audi");

    echo $suspensos[0] . "<br>";
    echo $numeros[2] . "<br>";
    echo $coches[1] . "<br>";

    $cuentaCoches = count($coches);
    echo "Número de coches: " . $cuentaCoches . "<br>";

    $aleatorio = rand(0,$cuentaCoches-1);

    echo "Coche aleatorio: " . $coches[$aleatorio] . "<br>";

    $parada = 0;
    while ($parada < 5) {
        $aleatorior = rand(0,$cuentaCoches-1);
        echo "While Modelos: " . $coches[$aleatorior] . "<br>";
        $parada++;
    }

    
    $cochesOrdenados = sort($coches);

    #$parada = 0;
    #while ($parada < $cuentaCoches-1) {
    #    echo "Orden Modelos: " . $cochesOrdenados[$parada] . "<br>";
    #    $parada++;
    #}



    #ARRAY ASOCIATIVO

    $alumno = array(    "Nombre" => "Migue",
                        "Apellidos" => "Kerry",
                        "Edad" => 23,
                        "estaAprobado" => false
                    );
    echo $alumno["Nombre"] . " " . $alumno["Apellidos"];
?>