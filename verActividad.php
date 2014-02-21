<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script type="text/javascript" src="tablesort.js"></script>
<?php include("mit_fachadaInterfaz.php"); ?>
<?php include("header.php"); ?>

<body>

<?php include("subheader.php"); ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">



      <?php include("contentleft.php");?>



      <div id="contentmid">

        <!-- CONTENIDO DE LA PAGINA AQUI -->

    <?php
    
    $idPlan= $_POST['id_plan'];
    $idEtapa= $_POST['id_etapa'];


    $f = & singleton::getInstance('mit_fachadaInterfaz');
    list($result, $num_rows) = $f->mit_consultarActividad($idPlan,$idEtapa);

    if (!$result){
    echo "<br> .. Error realizando la Consulta .. <br>";
    }
    else{
        echo "Consulta Exitosa";

      if($num_rows==0){
          echo "<br>";
          echo "<br>No se encontraron Actividades con tal especificaci&oacute;n.<br>";

      }
      else{

	echo "<font color=red size=1px> * </font>Actividades encontradas: "
          ."<b>$num_rows</b>"."<br><br>";

        ?>
 <table id="test1" cellpadding="0" cellspacing="0" border="0" class="sortable-onload-5-6r rowstyle-alt colstyle-alt no-arrow">
  <caption>Tabla de consulta</caption>
  <thead>
    <tr>

      <th class="sortable-numeric">#P</th>
      <th class="sortable-numeric">#E</th>
      <th class="sortable-numeric">#A</th>
      <th class="sortable">Nombre</th>
      <th class="sortable-date-dmy">Fecha</th>
      <th class="sortable">Lugar</th>
      <th class="sortable-numeric">Costo Estimado</th>
      <th class="sortable-numeric">Costo Total</th>
      <th class="sortable">Descripcion</th>
      <th class="sortable">Estado</th>
      
    </tr>
  </thead>
    <?php

	$imp = $f->rowAct($result);
        //Imprimir

        $indice=0;

        $indice2=0;
        $max=count($imp);
           while( $indice< $max ) {
        echo "<tr><td>";
            while($indice2<10){
            echo $imp["$indice"]."\n ";
                echo "</td><td>";
                $indice2++;
                $indice++;
            }

            if($indice2==10){
            ?>

                
            <?php
            }
            ?>
           

            <?php echo "</td></tr>";
        $indice2=0;

        }
              
        //print_r ($imp);
        ?>
        </table>
<?php
      }

	    echo "\n\n";
            echo "\n\n";
  }



    ?>
        <div class="midheading">

        </div>
        <div class="midtxt">


         <br><br><br>


        </div>


        <div class="midheading"> <BR><BR>
        </div>
        <div id="projectbg3"></div>



		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>





    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
