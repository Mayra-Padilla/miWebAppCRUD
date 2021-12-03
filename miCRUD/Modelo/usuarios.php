<?php
	Class Usuarios{
		public function agregarUsuario($conn, $nombre, $apellido, $usuario, $contra, $pais, $tecno){
			$bd = $conn->conectarBD();
			$consulta = "INSERT INTO usuarios(Id, Nombre, Apellido, Usuario, Contrasena, Pais, Tecnologia) VALUES (null, '$nombre', '$apellido','$usuario', '$contra', '$pais', '$tecno')";
			$st = $bd->query($consulta);

			return $st;
		}

		public function modificarUsuario($conn, $id, $nombre, $apellido, $usuario, $contra, $pais, $tecno){
			$bd = $conn->conectarBD();
			$consulta = "UPDATE usuarios SET Nombre='$nombre',Apellido='$apellido',Usuario='$usuario', Contrasena='$contra', Pais='$pais', Tecnologia='$tecno' WHERE Id=$id";
			$st = $bd->query($consulta);

			return $st;
		}

		public function listarUsuario($conn){
			$bd = $conn->conectarBD();
			$consulta = "SELECT * FROM usuarios";
			$st = $bd->query($consulta);

			return $st;
		}

		public function eliminarUsuario($conn, $id){
			$bd = $conn->conectarBD();
			$consulta = "DELETE FROM usuarios WHERE Id=$id";
			$st = $bd->query($consulta);
			
			return $st;
		}
	}
?>