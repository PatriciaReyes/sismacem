<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
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
<script type="text/javascript" src="./scripts/verificarJornada.js"></script>

<?php include "subheader_logout.php"; ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php include("contentleft.php");?>
      <div id="contentmid">
        <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2> Agregar Jornada <br> de Mitigaci&oacute;n </h2>
        </div>
        <br><br><br>

        <?php
          if (!$_POST) {
        ?>

        <div class="midtxt">
            <br><b>
            <fieldset><legend>Registro</legend>
            <br>
            <table border="0" align="center">
             <TR>
               <form name=consulta action="agregarJornada.php" method=post>
               <TD> <font size=2.5px><b>Nombre Jornada:</b></font> </TD>
               <TD>
                <input size="27" name="nombre" type='text'/>
                <font color=red size=2px> *</font>
               </TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Descripci&oacute;n:</b></font> </TD>
               <TD>
                 <textarea type=text cols="23" rows="4" name="descripcion"></textarea>
               </TD>
             </TR>
             <TR>
               <TD><br> <font size=2.5px><b>Fecha de Inicio:</b></font> </TD>
              <TD>
                <div class="container">
                    <input type="text" name="fechaIni" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
             </TD>
             </TR>
             <TR>
               <TD> <font size=2.5px><b>Fecha Finalizaci&oacute;n:</b></font> </TD>
               <TD>
                  <div class="container">
                    <input type="text" name="fechaFin" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> <font size=2.5px><b>Tipo de Desastre:</b></font> </TD>
               <B>
               <TD><input size="27" name="tipoDesastre" type='text' /><font color=red size=2px> *</font></TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Tipo de Fase:</b></font> </TD>
               <TD><input size="27" type='text' name="tipoFase"/><font color=red size=2px> *</font></TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Correo electr&oacute;nico:</b></font> </TD>
               <TD><input size="27" name="correo" type='text'/><font color=red size=2px> *</font></TD>
             </TR>
                  <TD></TD>
             <TD>
              <br><input type="button" value="Agregar Jornada" 
                         onClick="verificarJornada(this.form)" align="right" />
              <br><font color=red> * </font><font size=1px> Campos Obligatorios </font>
              <br><br>
             </TD>
             
             </TR>
             </TR>
            </form>
            </table>
            </br>
            </fieldset>
            </b>
          </div>
        
        <!-- CONTENIDO DE LA PAGINA HASTA AQUI -->

        <?php
        }else{

        $nombre = $_POST['nombre'];
        $fecha_inicio = $_POST['fechaIni'];
        $fecha_fin = $_POST['fechaFin'];
        $tipo_desastre = $_POST['tipoDesastre'];
        $tipo_fase = $_POST['tipoFase'];
        $correo = $_POST['correo'];
        $descripcion = $_POST['descripcion'];

        $f = & singleton::getInstance('mit_FachadaInterfaz');
        $result = $f->mit_agregarJornada($nombre,$fecha_inicio,$fecha_fin,
                                         $tipo_desastre,$tipo_fase,$correo,$descripcion);

        if ($result) {
          ;?>
          <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=./agregarEvento.php">
        <?php
        
        }
        else{
         echo "<br>.. Error agregando la Jornada ..<br><br>";
         ?>
         
         <div class="midtxt">
          
            <br><br><b>
            <fieldset><legend>Registro</legend>
            <br>
            <table border="0" align="center">
             <TR>
               <form name=consulta action="agregarJornada.php" method=post>
               <TD> <font size=2.5px><b>Nombre Jornada:</b></font> </TD>
               <TD>
                <input size="27" name="nombre" type='text'/>
                <font color=red size=2px> *</font>
               </TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Descripci&oacute;n:</b></font> </TD>
               <TD>
                 <textarea type=text cols="23" rows="4" name="descripcion"></textarea>
               </TD>
             </TR>
             <TR>
               <TD><br> <font size=2.5px><b>Fecha de Inicio:</b></font> </TD>
              <TD>
                <div class="container">
                    <input type="text" name="fechaIni" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
             </TD>
             </TR>
             <TR>
               <TD> <font size=2.5px><b>Fecha Finalizaci&oacute;n:</b></font> </TD>
               <TD>
                  <div class="container">
                    <input type="text" name="fechaFin" class="datePick" size="27" />
                    <font color=red size=2px> *</font><br>
                </div>
               </TD>
             </TR>
             <TR>
               <TD> <font size=2.5px><b>Tipo de Desastre:</b></font> </TD>
               <B>
               <TD><input size="27" name="tipoDesastre" type='text' /><font color=red size=2px> *</font></TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Tipo de Fase:</b></font> </TD>
               <TD><input size="27" type='text' name="tipoFase"/><font color=red size=2px> *</font></TD>
             </TR>
             <TR>
             <TD> <font size=2.5px><b>Correo electr&oacute;nico:</b></font> </TD>
               <TD><input size="27" name="correo" type='text'/><font color=red size=2px> *</font></TD>
             </TR>
                  <TD></TD>
             <TD>
              <br><input type="button" value="Agregar Jornada"
                         onClick="verificarJornada(this.form)" align="right" />
              <br><font color=red> * </font><font size=1px> Campos Obligatorios </font>
              <br><br>
             </TD>

             </TR>
             </TR>
            </form>
            </table>
            </br>
            </fieldset>
            </b>
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

