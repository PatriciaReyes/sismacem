function verificarEvento(form){

     if (form.nombre.value==""){
        alert("Introduzca un nombre para el Evento!");
        form.nombre.focus();
        return false;
    }

     if (form.hora.value==""){
        alert("Introduzca la hora para el Evento!");
        form.hora.focus();
        return false;
    }

     if (form.lugar.value==""){
        alert("Introduzca el lugar del Evento!");
        form.lugar.focus();
        return false;
    }

    else {
        form.submit();
        return true;
   }

}
