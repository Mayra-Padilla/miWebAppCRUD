<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Agregar usuario</title>
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
	<h1 align="center">.:: Agregar usuario ::.</h1>
	<form class="container d-flex justify-content-center align-items-center" action="../Controlador/AgregarController.php" method="POST">
		<table class="m-4" width="35%" border="0">
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td width="40%" align="center"> <label class="mb-2" for="nombre">Nombre: </label> </td>
				<td width="60%"> <input class="mb-2" type="text" name="nombre"> </td> 
				
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="apellido">Apellido: </label> </td> 
				<td> <input class="mb-2" type="text" name="apellido"> </td>
				
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="usuario">Usuario: </label> </td> 
				<td> <input class="mb-2" type="text" name="usuario"> </td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="contra">Contraseña: </label> </td> 
				<td> <input class="mb-2" type="text" name="contra"> </td>
			</tr>
			<tr>
				<td align="center"> <label class="mb-2" for="pais">País: </label> </td> 
				<td> 
					<select class="mb-2" name="pais" id="pais">
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
					<label>
                        <input class="form-check-input" type="radio" name="tecnologias" value="Java" id="tecnologias_0">Java
                    </label><br>
                    <label>
                        <input class="form-check-input" type="radio" name="tecnologias" value="PHP" id="tecnologias_1">PHP
                    </label><br>
                    <label>
                        <input class="form-check-input" type="radio" name="tecnologias" value="JavaScript" id="tecnologias_2">JavaScript
                    </label><br>
				</td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td align="center"><a class="btn btn-outline-secondary" href="../index.php">Cancelar</a></td>
                <td align="center"><input class="btn btn-outline-primary" type="submit" name="button" id="button" value="Enviar"></td>
            </tr>
            <tr>
				<td><br></td>
			</tr>
		</table>
	</form>
</body>
</html>