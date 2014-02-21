<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <?php include("header.php"); ?>

<body>

<?php include("subheader.php"); ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">



      <?php include("contentleft.php");?>



      <div id="contentmid">

        <!-- CONTENIDO DE LA PAGINA AQUI -->



        <div class="midheading">
          <h2>Jornadas de Mitigaci&oacute;n</h2>
        </div>
        <div class="midtxt">
        Las Jornadas de Mitigaci&oacute;n son un conjunto de eventos dirigidos a grupos,
        organizaciones y otros participantes diversos con el fin de con el fin de disminuir
        el impacto de desastres sobre los componentes de los sistemas.
        <br><br>
        <p>
        <?
          if (isset($_SESSION['k_username'])){

          echo "<font color=#b22d00 size=2px>&#8226;</font>
          Agregar Jornada de Mitigaci&oacute;n    <a href='agregarJornada.php'>
              <img src='images/link.jpg' alt=''/></a><br><br>";
          }?>
          <font color=#b22d00 size=2px>&#8226;</font>  
          Consultar las Jornadas de Mitigaci&oacute;n  
          <a href="consultarJornada.php"><img src="images/link.jpg" alt=""/></a>
          <br><br>
        </p>
        </div>
        <br>



		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>

      <?php include("contentright.php");?>



    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
