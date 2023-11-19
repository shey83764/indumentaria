<?php
$numT=$_GET['talle'];
echo$numT;
$SQL12="INSERT INTO talle (numero_talla) VALUES($numT)";
include('conexion.php');
$cone->query($SQL12);
header('location:mostrarTalles.php');
?>