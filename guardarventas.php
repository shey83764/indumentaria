<?php
$pd=$_GET['uprenda'];
$c=$_GET['cliente'];
$s=$_GET['sucursal'];
echo $pd.$c.$s;
$SQL3 = "INSERT INTO ventas (prenda,clientes,sucursales) VALUES($pd, $c,$s)";
include('conexion.php');
 $cone->query($SQL3);
 header('location:mostrarventas.php');
?>
