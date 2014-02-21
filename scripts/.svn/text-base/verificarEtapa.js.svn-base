function verificarEtapa(form){

    if (form.nombre.value==""){
        alert("Introduzca un nombre para la Actividad!");
        form.nombre.focus();
        return false;
    }

     if (form.numEtapa.value=="" || isNaN(form.numEtapa.value) || form.numEtapa.value<=0){
        alert("Introduzca un Numero de Etapa Valido!");
        form.numEtapa.focus();
        return false;
     }

     if (form.costo.value!="" && (isNaN(form.costo.value) || (form.costo.value<0))){
        alert("Introduzca un valor Valido para el Costo Estimado de la Etapa!");
        form.costo.focus();
        return false;
    }

     if (form.costo.value==""){
        form.costo.value=0;
        form.submit();
        return true;
    }
        else {

        form.submit();
        return true;
   }

}
