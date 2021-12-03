<?php
	require('../Modelo/usuarios.php');
	require('../Persistencia/ConexionBD.php');

	$con = new Conexion();
	$usuario = new Usuarios();

	$usuario->modificarUsuario($con, $_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $_POST['contra'], $_POST['pais'], $_POST['tecnologias']);
	header('Location:../index.php');
?>