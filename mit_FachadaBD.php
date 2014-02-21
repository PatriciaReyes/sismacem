<?php
@session_start();
include_once("conexion.php");
include_once("misc.php");

class mit_FachadaBD{

    public function mit_agregarPlan_BD($Plan){

        include 'config.php';
        $conexion = new conexion();
        $estado = $conexion->conectar_servidor("$bdservidor", "$bdunombre", "$bdpass");
        if(!$estado){
            die("Error conectando a la base de datos");
        }

        $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
        if(!$estado){
            die ("Error seleccionando la base de datos");
        }

        $query = "INSERT INTO PLAN (NOMBRE,FECHA_INICIO,FECHA_FIN,TIPO_DESASTRE,
        TIPO_FASE,DESCRIPCION,ALCANCE,OBJETIVOS,COSTO_TOTAL,COSTO_ESTIMADO)
        VALUES ('$Plan->nombre',STR_TO_DATE('$Plan->fecha_inicio', '%d-%m-%y'),
                STR_TO_DATE('$Plan->fecha_fin', '%d-%m-%y'),'$Plan->tipo_desastre',
                '$Plan->tipo_fase','$Plan->descripcion','$Plan->alcance','$Plan->objetivos',
                '$Plan->costo_total',$Plan->costo_estimado)";

        

        $result = mysql_query($query);
        $ins = new misc();
        $Plan->Id_Plan = $ins->obtenerPlan_ID();

        $conexion->cerrar();

        return $result;
    }


function mit_consultarPlan_BD ($Plan){
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }

// Se realiza la consulta
  $query = "SELECT p.id_plan,p.nombre,p.fecha_inicio, p.fecha_fin, p.descripcion,
           p.alcance, p.objetivos, p.costo_total, p.costo_estimado FROM Plan p
		   WHERE p.id_plan=id_plan";


        if(strcmp("$Plan->nombre","")!=0){
		$query .= " AND p.nombre='$Plan->nombre'";
	}
        if(strcmp("$Plan->fecha_inicio","")!=0){
		$query .= " AND p.fecha_inicio='$Plan->fecha_inicio'";
	}
        if(strcmp("$Plan->fecha_fin","")!=0){
		$query .= " AND p.fecha_fin='$Plan->fecha_fin'";
	}

        if(strcmp("$Plan->tipo_desastre","")!=0){
		$query .= " AND p.tipo_desastre='$Plan->tipo_desastre'";
	}
        if(strcmp("$Plan->tipo_fase","")!=0){
		$query .= " AND p.tipo_fase='$Plan->tipo_fase'";
	}

        if(strcmp("$Plan->costo_estimado","")!=0){
		$query .= " AND p.costo_estimado='$Plan->costo_estimado'";
	}

         if(strcmp("$Plan->costo_total","")!=0){
		$query .= " AND p.costo_total='$Plan->costo_total'";
	}

        $query .=";";
//Se ejecuta el query
//echo $query;
$result = mysql_query($query);
//echo "--result ";
//echo $result;
//echo " FIn result-";
$num_rows = mysql_num_rows($result);

// Cerrar conexion
$connection->cerrar();

return array($result, $num_rows);

}

function row($result){
    include 'config.php';

    //Se crea nueva conexion con el servidor
    $connection = new conexion();
    $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

    if(!$state){
      die("Error conectando a la base de datos");
    }

    //Se realiza conexion con la BD
    $state=$connection->conectar_bd("$bdnombre",$connection->id);
    if(!$state){
    die ("Error seleccionando la base de datos");
    }

$row = mysql_fetch_array($result);

// Cerrar conexion
$connection->cerrar();

return $row;

}


