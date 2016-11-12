<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$id = $_POST["idPro"];
	$title = $_POST["title"];
	$desc = $_POST["desc"];
	$body = $_POST["body"];
	// $img = $_POST["img"];

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "UPDATE proyectos SET titulo_proyecto = '$title', descripcion_proyecto = '$desc', cuerpo_proyecto = '$body' WHERE id_proyecto = '$id'";

		if(mysqli_query($conexion->conectado,$consulta)){
			echo "La modificacion se realizo correctamente";
			echo "<a href='../proyectos.php'>Volver</a>".PHP_EOL;
		} else {
			echo "Existio un error, vuelva a intentarlo mas tarde";
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>