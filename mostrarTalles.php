<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>talles</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel12="SELECT prenda.Prenda,prenda.marcas,prenda.vestimenta,
	prenda.proveedor,prenda.talla,prenda.precio,prenda.cantidad,talle.id_talle,talle.numero_talla 
	AS Ptalles,talle.numero_talla FROM prenda INNER JOIN talle ON prenda.talla=talle.numero_talla";
	$ejec12=$cone->query($sel12);
?>
	<table border="3">
		<tr>
			<th>id_talle</th>
			<th>numero_talla</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato12=$ejec12->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato12['id_talla'] ?></td>
			<td><?php echo $dato12['numero_talla'] ?></td>
			<td><?php echo $dato12['Ptalles'] ?></td>
			<td>
				<a href='eliminartalles.php?id=<?php echo $dato12['id'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioTalle.php?id=<?php echo $dato12['id'] ?>'>Editar</a>
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