<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/css/all.min.css">
	<title>prendas</title>
</head>
<body>

<?php
	include('conexion.php');
	$sel10="SELECT prenda.Prenda,prenda.marcas,prenda.vestimenta,prenda.proveedor,prenda.talla,prenda.precio,prenda.cantidad, marca.id_marca,marca.nombre_marca AS Pmarca FROM prenda INNER JOIN marca ON prenda.Prenda=marca.id_marca";
	$ejec12=$cone->query($sel10);
?>
	<table border="3">
		<tr>
			<th>id_localidad</th>
			<th>nombre de la localidad</th>
            <th>codigo postal</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
<?php
	while ($dato10=$ejec12->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $dato10['id_localidad'] ?></td>
			<td><?php echo $dato10['nombre_marca'] ?></td>
            <td><?php echo $dato10['Pmarca'] ?></td>
			<td>
				<a href='eliminarMarca.php?id=<?php echo $dato10['id_marca'] ?>'>Eliminar</a>
			</td>
			<td>
				<a href='formularioMarca.php?id=<?php echo $dato10['id_marca'] ?>'>Editar</a>
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