<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>ventas</title>
</head>
<body>

<?php
	include 'conexion.php';
	$sel3="SELECT * FROM ventas";
	$obtener_V=$cone->query($sel3);
	if (!$obtener_V) {
    
   
		die("Query failed: " . $cone->error);
		}
?>
	<table border="3">
		<tr>
			<th>id_ventas</th>
			<th>prenda</th>
			<th>cliente</th>
			<th>sucursales</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato3=$$obtener_V->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato3['id_venta'] ?></td>
			<td><?php echo $dato3['prenda'] ?></td>
			<td><?php echo $dato3['clientes'] ?></td>
			<td><?php echo $dato3['sucursales'] ?></td> 
			<td>
				<a href='eliminarventas.php?id=<?php echo $dato3['id_venta'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioventaEdit.php?id=<?php echo $dato3['id_venta'] ?>'>Editar</a>
			</td>
		</tr>
	<?php
	}
	?>
	</table>
	<br>
	<a href="index.php">
		<button>Formulario</button>
	</a>

</body>
</html>