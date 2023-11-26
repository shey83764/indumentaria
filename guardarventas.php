<?php
include ('conexion.php');
$pd=$_GET['uprenda'];
$clientes=$_GET['clientes'];
$sucursales=$_GET['sucursales'];
echo $pd.$clientes.$sucursales;
$SQL3="INSERT INTO ventas (prenda,clientes,sucursales) VALUES($pd,$clientes,$sucursales)";
 $cone->query($SQL3);
 header('location:mostrarventas.php');
?>