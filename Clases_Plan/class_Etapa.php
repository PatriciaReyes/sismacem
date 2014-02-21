<?php

include_once("singleton.php");
include_once("mit_FachadaBD.php");

class class_Etapa {

    var $id_plan='NULL';
    var $numero_etapa='NULL';
    var $nombre='NULL';
    var $tiempo_estimado='NULL';
    var $tiempo_real='NULL';
    var $costo_total_etapa='NULL';
    var $costo_estimado_etapa='NULL';
    var $descripcion = 'NULL';
    var $estado = 'NULL';

    function class_Etapa($nombre=NULL,$numero_etapa=NULL,
                $tiempo_estimado=NULL,$costo_estimado_etapa=NULL,
            $descripcion=NULL) {

        $this->nombre=$nombre;
	$this->numero_etapa=$numero_etapa;
	$this->tiempo_estimado=$tiempo_estimado;
	$this->costo_estimado_etapa=$costo_estimado_etapa;
	$this->descripcion=$descripcion;

}

    function mit_agregarEtapa(){

           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_agregarE = $f2 -> mit_agregarEtapa_BD($this);

           return $result_agregarE;
   }

   function mit_consultarEtapa($id_Plan){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           return list($result, $num_rows) = $f2 ->mit_consultarEtapa($id_Plan);
}

   function mit_consultarNumE(){

       $f2 = & singleton::getInstance('mit_fachadaBD');
       return $f2->mit_consultarNumE_BD();

   }

    function rowEt($result){
        // singleton de la clase fachada
           $f2 = & singleton::getInstance('mit_fachadaBD');
           $result_row = $f2 -> rowET($result);
           return $result_row;
   }


}
 ?>
