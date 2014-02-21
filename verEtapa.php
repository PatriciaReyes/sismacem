<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script type="text/javascript" src="tablesort.js"></script>
<?php
include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");

?>
<?php
@session_start();
include "header.php"; ?>
<body>
<?php include("subheader.php"); ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">



      <?php include("contentleft.php");?>



      <div id="contentmid">

        <!-- CONTENIDO DE LA PAGINA AQUI -->

    <?php

   // ********** ********** Preguntar si esta bien ********** **********
    $idPlan= $_POST['id_plan'];
    //$_SESSION['ID_Plan_Actual'] = $idPlan;
    //$id_Plan = $_SESSION['ID_Plan_Actual'];
    //echo "a"."<b>$id_Plan"."b<br><br>";
   //  ********** ********** ********** ********** ********** **********

   $f = & singleton::getInstance('mit_fachadaInterfaz');
    list($result, $num_rows) = $f->mit_consultarEtapa($idPlan);

    if (!$result){
    echo "<br> .. Error realizando la Consulta .. <br>";
    }
    else{
        echo "Consulta Exitosa";
	
      if($num_rows==0){
          echo "<br>";
          echo "<br>No se encontraron Etapas con tal especificaci&oacute;n.<br>";

      }
      else{

	echo "<font color=red size=1px> * </font>Etapas encontradas: "
          ."<b>$num_rows</b>"."<br><br>";
        ?>
    <!-- Tabla de Etapas-->
    <table id="test1" cellpadding="0" cellspacing="0" border="0"
        class="sortable-onload-5-6r rowstyle-alt colstyle-alt no-arrow">
    <caption>Tabla de consulta</caption>
    <thead>
    <tr>
      <th class="sortable-numeric">#P</th>
      <th class="sortable-numeric">#E</th>
      <th class="sortable">Nombre</th>
      <th class="sortable-date-dmy">Tiempo Estimado</th>
      <th class="sortable-date-dmy">Tiempo Real</th>
      <th class="sortable">Costo Total Etapa</th>
      <th class="sortable">Costo Estimado Etapa</th>
      <th class="sortable">Descripcion</th>
      <th class="sortable">Estado</th>
      <th class="sortable">Consulta Actividad</th>  
    </tr>
  </thead>
  <!-- Llenado de Tabla de Etapas -->
    <?php

	$imp = $f->rowET($result);
        //Imprimir

        $indice=0;

        $indice2=0;
        $max=count($imp);
           while( $indice< $max ) {
        echo "<tr><td>";
            while($indice2<9){
            echo $imp["$indice"]."\n ";
                echo "</td><td>";
                $indice2++;
                $indice++;
            }

            if($indice2==10){
            ?>

          <form name=id_plan action="waka.php" method=post>
          <input name="id_plan" type="hidden"
                 value="<?php echo $imp["$indice"-9]; ?>" align="right" />
          <input name="id_etapa" type="hidden"
               value="<?php echo $imp["$indice"-8]; ?>" align="right" />
          </form>
            <?php
            }
            ?>
            <form name=id_plan action="verActividad.php" method=post>
              <input name="id_plan" type="hidden"
                   value="<?php echo $imp["$indice"-9]; ?>" align="right" />
              <input name="id_etapa" type="hidden"
                   value="<?php echo $imp["$indice"-8]; ?>" align="right" />
              <input type="submit" value=">>" align="right" />
            </form>


            <?php echo "</td></tr>";
        $indice2=0;

        }
              echo "</td></tr>";
        //print_r ($imp);
        ?>
    <!-- Fin Tabla de Etapas-->
    </table>
<?php
      }
  }    
    ?>
            <div id="projectbg3"></div>
		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
      


      </div>
    </div>
  </div>
</div>
    <?php include("footer.php");?>
</body>