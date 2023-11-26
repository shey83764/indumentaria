<?php
include 'conexion.php';
$id_v=$_REQUEST['id_venta'];
$pd=$_REQUEST['uprenda'];
$clientes=$_REQUEST['uclient'];
$sucursales=$_REQUEST['usucr'];
$actuali3="UPDATE ventas SET prenda='$pd',clientes='$clientes', sucursales='$sucursales'WHERE id_venta=$id_v";

$cone->query($actuali3);
header('location:mostrarventas.php');
?>