function verificarActividad(form){

    if (form.nombre.value==""){
        alert("Introduzca un nombre para la Actividad!");
        form.nombre.focus();
        return false;
    }

     if (form.num_Etapa.value=="" || isNaN(form.num_Etapa.value) || form.num_Etapa.value<=0){
        alert("Introduzca un numero de Etapa valido para asociarla a la Actividad!");
        form.num_Etapa.focus();
        return false;
    }

     if (form.num_Actividad.value=="" || isNaN(form.num_Actividad.value) || form.num_Actividad.value<=0){
        alert("Introduzca un numero de Actividad valido!");
        form.num_Actividad.focus();
        return false;
    }

    else {
        form.submit();
        return true;
   }

}
