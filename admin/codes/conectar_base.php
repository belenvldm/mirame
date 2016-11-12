<?php
	class conexion {
		private $servidor = "localhost";
		private $usuario = "root"; //xh000288_mira
		private $clave = ""; //"lopaZIli65";
		private $base = "abm_mirame"; //"xh000288_mira";
		public  $conectado;

		function __construct(){
			$this->conectado = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->base);
		}
	}
?>