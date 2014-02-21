<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");
include "header.php"; ?>

<script type="text/javascript" src="./scripts/verificarPlan.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>
<script src="calendar.js" type="text/javascript" language="javascript"></script>
<style type="text/css" media="screen,projection">
    @import url(calendar.css);
    body { font-family: sans-serif; font-size: 12px; }
</style>


<body>

<?php include "subheader_logout.php"; ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php include("contentleft.php");?>
      <div id="contentmid">
        <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2>Agregar Plan de Mitigaci&oacute;n</h2>
        </div>
        <br><br><br>

        <?php
        if (!$_POST) {
        ?>
     <div class="midtxt">
        <br>
        <fieldset><legend><font size=2.5px><b>Registro</b></font></legend>
        <br>
        <table border=0 align="center">
          <tr>
            <td>
              <form name=agregar action="agregarPlan.php" method=post>
              <font size=2.5px><b>Nombre del Plan:</b></font>
            </td>
            <td>
              <input type=text name="nombreP" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Fecha de Inicio:</b></font>
            </td>
            <td>
              <div class="container">
                <input type="text" name="fechaIniP" class="datePick" size="27" />
                <font color=red size=2px> *</font><br>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Fecha Finalizaci&oacute;n:</b></font>
            </td>
            <td>
              <div class="container">
                <input type="text" name="fechaFinP" class="datePick" size="27" /></input>
                <font color=red size=2px> *</font><br>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Tipo de Desastre:</b></font>
            </td>
            <td>
              <input type=text name="desastre" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Tipo de Fase:</b></font>
            </td>
            <td>
              <input type=text name="fase" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Descripci&oacute;n:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="descripcionP"></textarea>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Objetivo:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="objetivos"></textarea><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Alcance:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="alcance"></textarea><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Costo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="costo_estimado" size=27 /><font size=2.5px><b>BsF.</font><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <br>
              <input name=agregar_check type="button" value="Agregar Plan" onClick="verificarPlan(this.form)"><br>
              <font color=red> * </font><font size=1px> Campos Obligatorios </font>
            </td>
          </tr>
        </form>
        </table>
        </br>
        </fieldset>
      </div>
  <!-- CONTENIDO DE LA PAGINA HASTA AQUI -->

        <?php
        }else{

        $nombre = $_POST['nombreP'];
        $fecha_inicio = $_POST['fechaIniP'];
        $fecha_fin = $_POST['fechaFinP'];
        $tipo_desastre = $_POST['desastre'];
        $tipo_fase = $_POST['fase'];
        $descripcion = $_POST['descripcionP'];
        $objetivos = $_POST['objetivos'];
        $alcance = $_POST['alcance'];
        $costo_estimado = $_POST['costo_estimado'];

        $f = & singleton::getInstance('mit_FachadaInterfaz');
        $result = $f->mit_agregarPlan($nombre,$fecha_inicio,$fecha_fin,
                $tipo_desastre,$tipo_fase,$descripcion,$objetivos,$alcance,$costo_estimado);

        if ($result) {

         // "<br><br><br><br>";?>
        
         
        <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./agregarEtapa.php">
        <?php
        
        }
        else{
         echo "<br>.. Error agregando el Plan ..<br><br>";
         ?>
         
    <div class="midtxt">
        <br>
        <fieldset><legend><font size=2.5px><b>Registro</b></font></legend>
        <br>
         <table border=0 align="center">
          <tr>
            <td>
              <form name=agregar action="agregarPlan.php" method=post>
              <font size=2.5px><b>Nombre del Plan:</b></font>
            </td>
            <td>
              <input type=text name="nombreP" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Fecha de Inicio:</b></font>
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
              <font size=2.5px><b>Fecha Finalizaci&oacute;n:</b></font>
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
              <font size=2.5px><b>Tipo de Desastre:</b></font>
            </td>
            <td>
              <input type=text name="desastre" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Tipo de Fase:</b></font>
            </td>
            <td>
              <input type=text name="fase" size=27 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
            <tr>
            <td>
              <font size=2.5px><b>Descripci&oacute;n:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="descripcionP"></textarea>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Objetivo:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="objetivos"></textarea><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Alcance:</b></font>
            </td>
            <td>
              <textarea type=text cols="23" rows="4" name="alcance"></textarea><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Costo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="costo_estimado" size=27 /><font size=2.5px><b>BsF.</font><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <br>
              <input name=agregar_check type="button" value="Agregar Plan"onClick="verificarPlan(this.form)"><br>
              <font color=red> * </font><font size=1px> Campos Obligatorios </font>
            </td>
          </tr>
        </form>
        </table>
        </br>
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

