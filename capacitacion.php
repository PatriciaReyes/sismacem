<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include("header.php"); ?>

<body>
<?php include("subheader.php"); ?>
<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php
include("contentleft.php");?>
      <div id="contentmid">
         <!-- CONTENIDO DE LA PAGINA AQUI -->
        <div class="midheading">
          <h2>Capacitacion ON-LINE</h2>
        </div>
        <div class="midtxt">  
          <p>
          &#8226;  Medidas de Reduccion de Riesgos <a href="medidas.php"><img src="images/link.jpg" alt=""/></a><br><br>
          &#8226;  Estrategias de Mitigacion   <a href="estrategias.php"><img src="images/link.jpg" alt=""/></a><br><br>
          </p>
        </div>
        <div id="foro">
          <div class='menu bubplastic vertical aqua'>
            <ul>
            <li class='highlight'>
            <span class='menu_r'><a href='' target='_self'>
            <a href="foro.php">Foro</a>
            </a></span></li>
            </ul>
          </div>
        </div>
<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
      </div>
 <?php include "contentright.php"; ?>

    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
