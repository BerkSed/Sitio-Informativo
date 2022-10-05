<?php
    function permitirAcceso($tipo, $formulario){
        include('inc/conexion.php');
        $result=$conexion->query("SELECT * FROM privilegio WHERE tipoUsuario='$tipo' AND formulario='$formulario'");

        if($result->num_rows > 0)
            return true;
        else
            return false;    
    }
?>