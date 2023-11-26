<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos(ventas)</title>
</head>
<body>
    <?php
    include 'conexion.php';
    $id3=$_REQUEST['id'];
    $obtener_V="SELECT * FROM ventas WHERE id_venta=$id3";
    $resul3=$cone->query($obtener_V);
    $fila3=$resul3->fetch_assoc();
    ?>
    <form action="modificar_ventas.php" method="get">
    <h3>prenda</h3>
    <input type="text" name="uprenda" value="<?php echo $fila3['prenda']?>"/>
    <h3>cliente</h3>
    <input type="text" name="uclient" value="<?php echo $fila3['clientes']?>"/>
    <h3>sucursales</h3>
    <input type="text" name="usucr" value="<?php echo $fila3['sucursales']?>"/>
   <br>
   <input type="hidden" name="id_venta" value="<?php echo $fila3["id_venta"]?>">
    <input type="submit" value="Actualizar"/>
</form>
</body>
</html>
