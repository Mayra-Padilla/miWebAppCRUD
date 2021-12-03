<?php
	Class Conexion{
		private $server = "mysql";
		private $usuario = "mayra";
		private $contra = "qwerty";
		private $bd = "proyecto_jsp";

		public function conectarBD(){
			$conn = new mysqli($this->server, $this->usuario, $this->contra, $this->bd);
			return $conn;
		}
	}
?>