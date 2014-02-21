<?php
include_once("singleton.php");
include_once("mit_FachadaBD.php");

class class_Evento {

    var $id_jornada='NULL';
    var $nombre='NULL';
    var $fecha='NULL';
    var $hora='NULL';
    var $lugar='NULL';
    var $descripcion='NULL';
    var $telefono='NULL';

    function class_Evento($nombre=NULL,$fecha=NULL,$hora=NULL,$lugar=NULL,
            $descripcion=NULL,$telefono=NULL)
                {

        $this->nombre=$nombre;
        $this->fecha=$fecha;
	$this->hora=$hora;
	$this->lugar=$lugar;
	$this->descripcion=$descripcion;
	$this->telefono=$telefono;

}

   function mit_agregarEvento(){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_agregarE = $f2 -> mit_agregarEvento_BD($this);
           return $result_agregarE;
   }
   function mit_consultarEvento ($id_jornada){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           return list($result, $num_rows) = $f2 ->mit_consultarEvento($id_jornada);
}
    function rowEv($result){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_row = $f2 -> row($result);
           return $result_row;
   }

// Fin de la clase Evento
}
 ?>
