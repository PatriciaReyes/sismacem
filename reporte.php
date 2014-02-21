<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Centro de atención de desastres - Secci&oacute;n 1</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />
</head>

<body>
<div id="headerbg">
  <div id="headerblank">
    <div id="header">
      <div id="menu">
        <ul>
     	 <li><a href="index.php" class="menu">Inicio</a></li>
          <li><a href="nosotros.php" class="menu">Nosotros</a></li>
          <li><a href="empresas.php" class="menu">Empresas</a></li>
          <li><a href="contacto.php" class="menu">Contactanos</a></li>
        </ul>
      </div>
<div id="login">
<div id="logintxtblank2">
        <div id="loginheading3">
            <h4>Bienvenido Alejandro!</h4>
          </div>
        
      <div id="register2"><a href="registro.php" class="register2">Modificar datos</a></div><div id="register2"><a href="#" class="register2">Cerrar Sesion</a></div>
    </div>
      
    </div>
    </div>
  </div>
</div>
<div id="contentbg">
  <div id="contentblank">
    <div id="content">
      <?php include("contentleft.php");?>
      <div id="contentmid">
        <div class="midheading">
                      <h2>Reportaje de Daños</h2>
        </div>  
      
        <div id="projectbg2">
		<pre><div style="font-family:Arial; color: #853008">
     Nombre:                                       <input type="text" name="textfield" id="textfield" />
     
     
     Apellido:                                       <input type="text" name="textfield" id="textfield" />
     
     
     Estado:                                         <select name="Zonas">
     												 <option value="">Seleccione...</option>
                                                     <option value="">Amazonas</option>
                                                     <option value="">Anzoátegui</option>
                                                     <option value="">Apure</option>
                                                     <option value="">Aragua</option>
                                                     <option value="">Barinas</option>
                                                     <option value="">Bolívar</option>
                                                     <option value="">Carabobo</option>
                                                     <option value="">Cojedes</option>
                                                     <option value="">Delta Amacuro</option>
                                                     <option value="">Falcon</option>
                                                     <option value="">Guárico</option>
                                                     <option value="">Lara</option>
                                                     <option value="">Mérida</option>
                                                     <option value="">Miranda</option>
                                                     <option value="">Monagas</option>
                                                     <option value="">Nueva Esparta</option>
                                                     <option value="">Portuguesa</option>
                                                     <option value="">Sucre</option>
                                                     <option value="">Táchira</option>
                                                     <option value="">Trujillo</option>
                                                     <option value="">Vargas</option>
                                                     <option value="">Yaracuy</option>
                                                     <option value="">Zulia</option>
                                                     <option value="">Distrito Capital</option>
                                                     </select>
     
     Teléfono:                                      <input type="text" name="textfield" id="textfield" />
     
     Dirección:
                                                           <textarea name="" cols="20" rows="2"></textarea>
     Descripción:
                                                           <textarea name="" cols="20" rows="2"></textarea>
          
                                                             
                                                      <input type="submit" name = "submit" value="Aceptar"/>
                                                           
     
		</pre>		   
        </div>
      </div>
      <div id="contentright">
        <div class="rightheading">
          <h4>Galeria de Fotos</h4>
        </div>
        <div id="galleryblank">
          <div id="rightpic"><a href="#" class="rightpic"></a></div>
          <div id="rightpic02"><a href="#" class="rightpic02"></a></div>
          <div id="rightpic03"><a href="#" class="rightpic03"></a></div>
          <div class="viewbutton"><a href="#" class="view"> ver mas...</a></div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