function rowEt($result){
    include 'config.php';

    //Se crea nueva conexion con el servidor
    $connection = new conexion();
    $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

    if(!$state){
      die("Error conectando a la base de datos");
    }

    //Se realiza conexion con la BD
    $state=$connection->conectar_bd("$bdnombre",$connection->id);
    if(!$state){
    die ("Error seleccionando la base de datos");
    }

$row = mysql_fetch_array($result);

// Cerrar conexion
$connection->cerrar();

return $row;

}

    public function mit_agregarEtapa_BD($Etapa){

          include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor", "$bdunombre", "$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }
            $ins = new misc();
            $Id_Plan = $ins->obtenerPlan_ID();
           $query = "insert into ETAPA values ($Id_Plan,$Etapa->numero_etapa,
            '$Etapa->nombre','$Etapa->tiempo_estimado',$Etapa->tiempo_real,
            $Etapa->costo_total_etapa,$Etapa->costo_estimado_etapa,'$Etapa->descripcion',
            'No Iniciada')";

           $result = mysql_query($query);
           $conexion->cerrar();

      return $result;
    }

    public function mit_agregarActividad_BD($actividad){

          include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor", "$bdunombre", "$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }

            $ins = new misc();
            $Id_Plan = $ins->obtenerPlan_ID();
        $query = "INSERT INTO ACTIVIDAD VALUES ($Id_Plan,$actividad->numero_etapa,
                $actividad->numero_actividad,'$actividad->nombre',STR_TO_DATE('$actividad->fecha', '%d-%m-%y'),
                $actividad->costo_estimado_actividad,$actividad->costo_total_actividad,
                '$actividad->lugar','$actividad->descripcion','No Iniciada.')";

           $result = mysql_query($query);


           $conexion->cerrar();

      return $result;
    }


    // JORNADA
    public function mit_agregarJornada_BD($jornada){
          include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor", "$bdunombre", "$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }

           $query = "INSERT INTO JORNADA (NOMBRE,FECHA_INICIO,FECHA_FIN,TIPO_DESASTRE,
           TIPO_FASE,CORREO_CONTACTO,DESCRIPCION)
           VALUES ('$jornada->nombre',STR_TO_DATE('$jornada->fecha_inicio', '%d-%m-%y'),
                   STR_TO_DATE('$jornada->fecha_fin', '%d-%m-%y'),'$jornada->tipo_desastre',
                   '$jornada->tipo_fase','$jornada->correo','$jornada->descripcion')";

           $result = mysql_query($query);
           $ins = new misc();

            $jornada->Id_Jornada = $ins->obtenerJornada_ID();

           $conexion->cerrar();

      return $result;
    }

// EVENTO
    public function mit_agregarEvento_BD($evento){

          include 'config.php';

          $conexion = new conexion();
          $estado = $conexion->conectar_servidor("$bdservidor", "$bdunombre", "$bdpass");
          if(!$estado){
             die("Error conectando a la base de datos");
           }

           $estado=$conexion->conectar_bd("$bdnombre",$conexion->id);
           if(!$estado){
             die ("Error seleccionando la base de datos");
           }
           $ins = new misc();
           $Id_Jornada = $ins->obtenerJornada_ID();
           $query = "INSERT INTO EVENTO VALUES ($Id_Jornada,'$evento->nombre',
                   STR_TO_DATE('$evento->fecha', '%d-%m-%y'),'$evento->hora',
                   '$evento->lugar','$evento->descripcion','$evento->telefono')";

           $result = mysql_query($query);

           $conexion->cerrar();

      return $result;
    }

function mit_consultarEtapa ($id_plan){
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }
// Se realiza la consulta
//  echo "AHH";
//  echo $id_plan;
//  echo "EHHH";
  $query = "SELECT e.id_plan,e.numero_etapa,e.nombre,e.tiempo_estimado,e.tiempo_real,
             e.costo_total_etapa,e.costo_estimado_etapa,e.descripcion,e.estado FROM ETAPA e
      WHERE e.id_plan='$id_plan'";

//echo $query;
        $query .=";";
//Se ejecuta el query
$result = mysql_query($query);


$num_rows = mysql_num_rows($result);

//echo $result;
// ********** ********** ********** ********** ********** **********
//$_SESSION["ID_Plan_Actual"] = $id_plan;
//********** ********** ********** ********** ********** **********

