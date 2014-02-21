<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<script type="text/javascript" src="tablesort.js"></script>
<script type="text/javascript" src="./scripts/verificarConsultaPlan.js"></script>
<?php
@include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");
include("header.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>
<script src="calendar.js" type="text/javascript" language="javascript"></script>
<style type="text/css" media="screen,projection">
    @import url(calendar.css);
    body { font-family: sans-serif; font-size: 12px; }
</style>



<body>

<?php include("subheader.php"); ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">



      <?php include("contentleft.php");?>



      <div id="contentmid">

        <!-- CONTENIDO DE LA PAGINA AQUI -->


        <div class="midheading">
          <h2>Consulta de Planes</h2>
        </div>
        <div class="midtxt">  <b>
             <div id="projectbg2">
            ***Colocar los campos vacios para buscar todos los Planes que
            permanecen Registrados.
              <?php
              if (!$_POST) {
            ?>
            <div class="midtxt">
            <fieldset><legend>Registro</legend>
            <TABLE BORDER="0" align="center">
             <TR>
               <form name=consulta action="consultarPlan.php" method=post>
               <TD> Nombre: </TD>
               <TD><input size="34" name="nombre" type='text'/></TD>
             </TR>

             <TR>
              <TD> Objetivos </TD>
               <TD><input size="34" name="objetivos" type='text'/></TD>
             </TR>

             <TR>
             <TD> Alcance </TD>
               <TD><input size="34" name="alcance" type='text'/></TD>
             </TR>

             <TR>
             <TD> Descripcion </TD>
               <TD><input size="34" name="descripcion" type='text'/></TD>
             </TR>

             <TR>
               <TD><Br> Fecha de Inicio: </TD>
               <TD>
                <div class="container">
                    <input type="text" name="fecha" class="datePick" size="34" />
                    <font color=red size=2px> *</font><br>
                </TD>
                </div>
             </TR>

             <TR>
               <TD> Fecha Fin: </TD>
               <TD>
                 <div class="container">
                    <input type="text" name="fecha" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>

             <TR>
               <TD> Tipo Desastre</TD>
               <B>
               <TD><input name="tipoDesastre" size="27" type='text' /></TD>
             </TR>

             <TR>
             <TD> Tipo de Fase</TD>
               <TD><input type='text' size="27" name="tipoFase"/></TD>
             </TR>

             <TR>
             <TD> Costo Estimado</TD>
               <TD><input size="27" name="costo_estimado" type='text'/></TD>
             </TR>

             <TD> Costo Total </TD>
               <TD><input size="27" name="costo_total" type='text'/></TD>
            </TR>
             <td></td>
              <td><input type="button" value="Consultar" onClick="verificarConsultaPlan(this.form)" align='right' /></td>

                  </form>
           </TABLE>
             </fieldset>
            </div>
            </div>


       <?php
        }
        else{
        ?>
             <div class="midtxt">
            <fieldset><legend>Registro</legend>
            <TABLE BORDER="0" align="center">
             <TR>
               <form name=consulta action="consultarPlan.php" method=post>
               <TD> Nombre: </TD>
               <TD><input size="27" name="nombre" type='text'/></TD>
             </TR>

                <TR>
              <TD> Objetivos </TD>
               <TD><input size="27" name="objetivos" type='text'/></TD>
             </TR>

                <TR>
             <TD> Alcance: </TD>
               <TD><input size="27" name="alcance" type='text'/></TD>
             </TR>

                <TR>
             <TD> Descripci&oacute;n: </TD>
               <TD><input size="27" name="descripcion" type='text'/></TD>
             </TR>

                <TR>
               <TD><Br> Fecha de Inicio: </TD>
               <TD>
                   <div class="container">
                    <input type="text" name="fecha" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>

                <TR>
               <TD> Fecha de Fin: </TD>
               <TD>
                   <div class="container">
                    <input type="text" name="fecha" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>

                <TR>
               <TD> Tipo de Desastre: </TD>
               <B>
               <TD><input type='text' size="27" name="tipoDesastre" /></TD>
             </TR>

                <TR>
             <TD> Tipo de Fase:</TD>
               <TD><input type='text'size="27" name="tipoFase" /></TD>
             </TR>

                <TR>
             <TD> Costo Estimado:</TD>
               <TD><input size="27" name="costo_estimado" type='text'/></TD>
             </TR>

                <TR>
             <TD> Costo Total:</TD>
               <TD><input size="27" name="costo_total" type='text'/></TD>
             </TR>
                <td></td>
             <td><input type="button" value="Consultar" onClick="verificarConsultaPlan(this.form)" align='right' /></td>
            </form>
              </TABLE>
             </fieldset>
            </div>
         </div>


        <?php

$nombre = $_POST['nombre'];
$objetivos = " ";
$alcance = " ";
$descripcion = " ";
$fecha_inicio = $_POST['fechaIni'];
$fecha_fin= $_POST['fechaFin'];
$tipo_desastre= $_POST['tipoDesastre'];
$tipo_fase= $_POST['tipoFase'];
$costo_estimado = $_POST['costo_estimado'];
$costo_total = $_POST['costo_total'];


$f = & singleton::getInstance('mit_fachadaInterfaz');
list($result, $num_rows) = $f->mit_consultarPlan($nombre,$fecha_inicio,
        $fecha_fin,$tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,
                        $costo_estimado,$costo_total);

if (!$result){
    echo "<br> .. Error realizando la Consulta .. <br>";
}
else{


      if($num_rows==0){
          echo "<br>";
          echo "<br>No se encontraron Planes con tal especificaci&oacute;n.<br>";

      }
      else{

        //echo "Consulta Exitosa";
	echo "<b>";
        ?>
        <br><br><br>
	 <table id="test1" cellpadding="0" cellspacing="0" border="0"
                class="sortable-onload-5-6r rowstyle-alt colstyle-alt no-arrow">
  <caption>Consulta Exitosa-- Planes Encontrados:: <?php echo $num_rows;?> Tabla
      de consulta</caption>
  <thead>
    <tr>
      <th class="sortable-numeric">#</th>
      <th class="sortable">Nombre</th>
      <th class="sortable-date-dmy">Fecha Inicio</th>
      <th class="sortable-date-dmy">Fecha Fin</th>
      <th class="sortable">Descripci&oacute;n</th>
      <th class="sortable">Alcance</th>
      <th class="sortable">Objetivos</th>
      <th class="sortable">Costo Estimado</th>
      <th class="sortable">Costo Total</th>
      <th class="sortable">Consulta Etapa</th>
    </tr>
  </thead>


    <?php
	$imp = $f->rowF($result);
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

            if($indice2==9){
            ?>

                  <form name=id_plan action="waka.php" method=post>
                  <input name="id_plan" type="hidden" value="<?php echo $imp["$indice"-9]; ?>" align="right" />
                  </form>
            <?php
            }
            ?>
            <form name=id_plan action="verEtapa.php" method=post>
                  <input name="id_plan" type="hidden"
                       value="<?php echo $imp["$indice"-9]; ?>" align="right" />
                  <input type="submit" value=">>" align="right" />
                  </form>


            <?php echo "</td></tr>";
        $indice2=0;

        }
        echo "</td></tr>";

        //print_r ($imp);
        ?>
       </table>
<?php


      }

	    echo "\n\n";
            echo "\n\n";
            echo "\n\n";

  }



}
?>

        </div>






		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>

      <?php include("contentright.php");?>



    </div>
  </div>
  </div>
<?php include("footer.php");?>
</body>
</html>
