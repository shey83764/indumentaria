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
$delta10="DELETE FROM localidad WHERE id =$id10";
include ('conexion.php');
$cone->query($delta10);
header ('location;listaLoca.php');
?>
</body>
</html>
