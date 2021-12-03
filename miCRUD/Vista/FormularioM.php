<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Modificar usuario</title>
</head>
<style>
	body{
		background-color: #C3E5EE;
	}
	table{
		background-color: white;
		border-radius: 25px;
	}
</style>
<body>
	<h1 align="center">.:: Modificar usuario ::.</h1>
	<form class="container d-flex justify-content-center align-items-center" action="../Controlador/ModificarController.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
		<table class="m-4" width="35%" border="0">
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td width="40%" align="center"> <label class="mb-2" for="nombre">Nombre: </label> </td>
				<td width="60%"> <input class="mb-2" type="text" name="nombre" value="<?php echo $_POST['nombre']; ?>"> </td> 
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="apellido">Apellido: </label> </td> 
				<td> <input class="mb-2" type="text" name="apellido" value="<?php echo $_POST['apellido']; ?>"> </td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="usuario">Usuario: </label> </td> 
				<td> <input class="mb-2" type="text" name="usuario" value="<?php echo $_POST['usu']; ?>"> </td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="contra">Contraseña: </label> </td> 
				<td> <input class="mb-2" type="text" name="contra" value="<?php echo $_POST['pw']; ?>"> </td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="pais">País: </label> </td> 
				<td> 
					<select name="pais" id="pais">
						<option><?php echo $_POST['pais']; ?></option>
                        <option>Mexico</option>
                        <option>Colombia</option>
                        <option>Chile</option>
                        <option>Peru</option>
                        <option>Argentina</option>
                        <option>España</option>
                    </select>
				</td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="tecnologias">Tecnología: </label> </td> 
				<td> 
					<?php 
						if($_POST['tecno'] == 'Java'){
							echo '<label><input class="form-check-label" type="radio" name="tecnologias" value="Java" id="tecnologias_0" checked>Java</label><br>
							<label> <input class="form-check-label" type="radio" name="tecnologias" value="PHP" id="tecnologias_1">PHP</label><br>
                    		<label> <input class="form-check-label" type="radio" name="tecnologias" value="JavaScript" id="tecnologias_2">JavaScript </label><br>';
						} elseif($_POST['tecno'] == 'PHP'){
							echo '<label><input class="form-check-label" type="radio" name="tecnologias" value="Java" id="tecnologias_0">Java </label><br>
                			<label><input class="form-check-label" type="radio" name="tecnologias" value="PHP" id="tecnologias_1" checked>PHP </label><br>
                			<label><input class="form-check-label" type="radio" name="tecnologias" value="JavaScript" id="tecnologias_2">JavaScript</label><br>';
						} elseif($_POST['tecno'] == 'JavaScript'){
							echo '<label><input class="form-check-label" type="radio" name="tecnologias" value="Java" id="tecnologias_0">Java </label><br>
                    		<label> <input class="form-check-label" type="radio" name="tecnologias" value="PHP" id="tecnologias_1">PHP </label><br>
                    		<label><input class="form-check-label" type="radio" name="tecnologias" value="JavaScript" id="tecnologias_2" checked>JavaScript </label><br>';
						} 
					?>
				</td>
			</tr>
			<tr>
				<td align="center"><a class="btn btn-outline-secondary mt-4" href="../index.php">Cancelar</a></td>
                <td align="center"><input class="btn btn-outline-primary mt-4" type="submit" name="button" id="button" value="Aceptar"></td>
            </tr>
            <tr>
				<td><br></td>
			</tr>
		</table>
	</form>
</body>
</html>