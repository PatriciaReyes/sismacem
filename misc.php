<?php
include_once("conexion.php");
class misc {
    
      public function obtenerPlan_ID(){
        include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor","$bdunombre","$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }

           $query = mysql_query("SELECT MAX(id_plan) from PLAN");
           
        while ($row = mysql_fetch_array($query)) {
            $id = $row[0];
        }

       // $conexion->cerrar(); Ni idea porque no es descomentable xD!
      
      return $id;
    }


public function obtenerJornada_ID(){
    include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor","$bdunombre","$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }

           $query = mysql_query("SELECT MAX(ID_JORNADA) FROM JORNADA");

        while ($row = mysql_fetch_array($query)) {
    $id = $row[0];

        }
           //$conexion->cerrar();
          //  echo "jornadaId_Jornada en misc!";
          //  echo $id;
      return $id;


    }
    
} // fin de la clase misc
?>
