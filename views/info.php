<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>
    <script src="./views/js/script_share.js"></script>

    <title>Info</title>
</head>
<body>
    
    <?php
        include_once("views/modules/navegacion__.php");        
    ?>

    <h4>Detalles de la página...</h4>

    <?php

        echo time();

    ?>    

    <?php        
        include_once('views/modules/cdnsfooter.html');
        include_once('views/modules/file_session_footer.html');
    ?>

</body>
</html>