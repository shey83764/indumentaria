<?php
include('conexion.php');

$select = "SELECT id_cliente, nombre_cliente, direccion, localidad FROM cliente";
$obtener_C = $cone->query($select);

$sele1="SELECT  ventas, prenda, clientes, sucursales FROM ventas";
$obtener_V=$cone->query($sele1);

$sele2="SELECT  id_sucursales,nombre,localidad FROM sucursales";
$obtener_S=$cone->query($sele2);

$sele4="SELECT Prenda,marcas,vestimenta,proveedor,talla,precio,cantidad FROM prenda";
$obtener_P=$cone->query($sele4);

$sele5="SELECT id_vestimenta,nombre_vestimenta FROM vestimenta";
$obtener_Ves=$cone->query($sele5);

$sele6="SELECT id_marca,nombre_marca FROM marca";
$obtener_M=$cone->query($sele6);

$sele7="SELECT id_talle,numero_talla FROM talle";
$obtener_T=$cone->query($sele7);

$sele8="SELECT id_proveedor,nombre_pro FROM proveedores";
$obtener_Pro=$cone->query($sele8);
?>
------------------------------------------------------------------------------------------------------------------------------------------------------
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Tienda de Indumentaria</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body bgcolor="#dee3f3">

    <h3>ROPA</h3>
    <form action="guardar_cliente.php" method="get">
        Ingrese el cliente 
        <input type="text" name="cliente">
        <br>
        Ingrese la Localidad
        <input type="text" name="localidad">
        </select>
        <br>
        Ingrese la dirección
        <input type="text" name="direccion">
        <br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <a href="mostrarcliente.php"><button>Lista</button></a>
    <?php
    $cone->close();
    ?>
</body>
</html>
	<br>
	<br>
	<hr>

	<h3>Sucursales</h3>
  <form action="guardarsucur.php" method="get">
  Ingrese el nombre de la sucursal
		<input type="text" name="nombre">
		<br>
		ingrese la localidad<input type="text" name="localidad">
		<br>
		<input type="submit" name="" value="Guardar">
		<a href="mostrarsucu.php"><button>Lista</button></a>
  </form>
	<br>
	<hr>

<h3>MARCAS</h3>
  <form action="guardarmarca.php" method="get">
		Ingrese el nombre de la marca
		<select name="marca">
			<option value="0">Selecciona una marca</option>
                    <?php 
                        while($dato6= $obtener_M->fetch_assoc()) {
                            echo "<option value='".$dato6["id_marca"]."'>".$dato6["nombre_marca"]."</option>";}?>
		<br>
		<input type="submit" name="" value="Guardar">
	</form>
	<br>
	<a href="mostrarmarca.php"><button>Lista</button> </a>
	<br>
	<hr>

	<h3>Talles</h3>
	<form action="guardarTalle.php" method="get">
		seleccione el talle
	<select name="talle">
			<option value="0">Seleccione el talle</option>
                    <?php 
                        while($dato7= $obtener_T->fetch_assoc()) {
                            echo "<option value='".$dato7["id_talle"]."'>".$dato7["numero_talla"]."</option>";}?>
		<br>
		<input type="submit" name=" " value="Guardar">
	</form>
	<a href="mostrarTalles.php"><button>Lista</button> </a><br>
	<hr>

	 <form action="guardarPro.php" method="get">
	 <h3>Proveedor</h3>
	 <input type="text" name="proveedor">
		<br>
		<input type="submit" name=" " value="Guardar">
	</form>
	<a href="mostrarPro.php"><button>Lista</button> </a><br>
	<hr>

	<h3>ventas</h3>
	<form action="guardarventas.php" method="get">
	<input type="text" name="ventas"><br>
	Ingrese el cliente 
		<select name="cliente">
			<option value="0">Selecciona el cliente</option>
                    <?php 
                        while($dato8=$obtener_C->fetch_assoc()) {
                            echo "<option value='".$dato8['id_cliente']."'>".$dato8['nombre_cliente']."</option>";
                                }
                    ?>
					</select>
					<br>
					ingrese la sucursal
					<select name="sucursal">
						<option value="0">Seleccione la sucursal</option>
							<?php
							while ($sucu=$obtener_S->fetch_assoc()) {
								echo "<option value='".$sucu['id_sucursales']."'>".$sucu['nombre']."</option>";
							}
				?>
				</select>
				<br>
				<input type="submit" name=" " value="Guardar">
	<a href="mostrarventas.php"><button>Lista</button></a>
	</form>
	<hr>
	<h3>Prendas</h3>
	<form action="guardarPrenda.php" method="get">
ingrese que clase de prenda es <input type="text" name="prenda"><br>
Ingrese el nombre de la marca
		<select name="marca">
			<option value="0">Selecciona una marca</option>
                    <?php 
                        while($dato6= $obtener_M->fetch_assoc()) {
                            echo "<option value='".$dato6["id_marca"]."'>".$dato6["nombre_marca"]."</option>";}?>
	</select>
<br>
 ingrese el nombre del proveedor<input type="text" name="proveedor"><br>
 Seleccione el talle
 <select name="talle">
			<option value="0">Seleccione el talle</option>
                    <?php 
                        while($dato7= $obtener_T->fetch_assoc()) {
                            echo "<option value='".$dato7["id_talle"]."'>".$dato7["numero_talla"]."</option>";}?>
	</select>
		<br>
		ingrese el precio<input type="text" name="precio"><br>
		ingrese la cantidad<input type="num" name="cantidad"><br>
		<input type="submit" name=" " value="Guardar">
		<a href="mostrarPrenda.php"><button>Lista</button></a>
						</form>
		<hr>

		<h2>Vestimenta</h2>
		<form action="guardarVSt.php" method="get"> 
		ingrese el nombre de la vestimenta por ejemplo: tele <input type="text" name="vestimenta">
		<input type="submit" name=" " value="Guardar">
		<a href="mostrarVst.php"><button>Lista</button></a>
</body>
</html>