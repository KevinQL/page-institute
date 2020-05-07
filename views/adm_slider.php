<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>

    <title>ADM_SLIDER</title>
</head>
<body>
    
    <?php
        include_once("views/modules/navegacion__.php");        
    ?>

    <!-- CUADR DE VIENDENIDA AL USUARIO-->
    <div class="container mt-5">
        <h1 class="display-5 text-muted text-center">SLIDER </h1>    
        <hr class="my-4">        
        <div class="">
            <div class="col-md-5 mx-auto">
                <div class="form-group">
                    <label for="fecha">FECHA DE INICIO</label>
                    <input type="text" class="form-control" id="fecha" aria-describedby="fechaHelp" placeholder="11 DE MAYO">
                    <small id="fechaHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                <div class="lead form-group">
                    <a class="btn btn-primary btn-lg d-block" href="#" role="button">Guardar Slider</a>
                </div>
            </div>
        </div>

    </div>



    <?php        
        include_once('views/modules/cdnsfooter.html');
    ?>

</body>
</html>