<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$respuesta = $_POST["respuesta"];
	$idCons = $_POST["idCons"];
	$idAdmin = $_POST["idAdmin"];

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta		
		$consulta = "INSERT INTO respuestas (respuesta, id_consulta, id_admin) VALUES ('$respuesta', '$idCons', '$idAdmin');
					UPDATE consultas SET estado = 'respondido' WHERE consultas.id_consulta = '$idCons'";

		// if(mysqli_query($conexion->conectado,$consulta)){
		if(mysqli_multi_query($conexion->conectado,$consulta)){
			echo "Respuesta enviada".PHP_EOL;
			echo "<a href='../consultas.php'>Volver</a>".PHP_EOL;
		} else {
			echo "Existio un error, vuelva a intentarlo mas tarde".PHP_EOL;
			echo "<a href='../consultas.php'>Volver</a>".PHP_EOL;
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>