<?php
$id_marca=$_REQUEST['id_marca'];
$nombre=$_REQUEST['nombre_marca'];
$actuali1="UPDATE marca SET nombre_marca='$nombre' WHERE id_marca=$id_marca";
include ('conexion.php');
$ejec10=$cone->query($actuali10);
	header('location:mostrarMarca.php');
?>