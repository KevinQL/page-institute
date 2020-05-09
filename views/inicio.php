<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>

    <title>INICIO</title>
</head>
<body>

    <?php
        include_once("views/modules/navegacion__.php");        
    ?>



    <!-- CUADR DE VIENDENIDA AL USUARIO-->
    <div class="jumbotron container mt-5">
        <h1 class="display-3">Bienvenido, <?= $_SESSION['data']['user'] ?>!</h1>           
        <hr class="my-4">        
        <p class="lead">
            <a class="btn btn-primary btn-lg" target="_blank" href="?pg=page_itec&d=itecfolder/Zb5CzbRI#S3kKL9gKEY6TKNxdnERKYQ"role="button">VER PÁGINA WEB</a>
        </p>

    </div>



    <?php        
        include_once('views/modules/cdnsfooter.html');
    ?>

</body>
</html>