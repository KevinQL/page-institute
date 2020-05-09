//serrar session
let minute = 1;
let limitTime = 1000 * 60 * minute;
setTimeout(() => {
    //location.href = "http://localhost/itec/itec_admin/?pg=salir_sistema"
    //alert('click cerrar session')
    document.querySelector("#cerrar_session").click()
    //1. podría ser simulando el click en el btn cerrar session
    //2. enviando por ajax una señal para que se destruya la session. una función en el controller()
}, limitTime );