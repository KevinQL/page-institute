<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../models/adminModel.php";
    }else{
        require_once "./models/adminModel.php";
    }

    class webItecController extends adminModel{

        public function mostrar_mensaje_Controller($msj){
            $query = "SELECT * FROM slider WHERE id_slider=1";
            $res = self::ejecutar_una_consulta($query);
            $slider = $res->fetch(PDO::FETCH_ASSOC);
            return "{$slider['fecha_txt']}";
        }

        //------------------------------------------------------------------------------

        /**
         * (IMPORTANTE)
         * Parametro
         * @param {string} $variable
         * @return {string}
         * 
         * Limpia los espacios al principio y alfinal y luego lo convierte a minuscula
         */
        private function txtres($variable){
            return mb_strtolower(trim($variable),'UTF-8');            
        }

    }



?>