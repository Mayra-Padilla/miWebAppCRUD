<?php
	require('Modelo/usuarios.php');
	require('Persistencia/ConexionBD.php');

	$con = new Conexion();
	$usuario = new Usuarios();

	$listaDeUsuarios = $usuario->listarUsuario($con);
?>