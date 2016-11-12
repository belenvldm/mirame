<?php
	// traigo el codigo de conexion
	@require "admin/codes/conectar_base.php";
	// instancio conexion
	$conexion = new conexion;
	// asigno la propiedad
	$conexion->conectado;

	if(isset($_GET["project"])){
		$cod = $_GET["project"];
		$codActual = $cod;
		
	} else {
		$cod = '1';
		$codActual = $cod;
	}

	// valido la conexion
	if(!mysqli_connect_error()) {
		// declaro la consulta
		$consulta = "SELECT	* FROM proyectos_mostrar INNER JOIN fotos ON proyectos_mostrar.id_proy_mostrar = fotos.id_proy_mostrar WHERE proyectos_mostrar.id_proy_mostrar = $codActual";
		// obtengo los resultados desde la conexion y la consulta
		$resultado = mysqli_query($conexion->conectado,$consulta);

		$fila = mysqli_fetch_array($resultado);
			$id = $fila["id_proy_mostrar"];
			$title = $fila["titulo_proy_mostrar"];
			$desc = $fila["descripcion_proy_mostrar"];
			$body = $fila["cuerpo_proy_mostrar"];
			$video = $fila["video_proy_mostrar"];
	} else {
		echo'Error de Conexión'.PHP_EOL;
	}

	// if ($codActual != 26 && $codActual != 35) {
	// 	$codPrev = $codActual - 1;
	// 	$codNext = $codActual + 1;
	// } else if ($codActual == 26) {
	// 	$codPrev = 35;
	// 	$codNext = 27;
	// } else if ($codActual == 35) {
	// 	$codPrev = 34;
	// 	$codNext = 26;
	// }
?>
<div class="gral">
	<div id="content">
		<div id="paginador">
			<a id="prev" href="index.php?project=<?php echo $codPrev; ?>"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			<a id="next" href="index.php?project=<?php echo $codNext; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		</div>
		<section id="tilteDescription" class="active">
			<h1><?php echo $title; ?></h1>
			<p><?php echo $desc; ?></p>
		</section>

        <section id="videoPrincipal">
    		<!-- <video controls loop> <!- - poster="bin/imgs/bg.jpg" autoplay - ->
    			<source src="" type="video/mp4">
    		</video> -->
    		
			<iframe width="1280" height="720" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
        </section>

	    <section id="sectionBody">
	        <p><?php echo $body; ?></p>
	        <img src="<?php echo $img; ?>" alt="" title="" id="">
		</section>
	</div>
</div>

<a class="link" title="videoPrincipal">scroll</a>