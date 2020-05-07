<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../models/adminModel.php";
    }else{
        require_once "./models/adminModel.php";
    }

    class adminController extends adminModel{

        /**
         * VERIFICADO
         * (IMPORTANTE)
         */
        public function verificarSessionController(){
            $session = (isset($_SESSION['start']) && !empty($_SESSION['start']) &&!is_null($_SESSION)) ? true:false;
            return $session;
        }


        /**
         * VERIFICADO
         * (IMPORTANTE)
         */
        public function administrarPaginasController($session){

            //Cuando la sessión sea VERDADERA
            if($session){
                
                $pagina = isset($_GET['pg']) && !empty($_GET['pg']) ? $_GET['pg'] : "page_itec";
                $pagina = strtolower(trim($pagina));   

                //por si es 'login'. cambiamos a 'inicio'
                $pagina = ($pagina != "login")? $pagina : "inicio"; //Agregado ultimo

                //Validando niveles de seguridad. [1]:NIVEL ADMINISTRADOR
                if($_SESSION['data']['tipo_usuario']==1){
                    $arrayPaginas = ["salir_sistema","inicio","info","adm_slider","adm_carrera",'adm_usuario'];
                }else{
                    $arrayPaginas = ["salir_sistema","inicio","info"];
                }              
                
                /**
                 * Solo en caso de que esté logueado; verifica pagina seleccionada, y luego lo redirige.
                 * Si no coincide con ninguna página, te ridirecciona a la página de Inicio.php
                 */
                if(in_array($pagina, $arrayPaginas, true)){
                    $pagina .= ".php";
                }else {
                    $pagina = "page_itec.php";
                }

            }else{
                //CUANDO LA SESSIÓN NO EXISTA
                //Presentación de la página principal

                $pagina = isset($_GET['pg']) && !empty($_GET['pg']) ? $_GET['pg'] : "page_itec";
                $pagina = strtolower(trim($pagina));                          
                $arrayPaginas = ['login',"usuario_registro"];

                if(in_array($pagina, $arrayPaginas, true)){
                    $pagina .= ".php";
                }else {
                    $pagina = "page_itec.php";
                }                
            
            }  

            return $pagina;

        }

        /**
         * 
         */
        public function insert_user_Controller($data){
            $pass_hash = self::encriptar_desencriptar($this->txtres($data->txt_passwordv),'');
            $dataModel = new stdClass;            
            $dataModel->user = $this->txtres($data->txt_userv);
            $dataModel->password = $pass_hash;
            $dataModel->estado = 1; //1. activo 0. inactivo
            $res_model = self::insert_user_Model($dataModel);     
            return $res_model;
        }

        /**
         * 
         */
        public function session_user_Controller($data){

            $user = $this->txtres($data->txt_userv);
            $password = $this->txtres($data->txt_passwordv);
            //enviado datos al modelo
            $res_model = self::session_user_Model($user,$password);
            //evaluando resultados
            if($res_model['eval']){           
                
                $data_user = $res_model['data'];
                //Iniciando session
                session_start();
                $_SESSION['start']=true;
                $_SESSION['data']=$data_user;
                
                return ['eval'=>true,'data'=>$data_user];                
            }else{
                return ['eval'=>false,'data'=>[]];
            }            
        }

                
        /**
         * Probando funcion en la página publico ITEC
         */
        public function probando123(){
            return "hello from server xd ";
        }




        //------------------------------------------------------------------------------

        /**
         * (IMPORTANTE)
         * Datos del usuario actual REGISTRADO o LOGUEADO
         */
        private function usuario(){
            session_start();
            return $_SESSION['data'];
        }


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