<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");
include "header.php"; ?>
<script type="text/javascript" src="./scripts/verificarEtapa.js"></script>

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
          <h2>Agregar Etapa al <br>Plan de Mitigaci&oacute;n</h2>
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
              <form name=agregar action="agregarEtapa.php" method=post>
              <font size=2.5px><b>Nombre Etapa:</b></font>
            </td>
            <td>
              <input type=text name="nombre" size=27 maxlength=1000 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Numero Etapa:</b></font>
            </td>
            <td>
              <input type=text name="numEtapa" size=27 maxlength=5 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Tiempo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="tiempoEstimado" size=27 maxlength=100 /><br>
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
              <input type=text name="costo" size=27 maxlength=25 /><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <br>
              <input name=agregar_check type="button" value="Agregar Etapa"
                     onClick="verificarEtapa(this.form)"></input><br>
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

        $nombre = $_POST['nombre'];
        $numero_etapa = $_POST['numEtapa'];
        $tiempo_estimado = $_POST['tiempoEstimado'];
        $costo_estimado_etapa = $_POST['costo'];
        $descripcion = $_POST['descripcion'];

        $f = & singleton::getInstance('mit_FachadaInterfaz');
        $result = $f->mit_agregarEtapa($nombre,$numero_etapa,
                $tiempo_estimado,$costo_estimado_etapa,$descripcion);




        if ($result) {
         ;?>
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http:./agregarActividad.php">
         <?php
        }
        else{
         echo "<br>.. Error agregando la Etapa ..<br><br>";?>

    <div class="midtxt">
        <br>
        <fieldset><legend><font size=2.5px><b>Registro</b></font></legend>
        <br>
        <table border=0 align="center">
          <tr>
            <td>
              <form name=agregar action="agregarEtapa.php" method=post>
              <font size=2.5px><b>Nombre Etapa:</b></font>
            </td>
            <td>
              <input type=text name="nombre" size=27 maxlength=1000 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Numero Etapa:</b></font>
            </td>
            <td>
              <input type=text name="numEtapa" size=27 maxlength=5 /><font color=red size=2px> *</font><br>
            </td>
          </tr>
          <tr>
            <td>
              <font size=2.5px><b>Tiempo Estimado:</b></font>
            </td>
            <td>
              <input type=text name="tiempoEstimado" size=27 maxlength=100 /><br>
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
              <input type=text name="costo" size=27 maxlength=25 /><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <br>
              <input name=agregar_check type="button" value="Agregar Etapa"
                     onClick="verificarEtapa(this.form)"></input><br>
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
