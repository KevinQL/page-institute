<?php

    unset($_SESSION['start']);
    session_destroy();
    
    echo "Saliendo sistema";
    
    $url_text_adicional = "itecfolder/Zb5CzbRI#S3kKL9gKEY6TKNxdnERKYQ";

    header("location:?$url_text_adicional");

?>