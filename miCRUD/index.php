<?php
	include('Controlador/MostrarController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Orquestación de una WebApp en Kubernetes</title>
</head>
<style type="text/css">
	a{
		margin-left: 45%;
	}
</style>
<body>
	<h1 align="center">.:: CRUD de usuarios ::.</h1>
	<a class="btn btn-outline-success" href="Vista/Formulario.php">Agregar usuario</a></br></br>
	<div class="container" style="overflow-x: auto;">
		<table class="table table-striped border" width="90%">
			<tr class="table-info">
				<th>ID usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>País</th>
				<th>Tecnología</th>
				<th> </th>
				<th> </th>
			</tr>
			<?php while($fila = $listaDeUsuarios->fetch_assoc()){ ?>
			<tr>
				<td align="center"><?php echo $fila['Id']; ?></td>
				<td><?php echo $fila['Nombre']; ?></td>
				<td><?php echo $fila['Apellido']; ?></td>
				<td><?php echo $fila['Usuario']; ?></td>
				<td><?php echo $fila['Contrasena']; ?></td>
				<td><?php echo $fila['Pais']; ?></td>
				<td><?php echo $fila['Tecnologia']; ?></td>
				<td>
					<form action="Controlador/BorrarController.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $fila['Id']; ?>">
						<input class="btn btn-outline-danger" type="submit" name="borrar" value="Borrar">
					</form>
				</td>
				<td>
					<form action="Vista/FormularioM.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $fila['Id']; ?>">
						<input type="hidden" name="nombre" value="<?php echo $fila['Nombre']; ?>">
						<input type="hidden" name="apellido" value="<?php echo $fila['Apellido']; ?>">
						<input type="hidden" name="usu" value="<?php echo $fila['Usuario']; ?>">
						<input type="hidden" name="pw" value="<?php echo $fila['Contrasena']; ?>">
						<input type="hidden" name="pais" value="<?php echo $fila['Pais']; ?>">
						<input type="hidden" name="tecno" value="<?php echo $fila['Tecnologia']; ?>">
						<input class="btn btn-outline-primary" type="submit" name="modificar" value="Modificar">
					</form>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>