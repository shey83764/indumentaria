<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
<?php 
include 'conexion.php';
$id3=$_REQUEST['id'];
$delta3="DELETE FROM ventas WHERE id_venta=$id3";
$cone->query($delta3);
header ('location; listaventas.php');
?>
</body>
</html>