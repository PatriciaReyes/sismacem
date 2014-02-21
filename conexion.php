<?php
//include 'config.php';

class conexion{

  var $BD;
  var $servidor;
  var $usuario;
  var $clave;
  var $id;
  var $consulta;

function conexion() {

  $this->BD = "MIT_DB";
  $this->servidor = "localhost";
  $this->usuario = "MITIGACION";
  $this->clave = "MITIGACION";
}


function conectar_servidor($host, $user, $pass){

  if ($host != "") $this->servidor = $host;
  if ($user != "") $this->usuario = $user;
  if ($pass != "") $this->clave = $pass;
  $this->id = mysql_connect($this->servidor, $this->usuario, $this->clave);
  
// Error
  if (!$this->id) {
    return false;
  }

  return true;
}

function conectar_bd($bd,$conexion){

  $db=mysql_select_db($bd,$conexion);

  if (!$db){
    return false;
  }
  return true;
}

    function cerrar(){

        mysql_close($this->id);
    }
}
?>
