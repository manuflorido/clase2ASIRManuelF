<?php
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];

        #Función Suma
        function suma($num1, $num2){
            $res=$num1+$num2;
            echo "Resultado: " . $res . "<br>";   
        }

        #Función Resta
        function resta($num1, $num2){
            if ($num2 > $num1) {
                $res=$num2-$num1;
                echo "Resultado: " .  $res . "<br>";
            }
            else {
                $res=$num1-$num2;
                echo "Resultado: " .  $res . "<br>";  
            }
        }

        #Función Multiplicación
        function mult($num1, $num2){
            $res=$num1*$num2;
            echo "Resultado: " .  $res . "<br>";   
        }

        #Función División
        function div($num1, $num2){
            if ($num2 > $num1) {
                $res=$num2/$num1;
                echo "Resultado: " .  $res . "<br>";
            }
            else {
                $res=$num1/$num2;
                echo "Resultado: " .  $res . "<br>";  
            }
        }

        #Función Resto
        function resto($num1, $num2){
            if ($num2 > $num1) {
                $res=$num2%$num1;
                echo "Resultado: " .  $res . "<br>";
            }
            else {
                $res=$num1%$num2;
                echo "Resultado: " .  $res . "<br>";  
            }
        }

        #Función Raiz Cuadrada
        function raiz($num1){
            $res=sqrt($num1);
            echo "Resultado: " .  $res . "<br>";
        }

        #Función Elevar al Cuadrado
        function cuadrado($num1){ 
            $res=$num1*$num1;
            echo "Resultado: " .  $res . "<br>";
        }

        #Función Elevar al Cubo
        function cubo($num1){ 
            $res=$num1*$num1*$num1;
            echo "Resultado: " .  $res . "<br>";
        }

        #Elevar a cualquier Exponente
        function exponente($num1, $num2){
            $res=pow($num1,$num2);
            echo "Resultado: " .  $res . "<br>";
        }

        #Fibonacci
        function fibo($num1){
            $n=0;
            $n1=1;
            $n2=0;
            echo "Resultado: ";
            while ($num1>0) {
                echo $n2 . " ";
                $n2=$n1+$n;
                $n1=$n;
                $n=$n2;
                $num1--;
        }

        }
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