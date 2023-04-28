<?php

if ($_POST) {
    $nameUser = $_POST ['name'];
    $lastName = $_POST ['lastname'];
    echo "Hola ".$nameUser." ".$lastName." Un gusto";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="concatenacion.php" method="post">
        Nombre:
        <input type="text" name="name" id="">
        <br>
        Apellido:
        <input type="text" name="lastname" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
