<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP Manuel Florido</title>
    <style>
        form{
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        .inputoperacion{
            width: 5%;
        }
        input{
            width: 6%;
        }
    </style>
</head>
<body>
    <form id="formulario_calculadora">
        <fieldset>
        <legend>Calculadora</legend><br>
            <label>Número → </label><input type="text" name="num1" />
            <label>Número → </label><input type="text" name="num2" /><br><br>
            <label>Operación:<br><br>
                                 <input class="inputoperacion" type="button" name="suma" value="+"/>
                                 <input class="inputoperacion" type="button" name="resta" value="-"/>
                                 <input class="inputoperacion" type="button" name="mult" value="*"/>
                                 <input class="inputoperacion" type="button" name="div" value="/"/>
                                 <input class="inputoperacion" type="button" name="resto" value="%"/>
            </label><br><br>
            <label>Raíz cuadrada → </label><input type="text" name="numraiz" />
            <label>Elevar al cuadrado → </label><input type="text" name="numcuadrado" />
            <label>Elevar al cubo → </label><input type="text" name="numcubo" />
            <label>Fibonacci → </label><input type="text" name="numfibo" /><br><br>
            <label>Base → </label><input type="text" name="numbase" />
            <label>Exponente → </label><input type="text" name="numexpo" /><br><br>
            <label><input type="submit" name="resolver" value="Resolver" /></label>
            <label><input type="reset" name="reset"  value="Reset"/></label>
        </fieldset><br>
    </form>
    <h2>Resultado: </h2>

    <?php
        #Función Suma
        function suma($num1, $num2){
            $res=$num1+$num2;
            echo $res . "<br>";   
        }
        #Función Resta
        function resta($num1, $num2){
            if ($num2 > $num1) {
                $res=$num2-$num1;
                echo $res . "<br>";
            }
            else {
                $res=$num1-$num2;
                echo $res . "<br>";  
            }
        }
        #Función Multiplicación
        function mult($num1, $num2){
            $res=$num1*$num2;
            echo $res . "<br>";   
        }
        #Función División
        function div($num1, $num2){
            $res=$num1/$num2;
            echo $res . "<br>";   
        }
        #Función Resto
        function resto($num1, $num2){
            $res=$num1%$num2;
            echo $res . "<br>";   
        }
        #Función Raiz Cuadrada
        function raiz($num1){
            $res=sqrt($num1);
            echo $res . "<br>";
        }

        #Función Elevar al Cuadrado
        function cuadrado($num1){ 
            $res=$num1*$num1;
            echo $res . "<br>";
        }
        #Función Elevar al Cubo
        function cubo($num1){ 
            $res=$num1*$num1*$num1;
            echo $res . "<br>";
        }
        #Elevar a cualquier Exponente
        function exponente($num1, $num2){
            $res=pow($num1,$num2);
            echo $res . "<br>";
        }
        #Fibonacci
        function fibo($num1){
            $n=0;
            $n1=1;
            $n2=0;
            while ($num1>0) {
                $n2=$n1+$n;
                $n1=$n;
                $n=$n2;
                $num1--;
                echo $n2 . " ";
        }
        }
        $prueba=8;
        $prueba2=3;
        suma($prueba,$prueba2);
        resta($prueba,$prueba2);
        mult($prueba,$prueba2);
        div($prueba,$prueba2);
        resto($prueba,$prueba2);
        raiz($prueba2);
        cuadrado($prueba);
        cubo($prueba);
        exponente($prueba,$prueba2);
        fibo($prueba);
    ?>
</body>
</html>