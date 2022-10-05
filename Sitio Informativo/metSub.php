<?php
    include('inc/conexion.php');
    include('inc/modal.php');

    $opcion = $_REQUEST['opcion'];

    switch($opcion){

        case 1: 
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $correo = $_REQUEST['correo'];

            $sql = "call agregarSub('$nombre','$apellido','$correo','Activo',@res);";

            $consulta = $conexion -> query($sql);

			if ($consulta>0){
				mensaje("¡¡Gracias por suscribirte!!", "index.php", "bueno.png");
			}
			else{
				mensaje("Error en la suscripcion :(", "suscripcion.php", "incorrecto.png");

			}

            break;

        case 2: 
            $motivo = $_REQUEST['motivo'];
            $correo = $_REQUEST['correo'];

            $sql = "call cancelarSub('$correo','$motivo',@res)";

            $consulta = $conexion -> query($sql);

			if ($consulta>0){
				mensaje("Te has dado de baja :(", "index.php", "bueno.png");
			}
			else{
				mensaje("Error en la baja :)", "baja.php", "incorrecto.png");

			}

            break;
            
    }

?>

