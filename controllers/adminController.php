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
         * VERIFICADO
         * (IMPORTANTE)
         */
        public function sessionController($data){
            //Recibiendo datos de la página
            $user = $this->txtres($data->userv);
            $password = $this->txtres($data->passwordv);
            //enviado datos al modelo
            $resModel = adminModel::obtenerUsuarioSession($user,$password);
            //evaluando resultados
            if($resModel['eval']){           
                //Obtener datos. y devolviendo resultado a la pagina (vista-usuario)
                $resData = $resModel['data'];
                //Iniciando session
                session_start();
                $_SESSION['start']=true;
                $_SESSION['data']=$resData;
                //Retornando los datos a la vista
                return ['eval'=>true,'data'=>$resData];                
            }else{
                return ['eval'=>false,'data'=>[]];
            }
        }


        //----
        public function traerUser(){
            $result = adminModel::sqlSingle("SELECT * FROM usuario");
            return $result;
        }


        /**
         * @return Array
         * @param Object $data
         * Funcion que insertar usuarios en la db
         */
        public function insert_usuario_Controller($data){  

            $password_hash = self::encriptar_desencriptar($this->txtres($data->txtPasswordv),'');

            $dataModel = new stdClass; 

            $dataModel->dni = $this->txtres($data->txtDniv);
            $dataModel->nombre = $this->txtres($data->txtNombrev);
            $dataModel->apellido = $this->txtres($data->txtApellidov);
            $dataModel->user = $this->txtres($data->txtUsuariov);                        
            $dataModel->password = $password_hash;                        
            $dataModel->tipo_usuario = ( $this->txtres($data->radioNivelUsuariov)==="administrador" ) ? 1 : 2 ;                        
            $dataModel->estado = ( $this->txtres($data->switchEstadov) ) ? 1 : 0 ;                        

            $resModel = adminModel::insert_usuario_Model($dataModel);
            
            return $resModel;            
            
        }
        
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