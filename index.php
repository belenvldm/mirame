<!-- 
/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/ 
-->
<!DOCTYPE html>
<html lang="es-ES">
    <?php @require "content/head.php"; ?>

    <body>
        <canvas id="circle" width="1378" height="768"></canvas>
        
        <div id="home" class="home">
            <div class="gral">
                <div id="content">
                    <div id="txt">
                        <div id="logo">
                            <a href="http://google.com"><h1><span>mirame</span></h1></a>
                        </div>
                    
                        <div id="bajada">
                            <h2>Vidrieras interactivas</h2>
                        </div>
                    
                        <div id="descripcion">
                            Agencia dedicada a la creación, diseño e instalación de pantallas interactivas
                        </div>
                    </div>
                    
                    <div id="senias">
                        <div id="recuadro">
                            <a href="#">Ver Trabajos</a>
                        </div>
                    </div>

                    <div id="sec_vid">
                        <!-- <i class="fa fa-play" aria-hidden="true"></i> -->
                        <img id="img_video" src="bin/imgs/bg.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div id="nosotros" class="nosotros">
            <?php @require 'content/nosotros.php'; ?>
        </div>

        <div id="servicios" class="servicios">
            <?php @require 'content/servicios.php'; ?>
        </div>

        <div id="tu_proyecto" class="tu_proyecto">
            <?php @require 'content/tu_proyecto.php'; ?>
        </div>
        
        <div id="project" class="project">
            <?php @require 'content/project.php'; ?>
        </div>

        <div id="novedades" class="novedades">
            <?php @require 'content/novedades.php'; ?>
        </div>

        <div id="contacto" class="contacto">
            <?php @require 'content/contacto.php'; ?>
        </div>

        <!-- <div id="scroll">
            <a href="#project"><i class="fa fa-angle-down" aria-hidden="true"></i> Scroll para ver mas</a>
        </div> -->

        <?php @require "content/menu.php"; ?>
    </body>

    <script src="js/jquery-1.11.3.js"></script>
    
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="js/jquery.mousewheel.min.js"></script> -->

    <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/mouseCircle.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script>
        $('video').mediaelementplayer({
            success: function(media, node, player) {
                $('#' + node.id + '-mode').html('mode: ' + media.pluginType);
            }
        });
    </script>
</html>