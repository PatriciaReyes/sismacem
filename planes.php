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
          <h2>Planes de Mitigaci&oacute;n</h2>
        </div>
        <div class="midtxt">
        Los Planes de Mitigaci&oacute;n son un conjunto de medidas 
        y obras a implementar antes de la ocurrencia de un desastre, 
        con el fin de disminuir el impacto sobre los componentes de los sistemas.
        <br><br>
        <p>
            <?php
          if (isset($_SESSION['k_username'])){

          echo "<font color=#b22d00 size=2px>&#8226;</font>
              Agregar Plan de Mitigaci&oacute;n  <a href='agregarPlan.php'>
              <img src='images/link.jpg' alt=''/></a><br><br>";
          }
          ?>
          
          <font color=#b22d00 size=2px>&#8226;</font>
          Consultar los Planes de Mitigaci&oacute;n  <a href="consultarPlan.php"><img src="images/link.jpg" alt=""/></a>
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
