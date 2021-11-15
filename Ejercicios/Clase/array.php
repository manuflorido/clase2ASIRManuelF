<?php
//Bucles anidados independientes
print "<b>Bucle independiente</b><br>";
for ($inicio=0; $inicio < 5; $inicio++) { 
        print "<b>Vamos por la iteración inicio: " . $inicio . "</b><br>"; //Columnas
    for ($inicio2=0; $inicio2 < 5; $inicio2++) { 
        
        print "Vamos por la iteración inicio2: " . $inicio2 . "<br>"; //Filas
    }
}


//Bucles anidados dependientes
print "<br><b>Bucle dependiente</b><br>";
for ($varExterior=0; $varExterior < 5; $varExterior++) { 
    print "<b>Variable exterior: " . $varExterior . "</b><br>";

    for ($varInterior=0; $varInterior < $varExterior; $varInterior++) { 
        print "Variable interior: " . $varInterior . "<br>";
    }
}


//ARRAYS
print "<br><b>Arrays 'Estándar'</b><br>";

#Forma 1
$numerosP = array(2, 4, 6, 8, 10);
print_r($numerosP);
print "Muestro posición 3: " . $numerosP[3] . "<br>";
#Forma 2
$numerosI = [1, 3, 5, 7, 9];
print_r($numerosI);
print "Muestro posición 3: " . $numerosI[3] . "<br>";

//Mostrar Array bonito
print "<br><b>Mostrar Array Bonito</b><br>";
$cuentaNumerosP=count($numerosP);
echo "Valor de la cuenta de Array NumerosP: " . $cuentaNumerosP . "<br>";
for ($i=0; $i < $cuentaNumerosP; $i++) { 
    print "Muestro posición " . $i . ": " . $numerosP[$i] . "<br>";
}


//ARRAYS ASOCIATIVOS
print "<br><b>Arrays 'Asociativos'</b><br>";

$potencias2 = [1=>2, 2=>4, 3=>8];
$capitales = array("Madrid" => "Madrid",
 "Andalucia" => "Sevilla",
  "Aragón" => "Zaragoza",
   "Baleares" => "Palma de Mallorca");
print_r ($capitales);
echo "<br>";

print_r ($potencias2);
echo "<br>";

//Añadir elementos a un array
print "<br><b>Añadir elementos en un Array</b><br>";
$capitales["Cataluña"] = "Barcelona";
print_r ($capitales);
echo "<br>";

$capitales["Andalucia"]="Almeria";
print_r ($capitales);
echo "<br>";

print "<br><b>Contar letras de un Array</b><br>";
$cuentaLetras = strlen($capitales["Andalucia"]);
echo $capitales["Andalucia"] . ": " . $cuentaLetras . "<br>";

print "<br><b>Mostrar ARRAY notas</b><br>";
$notasAsignatura=["LMI"=>0,
 "EIE"=>4,
  "PAR"=>8,
   "ISO"=>5,
    "FH"=>7,
     "BD"=>3];

print_r($notasAsignatura);
echo "<br>";


//Unión de ARRAYS
print "<br><b>Unión de ARRAYS</b><br>";
$coches1 = ["Seat", "Renault", "Dacia"];
$coches2 = ["BMW", "AUDI"];
print_r($coches1);
echo "<br>";
print_r($coches2);
echo "<br>";
$union1con2=$coches1+$coches2;
print_r($union1con2);
echo "<br>";
$union2con1=$coches2+$coches1;
print_r($union2con1);
echo "<br>";

//Borrar elemento dentro de un ARRAY
print "<br><b>Eliminar elemento ARRAYS</b><br>";
$coches3 = ["Seat", "Renault", "Dacia", "BMW", "AUDI"];
print_r($coches3);
echo "<br>";
unset($coches3[1]);
print_r($coches3);
echo "<br>";
print $coches3[]="Ferrari";
print_r($coches3);
echo "<br>";

//Copiar matrices
print "<br><b>Copiar matrices</b><br>";
$copiaCapitales = $capitales;
$copiaCapitales["Andalucia"] = "Córdoba";
print_r($copiaCapitales);
echo "<br>";

// CLASE 12 DE NOVIEMBRE
$colores1 = ["Verde", "Azul", "Amarillo", "Rojo", "Negro"];
$colores2 = ["Verde", "Azul", "Amarillo", "Rojo", "Blanco"];
echo "<br>";

$resultadoDiferencia= array_diff($colores2, $colores1);
$resultadoUnion = array_merge($colores2, $colores1);
$resultadoInterseccion = array_intersect($colores2, $colores1);
//Ordenar array
/*r*/sort($colores2);
//Añadir elementos al final de un array
array_push($colores2, "Púrpura", "Marrón", "Celeste");
print_r($resultadoDiferencia);
echo "<br>";
print_r($resultadoUnion);
echo "<br>";
print_r($resultadoInterseccion);
echo "<br>";
print_r($colores2);
echo "<br>";



/*
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
    */
?>