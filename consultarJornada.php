<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script type="text/javascript" src="tablesort.js"></script>
<script type="text/javascript" src="./scripts/verificarConsultaJornada.js"></script>
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
        <div class="midheading"> <h2>Consulta de Jornadas</h2></div>
        <div class="midtxt">  <b>
             <div id="projectbg2">
            ***Colocar campos vacios para buscar todos las jornadas que
            se encuentran Registrados.
            <?php
            if (!$_POST) {
            ?>
            <div class="midtxt">
            <fieldset><legend>Registro</legend>
            <TABLE border="0" align="center">
             <TR>
               <form name=consulta action="consultarJornada.php" method=post>
               <TD> Nombre: </TD>
               <TD><input size="27" name="nombre" type='text'/></TD>
             </TR>
             <TR>
             <TD> Descripcion </TD>
             <TD><textarea type=text name="descripcion" cols="27" rows="4">
             </textarea></TD>
             </TR>
             <TR>
               <TD><br> Fecha de Inicio: </TD>
               <TD>
               <div class="container">
                    <input type="text" name="fechaIni" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> Fecha Fin: </TD>
               <TD>
                   <div class="container">
                    <input type="text" name="fechaFin" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> Tipo Desastre </TD>
               <B>
               <TD><input name="tipoDesastre" size="27" type='text' /></TD>
             </TR>
             <TR>
             <TD> Tipo de Fase</TD>
               <TD><input type='text' size="27" name="tipoFase"/></TD>
             </TR>
             <TR>
             <TD> Correo</TD>
               <TD><input size="27" name="correo" type='text'/></TD>
             </TR>
                  <TD></TD>
             <td><input type="button" value="Consultar" onClick="verificarConsultaJornada(this.form)" align='right' /></td>
                  </form>
             </TR>
             </TR>
            </TABLE>
            </div>
             </fieldset>
            </div>
       <?php
        }else
         {
        ?>
             <div class="midtxt">
            <fieldset><legend>Registro</legend>
            <TABLE border="0" align="center">
             <TR>
               <form name=consulta action="consultarJornada.php" method=post>
               <TD> Nombre: </TD>
               <TD><input size="27" name="nombre" type='text'/></TD>
             </TR>
             <TR>
             <TD> Descripcion </TD>
              <TD><textarea type=text name="descripcion" cols="27" rows="4"
              </textarea></TD>
             </TR>
                <TR>
                <TR>
               <TD><br> Fecha de Inicio: </TD>
               <TD>
                   <div class="container">
                    <input type="text" name="fechaIni" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> Fecha de Fin: </TD>
               <TD>
                   <div class="container">
                    <input type="text" name="fechaFin" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> Tipo de Desastre </TD>
               <B>
               <TD><input type='text' size="27" name="tipoDesastre" /></TD>
             </TR>
             <TR>
             <TD> Tipo de Fase</TD>
               <TD><input type='text'size="27" name="tipoFase" /></TD>
             </TR>
             <TR>
             <TD> Correo: </TD>
               <TD><input size="27" name="correo" type='text'/></TD>
             </TR>
                  <TD></TD>
             <td><input type="button" value="Consultar" onClick="verificarConsultaJornada(this.form)" align='right' /></td>
             </TR>
             </TR>
            </TABLE>
            </div>
             </fieldset>
            </div>

        <?php

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $fechaIni = $_POST['fechaIni'];
        $fechaFin = $_POST['fechaFin'];
        $tipoDesastre = $_POST['tipoDesastre'];
        $tipoFase = $_POST['tipoFase'];
        $correo = $_POST['correo'];
        $f = & singleton::getInstance('mit_fachadaInterfaz');
        list($result, $num_rows) = $f->mit_consultarJornada($nombre,
                $descripcion, $fechaIni,
            $fechaFin,$tipoDesastre,$tipoFase,$correo);
        if (!$result){
            echo "<br> .. Error realizando la Consulta .. <br>";
        }
        else{
            echo ".";

          if($num_rows==0){
              echo "<br>";
              echo "<br>No se encontraron Jornadas con tal
                  especificaci&oacute;n.<br>";
          }
          else{
         ?>
    <!-- Tabla de Jornada -->
    <table id="test1" cellpadding="0" cellspacing="0" border="0"
           class="sortable-onload-5-6r rowstyle-alt colstyle-alt no-arrow">
     <caption>Consulta Exitosa-- Jornadas Encontrados:: <?php echo $num_rows;?>
         Tabla de consulta</caption>
    <thead>
    <tr>
      <th class="sortable-numeric">#</th>
      <th class="sortable">Nombre</th>
      <th class="sortable-date-dmy">Fecha Inicio</th>
      <th class="sortable-date-dmy">Fecha Fin</th>
      <th class="sortable">Tipo de Desastre</th>
      <th class="sortable">Tipo de Fase</th>
      <th class="sortable">Correo-Contacto</th>
      <th class="sortable">Descripcion</th>
      <th class="sortable">Consulta Eventos</th>
    </tr>
  </thead>
  <!-- LLenado de Tabla Jornada-->
<?php

	$imp = $f->rowJ($result);
        //Imprimir
        $indice=0;
        $indice2=0;
        $max=count($imp);
        while( $indice< $max ) {
        echo "<tr><td>";
            while($indice2<8){
            echo $imp["$indice"]."\n ";
                echo "</td><td>";
                $indice2++;
                $indice++;
            }
            if($indice2==9){
            ?>     
            <?php
            }
            ?>
            <form name="id_jornada" action="verEvento.php" method=post>
                  <input name="id_jornada" type="hidden"
                       value="<?php echo $imp["$indice"-8]; ?>" align="right" />
                  <input type="submit" value=">>" align="right" />
                  </form>

            <?php echo "</td></tr>";
            $indice2=0;
            }
            echo "</td></tr>";
            ?>
<!-- Fin Tabla Jornada-->
</table> 
<?php
	
      }
  }//FIn consulta Exitosa
}
?>
      </div>

        
        <div id="projectbg3"></div>
		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>

      <?php include("contentright.php");?>
    </div>
  </div>
<?php include("footer.php");?>
</body>


