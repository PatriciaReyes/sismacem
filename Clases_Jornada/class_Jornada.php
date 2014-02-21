<?php
  include_once("singleton.php");
  include_once("mit_FachadaBD.php");

class class_Jornada {

var $Id_Jornada='NULL';
var $nombre='NULL';
var $fecha_inicio='NULL';
var $fecha_fin='NULL';
var $tipo_desastre='NULL';
var $tipo_fase='NULL';
var $correo='NULL';
var $descripcion='NULL';


    function class_Jornada($nombre=NULL,$fecha_inicio=NULL,$fecha_fin=NULL,
            $tipo_desastre=NULL,$tipo_fase=NULL,$correo=NULL,$descripcion=NULL) {

	$this->nombre=$nombre;
	$this->fecha_inicio=$fecha_inicio;
	$this->fecha_fin=$fecha_fin;
	$this->tipo_desastre=$tipo_desastre;
	$this->tipo_fase=$tipo_fase;
	$this->correo=$correo;
        $this->descripcion=$descripcion;

}

   function registrarDatosJornada(){
          
          // singleton de la clase fachada
          $f2 = & singleton::getInstance('mit_FachadaBD');
          $result_agregarJ = $f2->mit_agregarJornada_BD($this);
          return $result_agregarJ;

  }


    function mit_consultarJornada($nombre,$descripcion,$fecha_inicio, $fecha_fin,
            $tipo_desastre, $tipo_fase, $correo){
        // singleton de la clase fachadas
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_consultarJornada = $f2 -> mit_consultarJornada_BD($nombre,$descripcion,$fecha_inicio,$fecha_fin,$tipo_desastre,$tipo_fase,$correo);
           return $result_consultarJornada;
   }
    function row($result){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_row = $f2 -> row($result);
           return $result_row;
   }


}// fin clase Jornada
?>
