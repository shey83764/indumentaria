<?php
include 'conexion.php';
$sel1="SELECT * from cliente";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h3>Lista de registros de clientes</h3>
      <table border=3>
        <tr>
           <th>id_cliente</th>
           <th>nombre</th>
           <th>direccion</th>
        </tr>
    <?php $cont4=0;
while ($fila4=$resul4->fetch_assoc()){
    $cont4=$cont4+1;
    ?>
    <tr>
       <?php echo $cont4 ?>
       <td><?php echo $fila4['Prenda']?></td>
       <td><?php echo $fila4['marca']?></td>
       <td><?php echo $fila4['vestimeta']?></td>
       <td><a href='formularioclie.php?id=<?php echo $fila4['id']?>'>actualizar</a></td>
       <td><a href='eliminarclie.php?id=<?php echo $fila4['id']?>'>borrar</a></td>
    </tr>
<?php
}
?>
</table>
cantidad de registros encontrados: <?php echo $cont4 ?>
<br>
<a href="formularioclie.php">Cargas registrados</a>
</body>
</html>