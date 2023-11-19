<?php
$id_c=$_REQUEST['id_cliente'];
$nom=$_REQUEST['nombre'];
$dire=$_REQUEST['direccion'];
$loca=$_REQUEST['localidad'];
$actuali4="UPDATE cliente SET nombre='$nom',direccion='$dire', localidad='$loca'WHERE id=$id_c";
include ('conexion.php');
$cone->query($actuali4);
header('location:mostrarcliente.php');
?>