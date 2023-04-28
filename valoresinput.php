<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkjs = "";
$chknode = "";

$anime = "";

$comentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp = (isset($_POST['chkphp']) == "si")?"checked":"";
    $chkjs = (isset($_POST['chkjs']) == "si")?"checked":"";
    $chknode = (isset($_POST['chknode']) == "si")?"checked":"";

    $anime= (isset($_POST['anime']))?$_POST['anime']:"";

    $comentario = (isset($_POST['comentario']))?$_POST['comentario']:"";
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
    <?php if ($_POST) {?>
    <strong> Hola: </strong><?php echo $txtNombre; ?> <br>
    <strong>Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?> <br> 
    <strong>Estas aprendiendo: </strong> 
    <?php ($rdgLenguaje == "php")?"php":""; ?>
    <?php ($rdgLenguaje == "js")?"js":""; ?>
    <?php ($rdgLenguaje == "node")?"node":""; ?> <br> 
    <strong>Anime favorito: </strong><?php echo $anime ?><br> 
    <strong>Tu comentario es: </strong><?php echo $comentario ?><br> 
    <?php } ?>
    <form action="valoresinput.php" method="post">
        <p>Nombre: </p><br>
        <input placeholder="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
        <br>

        <p>¿Lenguaje preferido?:</p>
       <br>php: <input type="radio" <?php echo ($rdgLenguaje == "php")?"checked":"";?> name="lenguaje" value="php"><br>
       <br>js: <input type="radio"<?php echo ($rdgLenguaje == "js")?"checked":"";?> name="lenguaje"  value="js"><br>
       <br>node: <input type="radio" <?php echo ($rdgLenguaje == "node")?"checked":"";?> name="lenguaje" value="node"><br>
        
       <p>Estas aprendiendo...</p>
       <br>php: <input type="checkbox" <?php echo $chkphp ?>  name="chkphp" value="si" id="">
       <br>js: <input type="checkbox" <?php echo $chkjs ?>  name="chkjs" value="si" id="">
       <br>node: <input type="checkbox" <?php echo $chknode ?>  name="chknode" value="si" id="">

       <p>Que anime te gusta?</p>
       <select name="anime" id="">
            <option value="">Ningun anime</option>
            <option value="naruto" <?php echo ($anime == "naruto")?"selected":""?>>Naruto</option>
            <option value="dragon" <?php echo ($anime == "dragon")?"selected":""?> >Dragon ball</option>
            <option value="shingeki" <?php echo ($anime == "shingeki")?"selected":""?> >Shingeki no kyojin</option>
            <option value="piece" <?php echo ($anime == "piece")?"selected":""?> >One piece</option>
            <option value="death" <?php echo ($anime == "death")?"selected":""?> >Death note</option>
       </select>
       
       <p>Tienes dudas?</p>
       <br>
       <textarea name="comentario" id="" cols="30" rows="10">

       </textarea>

       <br><input type="submit" value="Enviar formulario">
    </form>
    
</body>
</html>