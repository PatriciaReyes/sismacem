<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php @include_once ("mit_FachadaInterfaz.php");
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
          <h2>Agregar Participante al <br>Plan de Mitigaci&oacute;n</h2>
        </div>
        <br><br><br>

        <div class="midtxt">
        <center>
        <img src="./images/en-construccion.gif"  />
        </center>
        <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=http:./agregarOpcionesP.php">
        </div>
        
      </div>
      
 <?php include "contentright.php"; ?>

    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
