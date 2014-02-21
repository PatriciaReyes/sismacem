<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");
include "header.php"; ?>
<script type="text/javascript" src="./scripts/verificarActividad.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>
<script src="calendar.js" type="text/javascript" language="javascript"></script>
<style type="text/css" media="screen,projection">
    @import url(calendar.css);
    body { font-family: sans-serif; font-size: 12px; }
</style>
<!--

<div style="display:none">
<script type="text/javascript" src="resources/js/Fecha.js" ></script>
<script type="text/javascript" src="resources/js/Calendario.js" ></script>
<link rel="STYLESHEET" type="text/css" href="resources/css/calendario.css"></link>
</div>
-->

<?php include "subheader_logout.php"; ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php include("contentleft.php");?>
      <div id="contentmid">
        <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2>Agregar Actividad al <br>Plan de Mitigaci&oacute;n</h2>
        </div>
        <br><br><br>
        
        <?php
        $f = & singleton::getInstance('mit_FachadaInterfaz');
        
        if (!$_POST) {
        
        $num_etapas = $f->mit_consultarNumEtapas();

        ?>

     <div class="midtxt">
        <br>
        <fieldset><legend>Registro</legend>
        <br>
        <table border=0 align="center">
          <tr>
            <td>
              <form name=agregar action="agregarActividad.php" method=post>
              <font size=2.5px><b>Nombre Actividad:</b></font>
            </td>
            <td>
              <input type=text name="nombre" size=27 maxlength=100 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
            <tr>
            <td>
              <font size=2.5px><b>Numero Etapa:</b></font>
            </td>
            <td>

           <?php

           echo "<select name='num_Etapa'>";
            for($i=0; $i < count($num_etapas); $i++){
            echo "<option value='$num_etapas[$i]'>$num_etapas[$i]</option>";
            }
            echo "</select>";
            ?>
                <font color=red size=2px> *</font><br>
            </td>
          </tr>          <tr>
            <td>
              <font size=2.5px><b>Numero Actividad:</b></font>
            </td>                        
              <td>
              <input type=text name="num_Actividad" size=27 maxlength=5 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Fecha:</b></font>	
            </td>
            <td>
            <div class="container">
                <input type="text" name="fecha" class="datePick" size="27" />
                <font color=red size=2px> *</font><br>
            </div>
           </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Lugar:</b></font>	
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="lugar"></textarea>
              <font color=red size=2px> *</font><br><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Descripci&oacute;n:</b></font>	
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="descripcion"></textarea>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Costo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="costo" size=27 maxlength=25 /><font size=2.5px><b>BsF.</font><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">	
              <br>
              <input name=insertar_check type="button" value="Agregar Actividad"
                     onClick="verificarActividad(this.form)"/><br>
              <font color=red> * </font><font size=1px> Campos Obligatorios </font>
            </td>
          </tr>
        </form>
        </table>
       </fieldset>
     </div>
        <!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
        
        <?php
        }else{
        
        $numero_etapa = $_POST['num_Etapa'];
        $numero_actividad = $_POST['num_Actividad'];
        $nombre= $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $costo_estimado_actividad = $_POST['costo'];
        $lugar = $_POST['lugar'];
        $descripcion= $_POST['descripcion'];

        $result = $f->mit_agregarActividad($numero_etapa,$numero_actividad,
                $nombre,$fecha,$costo_estimado_actividad,$lugar,$descripcion);

        if ($result) {
         echo "\n<br>\n<br>\n<br><b><FONT size=4 COLOR='gray'>¡Plan actualizado Exitosamente!</b></FONT>";?>
        <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=./agregarOpcionesP.php">
        <?php
        }
        else{
         echo "<br>.. Error Agregando la Actividad ..<br><br>";?>

    <div class="midtxt">
        <br>
        <fieldset><legend>Registro</legend>
        <br>
         <table border=0 align="center">
          <tr>
            <td>
              <form name=agregar action="agregarActividad.php" method=post>
              <font size=2.5px><b>Nombre Actividad:</b></font>
            </td>
            <td>
              <input type=text name="nombre" size=27 maxlength=100 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
            <tr>
            <td>
              <font size=2.5px><b>Numero Etapa:</b></font>
            </td>
            <td>

           <?
            echo "<select name='num_Etapa'>";
            for($i=0; $i < count($num_etapas); $i++){
            echo "<option value='$num_etapas[$i]'>$num_etapas[$i]</option>";
            }
            echo "</select>";
            ?>
                <font color=red size=2px> *</font><br>
            </td>
          </tr>          <tr>
            <td>
              <font size=2.5px><b>Numero Actividad:</b></font>
            </td>
              <td>
              <input type=text name="num_Actividad" size=27 maxlength=5 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Fecha:</b></font>
            </td>
            <td>
            <div class="container">
                <input type="text" name="fecha" class="datePick" size="27" />
                <font color=red size=2px> *</font><br>
            </div>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Lugar:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="lugar"></textarea>
              <font color=red size=2px> *</font><br><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Descripci&oacute;n:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="descripcion"></textarea>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Costo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="costo" size=27 maxlength=25 /><font size=2.5px><b>BsF.</font><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <br>
              <input name=insertar_check type="button" value="Agregar Actividad"
                     onClick="verificarActividad(this.form)"/><br>
              <font color=red> * </font><font size=1px> Campos Obligatorios </font>
            </td>
          </tr>
        </form>
        </table>
       </fieldset>
      </div>
         <?php
        }
        }
        ?>
        
      </div>
      
 <?php include "contentright.php"; ?>

    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
