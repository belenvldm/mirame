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
			<a id="linkConsultas" href="consultas.php">Responder las consultas</a>
			<br>
			<a id="linkProyectos" href="proyectos.php">Cargar, modificar proyectos</a>
			<br>
			<a id="linkPropuestas" href="propuestas.php">Cargar, modificar propuestas</a>
		</div>
	</div>
    <?php @require 'scripts.php'; ?>
</body>
</html>