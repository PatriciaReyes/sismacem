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
          <h2>Registro de Organizaciones</h2>
        </div>
        <div class="midtxt">  <b>
             <div id="projectbg2">


            <div class="midtxt">
            <fieldset><legend>Registro</legend>
            <TABLE BORDER="0" align="center">
             <TR>
               <TD>** Nombre: </TD>
               <TD><input type='text'/></TD>
             </TR>
             <TR>
               <TD>** RIF: </TD>
               <TD><input type='text'/></TD>
             </TR>
             <TR>
               <TD>** Telefono: </TD>
               <TD><input type='text'/></TD>
             </TR>
             <TR>
               <TD>** Codigo Postal: </TD>
               <TD><input type='text'/></TD>
             </TR>
             <TR>
             <TD>** Direccion:</TD>
             <TD><textarea name="Descripcion" cols="20" rows="4" ></textarea></TD>
             <TR>
             <TD><input type='submit' value="Agregar" aign='right' /></TD>
             </TR>
             </TR>
            </TABLE>
            </div>
             </fieldset>
            </div>
        </div>
            <div id="foro">
             <div class='menu bubplastic vertical aqua'>
              <ul>
              <li class='highlight'>
              <span class='menu_r'><a href="organizaciones.php" target='_self'>
              <span class='menu_ar'>
              Regresar
              </span></a></span></li>
              </ul>
             </div>
             </div>






        <div class="midheading"> <BR><BR>
        </div>
        <div id="projectbg3"></div>




		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>

      <?php include("contentright.php");?>



    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
