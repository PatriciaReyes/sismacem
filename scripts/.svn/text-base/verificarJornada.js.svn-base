function verificarJornada(form){

     if (form.nombre.value==""){
        alert("Introduzca un nombre para la Jornada!");
        form.nombre.focus();
        return false;
    }

     if (form.fechaIni.value==""){
        alert("Introduzca una fecha de inicio para la Jornada!");
        form.fechaIni.focus();
        return false;
    }

     if (form.fechaFin.value==""){
        alert("Introduzca una fecha fin para la Jornada!");
        form.fechaFin.focus();
        return false;
    }

    if (form.tipoDesastre.value==""){
        alert("Introduzca un tipo de desastre para la Jornada!");
        form.tipoDesastre.focus();
        return false;
    }

    if (form.tipoFase.value==""){
        alert("Introduzca un tipo de fase para la Jornada!");
        form.tipoFase.focus();
        return false;
    }

     if (form.correo.value==""){
        alert("Introduzca un correo para la Jornada!");
        form.correo.focus();
                return false;
    }

if (!/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.
        test(form.correo.value)) {
      alert('Introduzca una direccion de correo valida!');
      form.correo.focus();
      return false;
    }

    else {
        form.submit();
        return true;
   }

}