<?php
if ($_POST) {
    $button = $_POST['btnValor'];

    switch($button){
        case 1:
            echo "Selecciono el valor 1";
            break;
        case 2:
            echo "Selecciono el valor 2";
            break;
        case 3:
            echo "Selecciono el valor 3";
            break;
    }
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
    <form action="switch.php" method="post">
        <input type="submit" name="btnValor"value="1"><br>
        <input type="submit" name="btnValor"value="2"><br>
        <input type="submit" name="btnValor"value="3"><br>
    </form>
</body>
</html>