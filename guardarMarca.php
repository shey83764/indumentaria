<?php
$nlM=$_GET['umarca'];
echo $nlM;
$SQL10="INSERT INTO marca(nombre_marca) VALUES('$nlM')";
include('conexion.php');
$cone->query($SQL10);
header('location:mostrarMarca.php');
?>
