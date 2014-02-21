<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
@include_once ("mit_FachadaInterfaz.php");
include_once("singleton.php");

?>
<?php include "header.php"; ?>

<body>

<?php include "subheader_logout.php"; ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php include("contentleft.php");?>
      <div id="contentmid">
        <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2>Planes de Mitigaci&oacute;n</h2>
        </div>
        <br><br><br>
    <div class="midtxt">
        <center>
        <a href="agregarEtapa.php"><input type="submit" value="Agregar Etapa"></a>
        <br><br>
        <a href="agregarActividad.php"><input type="submit" value="Agregar Actividad"></a>
        <br><br>
        <a href="agregarParticipante.php"><input type="submit" value="Agregar Partipacipante"></a>
        <br><br>
        <a href="planes.php"><input type="submit" value="Finalizar"></a>
        </center>
      </div>
</DIV>

 <?php include "contentright.php"; ?>

    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>

