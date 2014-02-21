<?php
include_once("class_Plan.php");

$array = array(1, 2, 3, 4, 5);
//print_r($array);
    $Etapa = new etapa(1,"linda",NULL,NULL,NULL,NULL);

    $Etapa2 = new etapa(2,NULL,NULL,NULL,NULL,NULL);
     $Actividad = new actividad("Hector","hoy",NULL,NULL,NULL,NULL);
    $Etapa2->addActividad($Actividad);
    $Etapa2->addActividad($Actividad);
    $Etapa2->deleteActividad(2);
    //print_r($Etapa2);
//    print_r($Etapa->get_Nroactividad ());
 //   print_r($Etapa2->get_NroActividad ());
    $Plan = new plan("linda",NULL,NULL,NULL,NULL,NULL,NULL,NULL);
    $Plan->addEtapa($Etapa);
    $Plan->addEtapa($Etapa2);
    print_r($Plan->get_etapas());
    print_r("------------------------------");
    $Plan->deleteEtapa(1);
    print_r($Plan->get_etapas());
   // $Plan->addEtapa($Etapa);
   /* print_r($array);
    unset($array[0]);
    print_r("--------");
    print_r($array);
    */
   // print_r($Plan->get_etapas());
     //   print_r($Plan->get_nombre());
       ///     print_r($Plan->get_nombre());
//    print_r($Plan->get_etapas());
?>
