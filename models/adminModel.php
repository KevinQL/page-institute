<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../models/mainModel.php";
    }else{
        require_once "./models/mainModel.php";
    }

    class adminModel extends mainModel{        

        /**
         * 
         */
        protected function insert_user_Model($data){
            $query = "INSERT INTO usuario SET 
                        user = '{$data->user}',
                        password = '{$data->password}',
                        estado = {$data->estado},
                        tipo_usuario = 1
                        ";
            $result_query = self::ejecutar_una_consulta($query);
            if($result_query->rowCount() >= 1){
                return ['eval'=>true, 'data'=> $data];
            }else{
                return ['eval'=>false, 'data'=> null];
            }
            
        }
        
        /**
         * 
         */
        protected function session_user_Model($user,$password){
            $query = "SELECT id_usuario,user,password,estado,tipo_usuario FROM usuario WHERE user='{$user}' AND estado=1";
            $result = mainModel::ejecutar_una_consulta($query);
            
            $eval = false;
            $data = [];

            if($result->rowCount() >= 1){
                while($user_fla = $result->fetch(PDO::FETCH_ASSOC)){
                    if($this->encriptar_desencriptar($password,$user_fla['password'])){
                        $data = $user_fla;
                        $eval = true;
                    }
                }             
            }
            return ['eval'=>$eval, 'data'=>$data];
        }


        
        //-------------------------------------------------------------------------------
        /**
         * (IMPORTANTE)
         * si es verad encripta y sino desencripta
         * @param boolean $encriptar
         * Contraseña a encriptar o desencriptar
         * @param string $password
         * @return string boolean
         * 
         * Función que encripta y desencripta
         */        
        protected function encriptar_desencriptar($password,$password_db){
            if(trim($password_db) === ''){
                return password_hash($password, PASSWORD_DEFAULT);//Encripta (SOLO se necesita el PRIMER parametro.EJEM: ->fn('pass','')<-)
            }else{
                return password_verify($password,$password_db);//desencripta (SOLO cuando los DOS parametros tengan valor)
            }
        }



    }

?>