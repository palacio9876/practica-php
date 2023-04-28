<?php
if ($_POST) {

    $valor1 = $_POST['valorOne'];
    $valor2 = $_POST['valorTwo'];

    // Suma
    $suma=$valor1+$valor2;
    // Resta
    $resta=$valor1-$valor2;
    // Multiplicacion
    $multiplicacion=$valor1*$valor2;
    // Division
    $division=$valor1/$valor2;
    // echo "El resultado de la suma es de: ".$suma."<br>";
    // echo "El resultado de la resta es de: ".$resta."<br>";
    // echo "El resultado de la multiplicacion es de: ".$multiplicacion."<br>";
    // echo "El resultado de la division es de: ".$division."<br>";

    if($valor1 == $valor2){
        echo "Son iguales <br>";
        if($valor1 == 4 || $valor2==4){
            echo "Son valores que tienen el numero 4";
        }
        if($valor1 == 1 || $valor2==1){
            echo "Son valores que tienen el numero 1";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos</title>
</head>
<body>
    
    <form action="ifanidados.php" method="post">
        Ingrese el numero 1:
        <input type="text" name="valorOne" id=""> <br>
        Ingrese el numero 2:
        <input type="text" name="valorTwo" id="">
        <input type="submit" value="Calcular">
    </form>

</body>
</html>