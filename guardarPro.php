<?php
$pr=$_GET['proveedor'];
echo $pr;
$SQL11="INSERT INTO proveedores(nombre_pro) VALUES('$pr')";
include('conexion.php');
$cone->query($SQL11);
header('location:mostrarPro.php');
?>