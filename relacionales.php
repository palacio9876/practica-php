<?php
if ($_POST) {

    $valor1 = $_POST['valorOne'];
    $valor2 = $_POST['valorTwo'];

   if ($valor1>$valor2) {
    echo "el valor 1 es mayor que que el valor 2";
   }else if($valor1<$valor2){
    echo "el valor 2 es mayor que que el valor 1";
   } else{
    echo "Ambos numeros son iguales";
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
    
    <form action="relacionales.php" method="post">
        Ingrese el numero 1:
        <input type="text" name="valorOne" id=""> <br>
        Ingrese el numero 2:
        <input type="text" name="valorTwo" id="">
        <input type="submit" value="Calcular">
    </form>

</body>
</html>