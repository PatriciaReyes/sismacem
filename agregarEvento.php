<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
session_start();
include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");
include "header.php";

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6/prototype.js'></script>
<script src="calendar.js" type="text/javascript" language="javascript"></script>
<style type="text/css" media="screen,projection">
    @import url(calendar.css);
    body { font-family: sans-serif; font-size: 12px; }
</style>



<body>
<script type="text/javascript" src="./scripts/verificarEvento.js"></script>

<?php include "subheader_logout.php"; ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php include("contentleft.php");?>
      <div id="contentmid">
        <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2>Agregar Evento a la <br>Jornada de Mitigaci&oacute;n</h2>
        </div>
        <br><br><br>


        <?php


        if (!$_POST) {
        ?>
        
      <div class="midtxt">
          <br>
          <fieldset><legend>Registro</legend>
          <br>
          <table border=0 align="center">
            <tr>
              <td>
                <form name=agregar action="agregarEvento.php" method=post>
                <font size=2.5px><b>Nombre Evento:</b></font>
              </td>
              <td>
                <input type=text name="nombre" size=27 /><font color=red size=2px> *</font><br>
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
                <font size=2.5px><b>Hora:</b></font>	
              </td>
              <td>
                <input type=text name="hora" size=27 /><font color=red size=2px> *</font><br>
              </td>
            </tr>
            <tr>
              <td>
                <font size=2.5px><b>Lugar:</b></font>	
              </td>
              <td>
                <textarea type=text cols="23" rows="4" name="lugar"></textarea>
                <font color=red size=2px> *</font>
                <br>
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
                <font size=2.5px><b>Tel&eacute;fono:</b></font>	
              </td>
              <td>
                <input type=text name="telefono" size=27 /><br>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center">	
                <br>
                <input name=insertar_check type="button" value="Agregar Evento"
                       onClick="verificarEvento(this.form)"><br>
                <font color=red> * </font><font size=1px> Campos Obligatorios </font><br><br>
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

        $nombre = $_POST['nombre'];
        $hora = $_POST['hora'];
        $lugar = $_POST['lugar'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];


        $f = & singleton::getInstance('mit_FachadaInterfaz');
        $result = $f->mit_agregarEvento($nombre,$fecha,$hora,
                $lugar,$descripcion,$telefono);

        if ($result) {
          echo "\n<br>\n<br>\n<br><b><FONT size=4 COLOR='gray'>¡Jornada actualizada Exitosamente!</b></FONT>";?>

        <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=http:./agregarOpcionesJ.php">
          <?php
        }
        else{
          echo "<br>.. Error agregando el Evento ..<br><br>";?>
          
          <div class="midtxt">
            
              <fieldset><legend>Registro</legend>
              <br>
              <table border=0 align="center">
                <tr>
                  <td>
                <form name=agregar action="agregarEvento.php" method=post>
                <font size=2.5px><b>Nombre del Evento:</b></font>
              </td>
              <td>
                <input type=text name="nombre" size=27 /><font color=red size=2px> *</font><br>
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
                <font size=2.5px><b>Hora:</b></font>
              </td>
              <td>
                <input type=text name="hora" size=27 /><font color=red size=2px> *</font><br>
              </td>
            </tr>
            <tr>
              <td>
                <font size=2.5px><b>Lugar:</b></font>
              </td>
              <td>
                <textarea type=text cols="23" rows="4" name="lugar"></textarea>
                <font color=red size=2px> *</font>
                <br>
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
                <font size=2.5px><b>Tel&eacute;fono:</b></font>
              </td>
              <td>
                <input type=text name="telefono" size=27 /><br>
              </td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <br>
                <input name=insertar_check type="button" value="Agregar Evento"
                       onClick="verificarEvento(this.form)"><br>
                <font color=red> * </font><font size=1px> Campos Obligatorios </font><br><br>
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
