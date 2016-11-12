<?php
	// traigo el codigo de conexion
	@require "conectar_base.php";

	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT	* FROM proyectos";
		// obtengo los resultados desde la conexion y la consulta
		$resultado = mysqli_query($conexion->conectado,$consulta);

		while ($fila = mysqli_fetch_array($resultado)) {
			
			$id = $fila["id_proyecto"];

			echo "Titulo: ".$fila["titulo_proyecto"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo "Descripcion: ".$fila["descripcion_proyecto"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo $fila["cuerpo_proyecto"].PHP_EOL;
			echo "<br>".PHP_EOL;
			echo 'Img <img src="'.$fila["img_proyecto"].'" id="portadaProyecto">'.PHP_EOL;
			echo "<br>".PHP_EOL;
			echo '<a href="codes/baja_proyecto.php?idPro='.$id.'">Eliminar</a>'.PHP_EOL;
			echo '<a href="codes/modificar_proyecto.php?idPro='.$id.'">Modificar</a>'.PHP_EOL;
			echo "<br>".PHP_EOL;
		}
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>