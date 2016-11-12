<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>mirame - admin</title>
    <?php @require 'links.php'; ?>
</head>
<body>
	<div id="gral">
		<?php @require 'header.php'; ?>

		<div id="content">
			<?php
				// traigo el codigo de conexion
				@require "codes/conectar_base.php";

				// instancio conexion
				$conexion = new conexion;
				// asigno la propiedad
				$conexion->conectado;

				// guardo el id de la consulta
				$id = $_GET["idCons"];
				$idAdmin = 1;

				// valido la conexion
				if(!mysqli_connect_error()) {
					// declaro la consulta
					$consulta = "SELECT	* FROM consultas INNER JOIN usuarios ON consultas.id_user = usuarios.id_user WHERE consultas.id_consulta = '$id'";
					// obtengo los resultados desde la conexion y la consulta
					$resultado = mysqli_query($conexion->conectado,$consulta);

					while ($fila = mysqli_fetch_array($resultado)) {
						$id = $fila["id_consulta"];
						$idUser = $fila["id_user"];

						echo "EL usuario ".$fila["name_user"].PHP_EOL;
						echo "<br>".PHP_EOL;
						echo "consultó: ".$fila["consulta"].PHP_EOL;
						echo "<br>";
						echo "el ".$fila["fch_consulta"].PHP_EOL;
						echo "<br>".PHP_EOL;
					}
				} else {
					echo'Error de Conexión'.PHP_EOL;
				}
			?>
			<form autocomplete="off" action="codes/enviar_respuesta.php" method="post">
				<input type="hidden" name="idCons" value="<?php echo $id; ?>">
				<input type="hidden" name="idAdmin" value="<?php echo $idAdmin; ?>">
				<textarea name="respuesta" id="respuesta" cols="30" rows="10" placeholder="Escriba su respuesta aqui"></textarea>
				<input type="submit" value="Responder">
			</form>
		</div>
	</div>
    <?php @require 'scripts.php'; ?>
</body>
</html>