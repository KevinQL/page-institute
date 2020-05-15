<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/1c90e8b317.js" crossorigin="anonymous"></script>

        <!-- Styles me -->
        <link rel="stylesheet" href="public/css/estilos_itec.css">

        <title>ITEC - ANDAHUAYLAS</title>

    </head>
    <body>
        <?php
            $obj = new webItecController();
        ?>


        <header class="pt-5 contenido-header">
            <!--
            -->
            

            <img src="public/img/waves-shape.svg" alt="jaja" class="img-fluid w-100 img-svg-header">
            
            <section class="container">
                <div class="row">
                    <div class="col-md-6 position-absolute">
                        <img src="public/img/logo-instituto.jpeg" alt="logo" class="img-fluid w-50 img-logo">                    
                    </div>
                    <div class="col-md-12 text-right">                    
                        <nav class="nav-head">
                            <ul class="nav-head__ul mb-0 pb-0">
                                <li class="nav-head__li">
                                    <a href="?pg=page_itec&d=itecfolder/Zb5CzbRI#S3kKL9gKEY6TKNxdnERKYQ" class="nav-head__a">ITEC</a>                        
                                </li>
                                <li class="nav-head__li">
                                    <a href="#seccion-cursos" class="nav-head__a">CURSOS</a>
                                </li>
                                <li class="nav-head__li">
                                    <a target="_blank" href="http://www.itecandahuaylas.com/campus/index.php" class="nav-head__a nav-head__a-badge">AULA VIRTUAL</a>
                                </li>  
                            </ul>
                        </nav>
                    </div>        
                </div>
            </section>

            <section class=" p-md-4 mt-md-5 mt-slider"> 
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <div class="row pt-5 mt-4">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5 pr-0">
                                        <div class="text-center txt-presentacion">
                                            <h1 class="txt-presentacion__titulo">
                                                Inicio de Clases <br>
                                                <span class="txt-presentacion__titulo-decorado  d-inline-block pr-1 pb-1">
                                                    <?php                                                                                        
                                                        echo $obj->obtener_fecha_slider_Controller();
                                                    ?>
                                                    <!--11 de Marzo-->
                                                </span>
                                            </h1>
                                        </div>
                                        <!--
                                        <div class="txt-licencia">
                                            <p class="txt-licencia__titulo">
                                                INSTITUTO <br>
                                                <b>LICENCIADO</b> POR MINEDU
                                            </p>                            
                                            <i class="far fa-hand-spock fa-5x"></i>
                                            <i class="ml-5 fab fa-suse fa-5x"></i>
                                        </div>
                                        -->
                                    </div>
                    
                                    <div class="col-md-5 text-center pr-2">
                                        <img src="./public/slider_files/iduser-slider.png" alt="imagen estudiantes" class="img-fluid w-100 img-slider_1">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                        </div>
                    <!--
                        <div class="carousel-item">
                                <div class="row pt-5">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5 pr-0">
                                        <div class="text-center txt-presentacion">
                                            <h1 class="txt-presentacion__titulo">
                                                Proximo año <br>
                                                <span class="txt-presentacion__titulo-decorado  d-inline-block">1100 de Mayo    </span>
                                            </h1>
                                        </div>
                                        <div class="txt-licencia">
                                            <p class="txt-licencia__titulo">
                                                INSTITUTO <br>
                                                <b>LICENCIADO</b> POR MINEDU
                                            </p>                            
                                            <i class="far fa-hand-spock fa-5x"></i>
                                            <i class="ml-5 fab fa-suse fa-5x"></i>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-5 text-center pr-5">
                                        <img src="public/img/img-slider.png" alt="imagen estudiantes" class="d-block w-100">
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                        </div>
                    -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon-alterkev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon-alterkev" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>            
            </section>
            <!--
                vacio adicional
                <div class="vacio-header">            
                </div>
            -->
            <video src="./public/video/video-itec.mp4" autoplay loop onloadedmetadata="this.muted=true" class="video-portada" >        
                <img src="./public/slider_files/iduser-slider.png" alt="Video no soportado">
                Su navegador no soporta contenido multimedia.
            </video>
                
        </header>

        <section class="container" id="seccion-cursos">
            <h4 class="text-center p-5">
                >> Nuestros Cursos
            </h4>
            <div class="row">
                <?php
                    $cursos_data = $obj->obtener_dataCurso_Controller();
                    if($cursos_data['eval']){
                        foreach ($cursos_data['data'] as $key => $value) {
                            # code...
                            //echo "$key => {$value['nombre_curso']} <br>";
                            echo "
                                <div class='col-md-3 text-center'>
                                    <img src='./public/curso_files/iduser-{$value[url_img]}' alt='imgen estudinarte' class='img-fluid img-carreras'>
                
                                    <div class='pb-2 px-2 pt-2 mt-1 curso-detalles'>
                                        <h5>{$value[nombre_curso]}</h5>
                                        <h3 class='curso-fecha py-2'>{$value[fecha_txt]} </h3>
                                        
                                        <div class='d-flex justify-content-between align-items-end'>
                                            <p class='pb-0 mb-0 curso-detalles__precio'>S/.{$value[costo]} <small>Soles</small></p>                            
                                            <a target='_blank' href='https://wa.link/dxrbbw' class='btn btn-primary d-inline-block'>COMPRAR</a>
                                        </div>
                                    </div>
                                </div>                      
                            ";
                        }

                    }else{
                        echo 'No hay cursos aún...';
                    }
                ?>
            </div>
            <!--
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="public/img/estudent-1.png" alt="imgen estudinarte" class="img-fluid img-carreras">

                    <div class="pb-2 px-2 mt-3 curso-detalles">
                        <h5>Etsadistica y contabilidad para las empresas</h5>
                        <h3>11 de marzo</h3>
                        <hr>
                        <div class="d-flex justify-content-between align-items-end">
                            <P class="pb-0 mb-0 curso-detalles__precio">S/. 190 Soles</P>                            
                            <a href="#" class="btn btn-primary d-inline-block">COMPRAR</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <img src="public/img/estudent-1.png" alt="imgen estudinarte" class="img-fluid">
                    <p class="text-center"> Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="public/img/estudent-1.png" alt="imgen estudinarte" class="img-fluid">
                    <p class="text-center"> Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="public/img/estudent-1.png" alt="imgen estudinarte" class="img-fluid">
                    <p class="text-center"> Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        -->
        </section>
        <!--
        <section class="mt-5 section-cambias">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="texto-cambias">
                            <h2 class="text-white">
                                <span class="text-warning">Cambias Tú</span>
                                <br>
                                CAMBIA EL MUNDO
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-6 text-center bg-primary div-img-student">
                        
                    </div>
                </div>
            </div>
        </section>
        -->
        <section class="mt-5 section-videos">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="seccion-blog pt-5">
                            <iframe width="100%" height="220px" src="https://www.youtube.com/embed/AsPg3HWIa18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="bg-warning seccion-blog__texto">
                                Ceremonia de Certificación 2016 ITEC Andahuaylas                                      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="seccion-blog pt-5">
                            <iframe width="100%" height="220px" src="https://www.youtube.com/embed/APQtCUxBmrY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="bg-warning seccion-blog__texto">
                                Ceremonia de Certificación ITEC Andahuaylas 2017-I                                     
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="seccion-blog pt-5">
                            <iframe width="100%" height="220px" src="https://www.youtube.com/embed/AHnpmF0r7cw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="bg-warning seccion-blog__texto">
                                AMA A DIOS SOBRE TODAS LAS COSAS Y A TU PRÓJIMO COMO A TI MISMO                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        <section class="m-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-4 contenedor-blog">
                            <h3 class="text-white"> >> Lorem, ipsum.</h3>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="seccion-blog">
                                        <img src="public/img/nf.jpg" alt="imagen" class="seccion-blog__img">
                                        <div class="bg-warning seccion-blog__texto">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.                                        
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="seccion-blog">
                                        <img src="public/img/nf.jpg" alt="imagen" class="seccion-blog__img">
                                        <div class="bg-warning seccion-blog__texto">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.                                        
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-md-12">

                                    <div class="seccion-blog">
                                        <img src="public/img/nf.jpg" alt="imagen" class="seccion-blog__img">
                                        <div class="bg-warning seccion-blog__texto">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.                                        
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>                    
                    </div>

                    <div class="col-md-8">
                        <div class="novedades">
                            <h3 class="novedades__titulo">>> Lorem, ipsum.</h3>
                            <div class="novedades__contenido">
                                <a class="novedades__btn novedades__btn-f" href="#">
                                    <i class="fab fa-facebook-f fa-3x"></i>
                                </a>
                                <a class="novedades__btn novedades__btn-i" href="#">
                                    <i class="fab fa-instagram fa-3x"></i>
                                </a>
                                <a class="novedades__btn novedades__btn-y" href="#">
                                    <i class="fab fa-youtube fa-3x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="novedades">
                            <h3 class="novedades__titulo">>> Lorem, ipsum.</h3>
                            <div class="novedades__contenido">
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                        <div class="novedades">
                            <h3 class="novedades__titulo">>> Lorem, ipsum.</h3>
                            <div class="novedades__contenido">
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->

        <footer class="footer-content">
            <div class="footer-content__info">            
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-white">
                            <p>(+51) 979 483 728</p>
                            <p>ITEC-ANDAHUAYLAS - JR. AYACUCHO N°. 399.</p>
                            <p>ITEC-ABANCAY - JR. ARICA N°. 309.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="public/img/logo-instituto.jpeg" alt="" class="img-fluid w-75">                        
                            <p class="mt-4">                            
                                <a class="mx-1 text-white icon-redes novedades__btn-i" target="_blank" href="https://www.instagram.com/itecandahuaylas/?hl=es-la">
                                    <i class="fab fa-instagram fa-1x"></i>
                                </a>
                                <a class="mx-1 text-white icon-redes novedades__btn-f" target="_blank" href="https://www.facebook.com/ITECAndahuaylass/">
                                    <i class="fab fa-facebook-f fa-1x"></i>
                                </a>
                                <a class="mx-1 text-white icon-redes novedades__btn-y" target="_blank" href="https://www.youtube.com/channel/UCFvT6U3YX2QDEAS804EmPXw">
                                    <i class="fab fa-youtube fa-1x"></i>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="row ml-md-5 text-white text-center mt-4 mt-md-0">
                                ITEC Andahuaylas es la iniciativa del futuro, orientada a ofrecer la máxima calidad en la educación superior tecnológica en la la región de Apurímac.
                            </div>
                        </div>
                    </div>
                </div>

            </div>        
        </footer>


        
        <div class="whatsapp">
            <a href="#" class="redes-link" data-numero="51916331094" data-mensaje="Hola, me podria enviar información?" onclick="whatsapp_exe()">
                <i class="fab fa-whatsapp fa-3x"></i>
            </a>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
        <!--SCRIPT ME-->
        <script src="./public/js/script_itec.js"></script>

    </body>
</html>