<?php
include_once("./Clases_Plan/class_Plan.php");
include_once("./Clases_Jornada/class_Evento.php");
include_once("./Clases_Plan/class_Etapa.php");
include_once("./Clases_Plan/class_Actividad.php");
include_once("./Clases_Jornada/class_Jornada.php");


class mit_FachadaInterfaz
{

    public function mit_agregarPlan($nombre,$fecha_inicio,$fecha_fin,
            $tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,$costo_estimado){

        $Plan = new class_Plan($nombre,$fecha_inicio,$fecha_fin,
            $tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,$costo_estimado);

        $resultP = $Plan->registrarDatosPlan();
        
        return $resultP;

    }

    // Jornadas
      public function mit_agregarJornada($nombre,$fecha_inicio,$fecha_fin,
                                         $tipo_desastre,$tipo_fase,$correo,$descripcion){

          $jornada = new class_Jornada($nombre,$fecha_inicio,$fecha_fin,
                                         $tipo_desastre,$tipo_fase,$correo,$descripcion);

            $resultJ = $jornada->registrarDatosJornada();

            return $resultJ;
      }

        public function mit_agregarParticipante($CI,$id_Plan,$rol)
		{
			$insPart = new Participante(); 
			return $resultPart = $insPart->mit_agregarParticipante($CI,$id_Plan);
		}

        public function mit_agregarEtapa($nombre,$numero_etapa,
                $tiempo_estimado,$costo_estimado_etapa,$descripcion){
                        
        $Etapa = new class_Etapa($nombre,$numero_etapa,
                $tiempo_estimado,$costo_estimado_etapa,$descripcion);

        $resultE = $Etapa->mit_agregarEtapa();

        return $resultE;

        }

        public function mit_agregarActividad($numero_etapa,$numero_actividad,
                $nombre,$fecha,$costo_estimado_actividad,$lugar,$descripcion){

	$actividad = new class_Actividad($numero_etapa,$numero_actividad,
                $nombre,$fecha,$costo_estimado_actividad,$lugar,$descripcion);

	return $resultActv = $actividad->mit_agregarActividad();
		}
                   
        public function mit_consultarPlan($nombre,$fecha_inicio,
        $fecha_fin,$tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,
                        $costo_estimado,$costo_total){
	    $cons = new class_Plan($nombre,$fecha_inicio,
        $fecha_fin,$tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,
                        $costo_estimado,$costo_total);
            //echo $costo_estimado;
            //echo $costo_total;
	    return list($result, $num_rows) = $cons->mit_consultarPlan();

	}

        public function mit_consultarNumEtapas(){

            $num = new class_Etapa();
            return $num->mit_consultarNumE();

        }

        public function rowF($result) {
            $Ar=array();
          $cons = new class_Plan();
          
	  while( $row = $cons->row($result) ) {
                  $Ar[]=$row['id_plan'];
                  $Ar[]=$row['nombre'];
		  $Ar[]=$row['fecha_inicio'];
                  $Ar[]=$row['fecha_fin'];
                  $Ar[]=$row['descripcion'];
                  $Ar[]=$row['alcance'];
                  $Ar[]=$row['objetivos'];
                  $Ar[]=$row['costo_estimado'];
                  $Ar[]=$row['costo_total'];
                  ?>
                  <?php
               
                }
                    return $Ar;
		  }

 public function rowET($result) {
            $Ar=array();
          $cons = new class_Etapa();
	  while( $row = $cons->rowEt($result) ) {
                  $Ar[]=$row['id_plan'];
                  $Ar[]=$row['numero_etapa'];
                  $Ar[]=$row['nombre'];
                  $Ar[]=$row['tiempo_estimado'];
                  $Ar[]=$row['tiempo_real'];
                  $Ar[]=$row['costo_total_etapa'];
                  $Ar[]=$row['costo_estimado_etapa'];
                  $Ar[]=$row['descripcion'];
                  $Ar[]=$row['estado'];
                  ?>
                  <?php
                }

                    return $Ar;
		  }

 public function rowAct($result) {
            $Ar=array();
          $cons = new class_Actividad();
	  while( $row = $cons->rowAct($result) ) {
                  $Ar[]=$row['id_plan'];
                  $Ar[]=$row['numero_etapa'];
		  $Ar[]=$row['numero_actividad'];
                  $Ar[]=$row['nombre'];
                  $Ar[]=$row['fecha'];
                  $Ar[]=$row['lugar'];
                  $Ar[]=$row['costo_estimado_actividad'];
                  $Ar[]=$row['costo_total_actividad'];
                  $Ar[]=$row['descripcion'];
                  $Ar[]=$row['estado'];
                  ?>
                  <?php
                  
                }

                    return $Ar;
		  }