// Cerrar conexion
$connection->cerrar();

return array($result, $num_rows);

} //fin de la funcion consultacl

function mit_consultarEvento ($id_jornada){
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }
// Se realiza la consulta


  $query = "SELECT ev.id_jornada,ev.nombre,ev.hora,ev.lugar,
                  ev.descripcion,ev.telefono_contacto FROM Evento ev
      WHERE ev.id_jornada='$id_jornada'";

        $query .=";";
//Se ejecuta el query
$result = mysql_query($query);


$num_rows = mysql_num_rows($result);

// Cerrar conexion
$connection->cerrar();

return array($result, $num_rows);

} //fin de la funcion consultacl

function mit_consultarActividad($id_plan,$id_etapa){
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }

  $query = "SELECT a.id_plan,a.numero_etapa,a.numero_actividad,a.nombre,
            a.fecha, a.lugar, a.costo_estimado_actividad,
            a.costo_total_actividad,a.descripcion,a.estado
            FROM ACTIVIDAD a WHERE a.numero_etapa='$id_etapa'
            AND a.id_plan='$id_plan'";

        $query .=";";
//Se ejecuta el query
$result = mysql_query($query);


$num_rows = mysql_num_rows($result);

// Cerrar conexion
$connection->cerrar();

return array($result, $num_rows);

} //fin de la funcion


    function mit_consultarJornada_BD ($nombre,$descripcion,$fechaIni,$fechaFin,$tipoDesastre,$tipoFase,$correo){
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }

  // Se realiza la consulta
  $query = "SELECT j.id_jornada,j.Nombre,j.Fecha_Inicio,j.Fecha_Fin,j.Tipo_Desastre,j.Tipo_Fase,
                    j.Correo_Contacto,j.Descripcion FROM Jornada j
   WHERE j.id_jornada=id_jornada";


   // echo $descripcion;

        if(strcmp("$nombre","")!=0){
$query .= " AND j.nombre='$nombre'";
}
          if(strcmp("$descripcion","")!=0){
$query .= " AND j.descripcion='$descripcion'";
}
          if(strcmp("$fechaIni","")!=0){
$query .= " AND j.fecha_inicio='$fechaIni'";
}
          if(strcmp("$fechaFin","")!=0){
$query .= " AND j.fecha_Fin='$fechaFin'";
}
         if(strcmp("$tipoDesastre","")!=0){
$query .= " AND j.tipo_Desastre='$tipoDesastre'";
}
        if(strcmp("$tipoFase","")!=0){
$query .= " AND j.tipo_Fase='$tipoFase'";
}
        if(strcmp("$correo","")!=0){
$query .= " AND j.correo_contacto='$correo'";
}


        $query .=";";
//Se ejecuta el query
//echo $query;
$result = mysql_query($query);
//echo "--result ";
//echo $result;
//echo "FIn result-";
$num_rows = mysql_num_rows($result);

// Cerrar conexion
$connection->cerrar();

return array($result, $num_rows);

}

function mit_consultarNumE_BD() {
  include 'config.php';
  //include 'conexion.php';
  //Se crea nueva conexion con el servidor
  $connection = new conexion();
  $state = $connection->conectar_servidor("$bdservidor","$bdunombre","$bdpass");

  if(!$state){
    die("Error conectando a la base de datos");
  }

  //Se realiza conexion con la BD
  $state=$connection->conectar_bd("$bdnombre",$connection->id);
  if(!$state){
    die ("Error seleccionando la base de datos");
  }
// Se realiza la consulta

   $ins = new misc();
   $Id_Plan = $ins->obtenerPlan_ID();

  $query = "SELECT NUMERO_ETAPA from ETAPA where ID_PLAN=$Id_Plan";

  $query .=";";

//Se ejecuta el query
$result = mysql_query($query);

$i =0;

while ($row = mysql_fetch_array($result)) {
      $arreglo[$i]=$row[0];
      $i++;
}


$connection->cerrar();

return $arreglo;

} //fin de la funcion consultacl

} // fin de la clase BD

?>
