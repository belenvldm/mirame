<?php
	// traigo el codigo de conexion
	@require "admin/codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	if(isset($_GET["project"])){
		$cod = $_GET["project"];
		print_r("vino del paginador");
	} else {
		$cod = '15';
		print_r("vino del inicio");
	}

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT	* FROM proyectos WHERE id_proyecto = $cod";
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
<div class="gral">
	<div id="content">
		<div id="paginador">
			<a id="prev" href="project.php?project=23"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			<a id="next" href="project.php?project=16"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		</div>
		<section id="tilteDescription" class="active">
			<h1><?php echo $id; ?></h1>
			<p><?php echo $desc; ?></p>
			<!-- <a class="link" title="videoPrincipal">scroll</a> -->
		</section>

        <section id="videoPrincipal">
    		<video controls loop poster="bin/imgs/bg.jpg"> <!-- autoplay -->
    			<source src="bin/videos/videobg.mp4" type="video/mp4">
    		</video>
        </section>

	    <section id="sectionBody">
	        <p><?php echo $body; ?></p>
	        <img src="<?php echo $img; ?>" alt="" title="" id="">
	        <!-- <img src="bin/imgs/bg.jpg" alt="" title="" id=""> -->
	        <!-- <p></p> -->
	        <!-- <img src="bin/imgs/bg.jpg" alt="" title="" id=""> -->
		</section>
	</div>
</div>