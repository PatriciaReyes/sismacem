function verificarConsultaJornada(form){


   if (form.correo.value==""){
        form.submit();
        return true;
    }

if (!/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.
    test(form.correo.value) ) {
      alert('Introduzca una direccion de correo valida!');
      form.correo.focus();
      return false;
    }

    
        form.submit();
   

}