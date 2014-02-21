<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:SISMACEM:.</title><!-->  Cambio<-->
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" />
</head>

<body>
<div id="headerbg">
  <div id="headerblank">
    <div id="header">
    <?php include "pestanas.php"; ?>
      <div id="login">
        <div id="logintxtblank">
          <div id="loginheading">
            <h4>Registro de Usuario</h4>
          </div>
          <div id="username">Usuario:</div>
          <div id="input">
            <label>
              <input name="textfield" type="text" class="input" id="textfield" value="ingrese nombre de usuario" />
            </label>
          </div>
          <div id="password">Contraseña:</div>
          <div id="input02">
            <label>
              <input name="textfield2" type="password" class="input" id="textfield2" value="password" />
            </label>
          </div>
          <div id="loginbutton"><a href="#" class="login">Entrar</a></div>
          <div id="member">¿Desea ayudar? </div>
          <div id="register"><a href="registro.php" class="register">Registrate aqui</a></div>
           <div id="register"><a href="#" class="register">¿Olvido su contraseña?</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contentbg">
  <div id="contentblank">
    <div id="content">
<?php
include("contentleft.php");?>
      <div id="contentmid">
        <div class="midheading">
          <h2>Planes de Miligacion Internacionales</h2>
        </div>
        <br><br>

        <div class="midtxt">
        <p>
          <font size=3>
          <b><u>Asia</u></b><br><br>
          </font>
          Aun no se han agregado documentos para esta region...<br>
        </p>
        </div>
        <div id="foro">
          <div class='menu bubplastic vertical aqua'>
            <ul>
            <li class='highlight'>
            <span class='menu_r'><a href="planesInternacionales.php" target='_self'>
            <span class='menu_ar'>
            Regresar
            </span></a></span></li>
            </ul>
          </div>
        </div>
        <div id="projectbg3"></div>
      </div>
        
 <?php include "contentright.php"; ?>

    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>
