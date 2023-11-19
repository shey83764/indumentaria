<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    <?php
    include('conexion.php');
    $id4=$_REQUEST['id'];
    $select4="SELECT*FROM marca WHERE id=$id4";
    $resul4=$cone->query($select4);
    $fila4=$resul4->fetch_assoc();
    ?>
    <form action="guardarMarca.php" method="get">
    <h3>nombre de la marca</h3>
    <input type="text" name="unom" value="<?php echo $fila4['nombre_marca']?>"/>
</form>
</body>
</html>
