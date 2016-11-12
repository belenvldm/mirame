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

		<div id="content" canvas="container">
			<div id="proyectos">
				<?php @require 'codes/mostrar_proyectos.php'; ?>
				<div id="updateProyecto">
					<!-- <form autocomplete="off" action="actualizar_proyecto.php" method="post">
						<input type="hidden" name="idPro" value="< ?php echo $id ?>">
						<input type="text" name="title" id="title" value="< ?php echo $title; ?>" /><br>
						<textarea name="desc" id="desc" cols="30" rows="10">< ?php echo $desc; ?></textarea><br>
						<textarea name="body" id="body" cols="30" rows="10">< ?php echo $body; ?></textarea><br>
						<input type="submit" value="Modificar" />
					</form> -->
				</div>
				
				<a href="dashboard.php">Volver</a>
			</div>
		</div>
	</div>
    <?php @require 'scripts.php'; ?>
</body>
</html>