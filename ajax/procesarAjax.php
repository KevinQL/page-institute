<?php

    session_start();

    $conAjax = true;

    require_once("../controllers/adminController.php");

    if(!is_null($_POST['data'])){
        //convirtiendo los datos enviados desde la vista, ha un objeto stdClass
        $data = json_decode($_POST['data']);
        //Instancia del objeto controller
        $obj = new adminController();
    
        if($data->id === "SESSION"){
            # code...
            $session = new adminController();
            $res_session = $session->sessionController($data);
            echo json_encode($res_session);
            
        }
       
        elseif ( $data->id === "S-ETIQUETAS-MN"){
            $etiqueta = new adminController();
            $res_etiqueta= $etiqueta->select_list_of_label_Controller($data);  
            echo json_encode($res_etiqueta);
        }
        //Regitro usuario para la administración del sistema
        elseif ($data->id === "REGISTRO-USER") {
            # code...
            $result_operation = $obj->insert_user_Controller($data);
            echo json_encode($result_operation);
        }


        else {
            echo json_encode("ERROR!!");
        }
    }else{
        echo json_encode("ERROR!!");
    }
    

?>