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

    <h1>PÁGIANA DE INFORMACIÓN</h1>
    
    <?php

    $arr = [['nombre'=>'apple'],['nombre'=>'orange'],['nombre'=>'home']];

    //var_dump($arr);
    foreach ($arr as $value) {
        # code...
        //var_dump($value);
        echo "-> {$value['nombre']}";

        echo "<br>";
    }


    echo time();

    ?>

    <?php        
        include_once('views/modules/cdnsfooter.html');
        include_once('views/modules/file_session_footer.html');
    ?>

</body>
</html>