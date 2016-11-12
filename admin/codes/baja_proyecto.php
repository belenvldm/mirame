<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$id = $_GET["idPro"];

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "DELETE FROM proyectos WHERE id_proyecto = '$id'";

		if(mysqli_query($conexion->conectado,$consulta)){
			echo "La baja se realizo correctamente";
		} else {
			echo "Existio un error, vuelva a intentarlo mas tarde";
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>