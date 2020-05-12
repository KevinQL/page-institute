<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>
    <script src="./views/js/script_share.js"></script>

    <title>Info</title>
    <style>
        .cont-video{
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 100vh;
        }
        .video-portada{            
            position: absolute;
            top: 0px;
            z-index: -10;
        }
    </style>
</head>
<body>
    
    <?php
        include_once("views/modules/navegacion__.php");        
    ?>

    <h4>Detalles de la página...</h4>

    <div class="container cont-video">
        <h2>hola mundo con todo</h2>
        <video src="./public/video/video.mp4" width="100%" height="" autoplay loop onloadedmetadata="this.muted=true" class="video-portada">        
            <img src="./public/img/estudent-1.png" alt="Video no soportado">
            Su navegador no soporta contenido multimedia.
        </video>
    </div>
    


    <?php

        echo time();

    ?>    

    <?php        
        include_once('views/modules/cdnsfooter.html');
        include_once('views/modules/file_session_footer.html');
    ?>

</body>
</html>