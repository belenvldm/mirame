<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mirame - admin</title>
    <?php @require 'links.php'; ?>
</head>
<body>
	<div id="gral">
		<?php @require "header.php"; ?>

		<div id="content" canvas="container">
            <div class="blend-screen pos-a-t-l full-size home-video-mask">
                <div class="js-cursor-follower cursor-follower desktop-only">
                    <div class="letter-hover js-letter-hover" data-active="on"></div>
                </div>
            </div>
            
            <div id="abs">
                <div id="txt">
                    <div id="logo">
                        <a href="http://google.com"></a>
                    </div>
                
                    <div id="bajada">
                        <h2>Vidrieras interactivas</h2>
                    </div>
                
                    <div id="descripcion">
                        Agencia dedicada a la creación, diseño e instalación de pantallas interactivas
                    </div>
                </div>
                
                <div id="login">
                	<form action="codes/acceso.php" method="post">
						<input type="text" name="user" id="user" placeholder="Usuario" />
						<input type="password" name="pass" id="pass" placeholder="Contraseña" maxlength="8" />
						<input type="submit" value="Ingresar" />
					</form>
                </div>
            </div>

            <div id="sec_vid">
                <img id="img_video" src="bin/imgs/bg.jpg">
            </div>
        </div>
	</div>
    <?php @require 'scripts.php'; ?>
</body>
</html>