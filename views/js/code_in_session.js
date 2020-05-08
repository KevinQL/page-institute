//script para usuario en session

//****************************************************************************************** */
//****************************************************************************************** */
//------------------ INSERTAR SLIDER ------------------------------
/**
 *  
 */
function dataHTML_sliderInsert(){
    let txt_fecha = document.querySelector("#txt_fecha");
    let img_slider = document.querySelector("#img_slider");

    return {
        element:{
            txt_fecha,
            img_slider
        },
        value:{      
            txt_fechav : txt_fecha.value.trim().toLowerCase(),
            img_sliderv : img_slider.files         
        }
    }
}
/**
 * 
 */
function eval_sliderInsert(){
    let dataHTML = dataHTML_sliderInsert();
    let {txt_fechav, img_sliderv} = dataHTML.value; 
    if(txt_fechav != "" && img_sliderv.length != 0 ){ 
        console.log(es_imagen(img_sliderv[0].type),"<-ver")
        if(es_imagen(img_sliderv[0].type)){
            return true;
        }        
    }
    return false;
    
}
/**
 * 
 */
function execute_sliderInsert(){    
    if(eval_sliderInsert()){
        let dataHTML = dataHTML_sliderInsert();
        let {txt_fechav, img_sliderv} = dataHTML.value;        

        fetchFileKev('POST',{
            id:'INSERT-SLIDER',
            txt_fechav
        },{
            img_file: img_sliderv[0]
        },data=>{
            
            if(data.eval){
                console.log(data)
                sweetModal('Datos procesados!','center','success',1500);
            }else{
                if(data.eval_img){
                    sweetModal('Imagen actualizado!','center','success',1500);
                }else{
                    sweetModal('Algo no salió bien!!','center','error',1500);
                }
            }

        },URL_AJAX_PROCESAR); //URL_AJAX_PROCESAR  /  URL_prueba

    }else{
        sweetModal('Verificar datos!','center','warning',1500);
    }
}

//-- FUNCIONES DE OPERACION
/**
 * 
 * @param {string} type_img formato de imagagen. EJM 'img/jpeg'. Este dato es proporcionado por la propiedad 'type' del elemento FILE html
 */
function es_imagen(type_img){
    if(type_img == "image/png" || type_img == "image/jpeg" || type_img == "image/jpg"){
        return true;
    }else{
        return false;
    }
}