        public function rowJ($result) {

          $Ar=array();
          $cons = new class_Jornada();

	  while( $row = $cons->row($result) ) {
                  $Ar[]=$row['id_jornada'];
                  $Ar[]=$row['Nombre'];
		  $Ar[]=$row['Fecha_Inicio'];
                  $Ar[]=$row['Fecha_Fin'];
                  $Ar[]=$row['Tipo_Desastre'];
                  $Ar[]=$row['Tipo_Fase'];
                  $Ar[]=$row['Correo_Contacto'];
                  $Ar[]=$row['Descripcion'];
                  ?>
                  <?php

           }

            return $Ar;
        }
         public function rowEv($result) {

          $Ar=array();
          $cons = new class_Evento();

	  while( $row = $cons->rowEv($result) ) {

                  $Ar[]=$row['id_jornada'];
                  $Ar[]=$row['nombre'];
		  $Ar[]=$row['hora'];
                  $Ar[]=$row['lugar'];
                  $Ar[]=$row['descripcion'];
                  $Ar[]=$row['telefono_contacto'];
                  
                  ?>
                  <?php

                }

                    return $Ar;
		  }


      
      // Eventos
      public function mit_agregarEvento($nombre,$fecha,$hora,
                $lugar,$descripcion,$telefono)
		{
                        
			$insE = new class_Evento($nombre,$fecha,$hora,
                                $lugar,$descripcion,$telefono);
			return $resultE = $insE->mit_agregarEvento();
		}
      
      public function mit_consultarEtapa($id_plan){
                        $insE = new class_Etapa();
			return list($result, $num_rows) = $insE->mit_consultarEtapa($id_plan);
      }

      public function mit_consultarActividad($id_plan,$id_etapa){
                        $insE = new class_Actividad();
			return list($result, $num_rows) = $insE->mit_consultarActividad($id_plan,$id_etapa);
      }
       

        public function mit_consultarJornada($nombre,$descripcion,$fechaIni,$fechaFin,$tipoDesastre,$tipoFase,$correo){
    $cons = new class_Jornada();
    return list($result, $num_rows) = $cons->mit_consultarJornada
                    ($nombre,$descripcion,$fechaIni,$fechaFin,$tipoDesastre,$tipoFase,$correo);
        }

        public function mit_consultarEvento($id_jornada){
    $cons = new class_Evento();
    return list($result, $num_rows) = $cons->mit_consultarEvento($id_jornada);
        }

} // fin mit_FachadaInterfaz

////// ESTO ES CAPA LOGICA

// Mitigacion

/*Interface Plan
{
public addEtapa(ob_etapa);
public deleteEtapa(nroEtapa);

//Sets
public set_nombre (nombre);
public set_objetivo (objetivo);
public set_fechaIni (fechaIni);
public set_fechaFin (fechaFin);
public set_costo (costo);
public set_etapas (etapas);
public set_NumEtapas (numEtapas);

//Gets
public string get_nombre ();
public string get_objetivo ();
public string get_fechaIni ();
public string get_fechaFin ();
public int get_costo ();
public array get_etapas ();
public int get_NumEtapas ();

}
Interface Etapa
{
public addActividad(ob_actividad:Actividad);
public deleteActividad(nroActividad);
//Sets

public set_nombre (nombre);
public set_descripcion (decripcion);
public set_tiempoEstimado (tiempoEstimado);
public set_tiempoReal (tiempoReal);
public set_costo (costo);
public set_NroActividad (nroActividad);
public set_Actividades (actividades);
//Gets
public string get_nombre ();
public string get_descripcion ();
public string get_tiempoEstimado ();
public string get_tiempoReal ();
public int get_costo ();
public array get_actividades ();
public int get_nroActividad ();
}

Interface Actividad
{
//sets
public set_nombre (nombre);
public set_fecha (fecha);
public set_lugar (lugar);
public set_descripcion (descripcion);
public set_costo (costo);
//gets
public string get_nombre ();
public string get_fecha ();
public string get_lugar ();
public string get_descripcion ();
public int get_costo ();
}*/
?>