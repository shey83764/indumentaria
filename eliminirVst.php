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
$delta13="DELETE FROM vestimenta WHERE id =$id13";
include ('conexion.php');
$cone->query($delta13);
header ('location; listaVst.php');
?>
</body>
</html>
