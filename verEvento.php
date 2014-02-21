<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        $id_jornada= $_POST['id_jornada'];
        $f = & singleton::getInstance('mit_fachadaInterfaz');
        list($result, $num_rows) = $f->mit_consultarEvento($id_jornada);
        if (!$result){
            echo "<br> .. Error realizando la Consulta .. <br>";
        }else{

          echo "Consulta Exitosa";
          if($num_rows==0){
              echo "<br>";
              echo "<br>*No se encontraron Eventos con tal e
                  specificaci&oacute;n.<br>";
          }
          else{
            echo "<font color=red size=1px> * </font>Eventos encontradas: "
              ."<b>$num_rows</b>"."<br><br>";
            ?>
        <!-- Tabla de Evento html -->
        <table id="test1" cellpadding="0" cellspacing="0" border="0"
               class="sortable-onload-5-6r rowstyle-alt colstyle-alt no-arrow">
        <caption>Tabla de consulta</caption>
        <thead>
        <tr>
          <th class="sortable-numeric">#</th>
          <th class="sortable">Nombre</th>
          <th class="sortable">Hora</th>
          <th class="sortable">Lugar</th>
          <th class="sortable">Descripcion</th>
          <th class="sortable">Telefono-Contacto</th>
        </tr>
        </thead>
        <!-- Llenado de Tabla -->
        <?php
	$imp = $f->rowEv($result);
        //Imprimir
        $indice=0;
        $indice2=0;
        $max=count($imp);
           while( $indice< $max )
           {
                echo "<tr><td>";
                while($indice2<6){
                    echo $imp["$indice"]."\n ";
                    echo "</td><td>";
                    $indice2++;
                    $indice++;
                }
           echo "</td></tr>";
           $indice2=0;
           }
        ?>
      <!-- Fin Tabla de Evento html -->
      </table>
    <?php
      } //Fin existen datos
    }//Fin consulta exitosa
    ?>
        
    <!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
	
    </div>
  </div>
</div>
</div>
</body>
<?php include("footer.php");?>
