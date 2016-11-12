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
			<div id="consultas">
				<?php @require 'codes/traer_consultas.php'; ?>
				<a href="dashboard.php">Volver</a>
			</div>
		</div>
	</div>
    <?php @require 'scripts.php'; ?>
</body>
</html>