<?php

include_once("singleton.php");
include_once("mit_FachadaBD.php");

class class_Plan {

    var $Id_Plan='NULL';
    var $nombre='NULL';
    var $fecha_inicio='NULL';
    var $fecha_fin='NULL';
    var $tipo_desastre='NULL';
    var $tipo_fase='NULL';
    var $descripcion='NULL';
    var $alcance='NULL';
    var $objetivos='NULL';
    var $costo_estimado='NULL';
    var $costo_total='NULL';



    function class_Plan($nombre=NULL,$fecha_inicio=NULL,$fecha_fin=NULL,
            $tipo_desastre=NULL,$tipo_fase=NULL,$descripcion=NULL,
            $objetivo=NULL,$alcance=NULL,$costo_estimado=NULL,
            $costo_total=NULL){


    $this->nombre=$nombre;
    $this->fecha_inicio=$fecha_inicio;
    $this->fecha_fin=$fecha_fin;
    $this->tipo_desastre=$tipo_desastre;
    $this->tipo_fase=$tipo_fase;
    $this->descripcion=$descripcion;
    $this->objetivos=$objetivo;
    $this->alcance=$alcance;
    $this->costo_estimado=$costo_estimado;
    $this->costo_total=$costo_total;

    }

    function registrarDatosPlan(){

           $f2 = & singleton::getInstance('mit_FachadaBD');
           $result_agregarP = $f2->mit_agregarPlan_BD($this);
           return  $result_agregarP;

    }

   function mit_agregarParticipante($CI,$id_Plan,$rol){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_agregarPart = $f2 -> mit_agregarParticipante_BD($CI,
                   $id_Plan,$rol);
           return $result_agregarPart;
   }

    function mit_consultarPlan(){
        // singleton de la clase fachadas
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_consultarPlan = $f2 -> mit_consultarPlan_BD($this);
           return $result_consultarPlan;
   }

    function row($result){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_row = $f2 -> row($result);
           return $result_row;
   }

} // fin clase Plan
?>
