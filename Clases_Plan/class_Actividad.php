<?php

  include_once("singleton.php");
  include_once("mit_FachadaBD.php");

class class_Actividad {

    var $id_Plan='NULL';
    var $numero_etapa='NULL';
    var $numero_actividad='NULL';
    var $nombre='NULL';
    var $fecha='NULL';
    var $costo_estimado_actividad='NULL';
    var $costo_total_actividad='NULL';
    var $lugar='NULL';
    var $descripcion='NULL';
    var $estado='NULL';

   function class_Actividad($numero_etapa=NULL,$numero_actividad=NULL,
                $nombre=NULL,$fecha=NULL,$costo_estimado_actividad=NULL,
                    $lugar=NULL,$descripcion=NULL){

    $this->numero_etapa=$numero_etapa;
    $this->numero_actividad=$numero_actividad;
    $this->nombre=$nombre;
    $this->fecha=$fecha;
    $this->costo_estimado_actividad=$costo_estimado_actividad;
    $this->lugar=$lugar;
    $this->descripcion=$descripcion;
                }

    function set_nombre ($nombre) {
      $this->Nombre = $nombre;
   }

   function set_fecha ($fecha) {
      $this->Fecha = $fecha;
   }
   function set_lugar ($lugar) {
      $this->Lugar = $lugar;
   }
   function set_descripcion ($descripcion) {
      $this->Descripcion = $descripcion;
   }
   function set_contacto ($contacto) {
      $this->Contacto = $contacto;
   }
   function set_costo ($costo) {
      $this->costo = $costo;
   }
   
   function get_nombre () {
     return $this->Nombre;
   }

   function get_fecha () {
      return $this->Fecha;
   }
   function get_lugar () {
      return $this->Lugar;
   }
   function get_descripcion () {
      return $this->Descripcion;
   }
   function get_contacto () {
      return $this->Contacto;
   }
   function get_costo () {
      return $this->costo;
   }  

   function mit_agregarActividad(){

           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_agregarActv = $f2 -> mit_agregarActividad_BD($this);
           return $result_agregarActv;
   }

     function mit_consultarActividad($id_plan,$id_etapa){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           return list($result, $num_rows) = $f2 ->mit_consultarActividad($id_plan,$id_etapa);
}
    function rowAct($result){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_row = $f2 -> row($result);
           return $result_row;
    }

}
?>

