<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>
    <style>
        form{
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <form id="formulario_calculadora">
        <fieldset>
        <legend>Calculadora</legend><br>
            <label>Número 1: </label><input type="text" name="num1" /><br><br>
            <label>Número 2: </label><input type="text" name="num2" /><br><br>
            <label>Operación:<br><br>
                                 <input type="button" name="suma" value="+"/>
                                 <input type="button" name="resta" value="-"/>
                                 <input type="button" name="mult" value="*"/>
                                 <input type="button" name="div" value="/"/>
                                 <input type="button" name="resto" value="%"/>
            </label><br><br>
            <label><input type="submit" name="resolver" value="Resolver" /></label>
            <label><input type="reset" name="reset" /></label>
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

        $prueba=2;
        $prueba2=10;
        suma($prueba,$prueba2);
        resta($prueba,$prueba2);
        mult($prueba,$prueba2);
        div($prueba,$prueba2);
        resto($prueba,$prueba2);
    ?>
</body>
</html>