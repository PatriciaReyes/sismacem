<?php
/*
  Tiene como propósito asegurar que solo se pueda crear una instancia de la clase
  y proporcionar un punto global de acceso a ella.
*/

class singleton
{
    function &getInstance ($class)
    // Implementa patron de diseno singleton
    {
        static $instances = array();  // arreglo de instancias

        if (!array_key_exists($class, $instances)) {
            // si la instancia no existe la crea.
            $instances[$class] = new $class;
        }

        $instance =& $instances[$class];

        return $instance;

    }

}
?>
