<?php
session_start();

$_SESSION['usuario']="crispin";
$_SESSION['estatus']="Logueado";

echo "Sesion iniciada".":<br>";
echo "Usuario: ".$_SESSION['usuario']." estatus: ".$_SESSION['estatus'];

?>