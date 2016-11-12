<!-- < ?php
	// traigo el codigo de conexion
	@require "admin/codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;
// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT	* FROM proyectos WHERE id_proyecto = $codActual";
		// obtengo los resultados desde la conexion y la consulta
		$resultado = mysqli_query($conexion->conectado,$consulta);

		$fila = mysqli_fetch_array($resultado);
			$id = $fila["id_proyecto"];
			$title = $fila["titulo_proyecto"];
			$desc = $fila["descripcion_proyecto"];
			$body = $fila["cuerpo_proyecto"];
			$img = $fila["img_proyecto"];
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}
?>
 -->
<div class="gral">
	<div id="content">
		<h1>nosotros</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<img src="bin/imgs/bg.jpg">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<img src="bin/imgs/bg.jpg">
	</div>
</div>