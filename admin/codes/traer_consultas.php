<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	$estado = false;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT	* FROM consultas INNER JOIN usuarios ON consultas.id_user = usuarios.id_user WHERE consultas.estado = 'pendiente'";
		// obtengo los resultados desde la conexion y la consulta
		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			
			$id = $fila["id_consulta"];

			echo "EL usuario ".$fila["name_user"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo "consultó: ".$fila["consulta"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo "el ".$fila["fch_consulta"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo '<a href="respuestas.php?idCons='.$id.'">Responder</a>'.PHP_EOL;
			echo "<br>".PHP_EOL;

			$estado = true;
		}

		if (!$estado) {
			echo "No hay consultas pendientes".PHP_EOL;
			echo "<br>".PHP_EOL;
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>