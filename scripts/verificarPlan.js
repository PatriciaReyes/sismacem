function verificarPlan(form){

    var currentTime = new Date();
    var month = currentTime.getMonth() + 1;
    var day = currentTime.getDate();
    var year = currentTime.getFullYear();

    if (day>0 || day<10){
        day="0"+day;
    }

    if (month>0 || month<10){
        month="0"+month;
    }

    var fecha = (day+"-"+month+"-"+year);

     if (form.nombreP.value==""){
        alert("Introduzca un Nombre para el Plan!");
        form.nombreP.focus();
        return false;
    }

     if (form.fechaIniP.value==""){
        alert("Introduzca una fecha de Inicio para el Plan!");
        return false;
    }

     if (form.fechaIniP.value<fecha){
        alert("La Fecha de Inicio debe ser igual o posterior a la Fecha Actual!");
        return false;
    }

     if (form.fechaFinP.value==""){
        alert("Introduzca una fecha de Finalizacion para el Plan!");
        return false;
    }


     if (form.fechaFinP.value<fecha){
        alert("La Fecha de Finalizacion debe ser igual o posterior a la Fecha Actual!");
        return false;
    }

    if (form.fechaFinP.value<form.fechaIniP.value){
        alert("La Fecha de Finalizacion debe ser igual o posterior a la Fecha de Inicio!");
        return false;
    }


    if (form.desastre.value==""){
        alert("Introduzca un Tipo de Desastre para el Plan!");
        form.desastre.focus();
        return false;
    }

     if (form.fase.value==""){
        alert("Introduzca un Tipo de Fase para el Plan!");
        form.fase.focus();
        return false;
    }

     if (form.costo_estimado.value!="" && (isNaN(form.costo_estimado.value) || (form.costo_estimado.value<0))){
        alert("Introduzca un valor Valido para el Costo Estimado del Plan!");
        form.costo_estimado.focus();
        return false;
    }

     if (form.costo_estimado.value==""){
        form.costo_estimado.value=0;
        form.submit();
        return true;
    }

    else {
        form.submit();
        return true;
   }

}
