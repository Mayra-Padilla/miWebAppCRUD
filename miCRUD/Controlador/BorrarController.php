<?php
	require('../Modelo/usuarios.php');
	require('../Persistencia/ConexionBD.php');

	$con = new Conexion();
	$usuario = new Usuarios();

	$usuario->eliminarUsuario($con, $_POST['id']);
	header('Location:../index.php');
?>