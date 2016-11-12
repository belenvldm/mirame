<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>mirame - admin</title>
</head>
<body>
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
			$consulta = "SELECT	* FROM proyectos WHERE id_proyecto = '$id'";
			// obtengo los resultados desde la conexion y la consulta
			$resultado = mysqli_query($conexion->conectado,$consulta);

			$fila = mysqli_fetch_array($resultado);

			$title = $fila["titulo_proyecto"];
			$desc = $fila["descripcion_proyecto"];
			$body = $fila["cuerpo_proyecto"];
			$img = $fila["img_proyecto"];
		} else {
			echo'Error de Conexión'.PHP_EOL;
		}
	?>

	<div id="updateProyecto">
		<form autocomplete="off" action="actualizar_proyecto.php" method="post">
			<input type="hidden" name="idPro" value="<?php echo $id ?>">
			<input type="text" name="title" id="title" value="<?php echo $title; ?>" /><br>
			<textarea name="desc" id="desc" cols="30" rows="10"><?php echo $desc; ?></textarea><br>
			<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea><br>
			<input type="submit" value="Modificar" />
		</form>
	</div>
</body>
</html>