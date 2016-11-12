<?php 
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// variables desde el formulario
	$user = $_POST["user"];
	$pass = $_POST["pass"];

	// valido la conexion
	if(!mysqli_connect_error()) {
		// valido las variables
		if($user!=null and $pass!=null) {
			// declaro la consulta
			$consulta = "SELECT	* FROM admin WHERE name_admin = '$user' and pass_admin = '$pass'";
			// obtengo los resultados desde la conexion y la consulta
			$resultado = mysqli_query($conexion->conectado,$consulta);

			// si existe alguna fila, algun resultado
			if(mysqli_num_rows($resultado)) {
				header ("Location:../dashboard.php");
			} else {
				echo "Error de usuario y/o contraseña";
			}
		} else {
			echo "Ingrese su usuario y constraseña";
		}
	} else {
		echo'Error de Conexión a la base';
	}
?>