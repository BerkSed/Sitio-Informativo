<?php
	include('inc/modal.php');
	include('inc/conexion.php');

	$opcion = $_REQUEST['opcion'];
	

	switch($opcion) {
		case "1":
			$correo = $_REQUEST['correo'];
			$sql = "SELECT * FROM `suscriptor`, `suscripcion` WHERE suscriptor.correo ='$correo' AND suscripcion.estado = 'Activo'";

			$consulta = $conexion->query($sql);

			if($fila = mysqli_fetch_array($consulta)) {
				correo($fila[0], $fila[1]);
			}
			else {
				mensaje("Correo no registrado", "recuperar.php", "incorrecto.png");
			}
			break;

		case "2":

			$nom = $_REQUEST['nombre'];
			$ap = $_REQUEST['apellido'];
			$correo = $_REQUEST['correo'];
		

			$sql = "call agregarSub('$nom','$ap','$correo','Activo',@res)";

			$consulta=$conexion->query($sql);

			if($consulta>0) {
				mensaje("Se agregó al usuario", "infoSub.php ", "bueno.png");
			} else {
				mensaje("Error", "infoSub.php", "incorrecto.png");
			}

			break;

			case "3":

			$nom = $_REQUEST['nombre'];
			$ap = $_REQUEST['apellido'];
			$correo = $_REQUEST['correo'];


			$sql = "CALL actualizarSub('$correo','$nom','$ap',@res);";
			$consulta=$conexion->query($sql);
			
			if($consulta>0) {
				mensaje("Se actualizó el usuario", "infoSub.php", "bueno.png");
			} else {
				mensaje("Error", "infoSub.php", "incorrecto.png");
			}

			break;

			case "4":
			$correo = $_REQUEST['correo'];
			$sql = "call bajaSub('$correo',@res)";
			$consulta = $conexion -> query($sql);
			
			if($consulta>0) {
				header('Location:infoSub.php');
			}

			break;

			case "5":
			$correo = $_REQUEST['correo'];
			$sql = "CALL activarSub('$correo', @res);";
			$consulta = $conexion->query($sql);
			
			if($consulta>0) {
				header('Location:infoSub.php');
			}

			break;

		case "6":
				$correo = $_REQUEST ['correo'];
				$sql ="call eliminarSub('$correo', @res)";
				$consulta = $conexion -> query($sql);
	
				if ($consulta>0){
					mensaje("Suscripción eliminada", "infoSub.php", "bueno.png");
				}
				else{
					mensaje("Error en la eliminación", "infoSub.php", "incorrecto.png");
	
				}
			break;

		case 7:

			$correo = $_REQUEST['correo'];
		
			$clave = generar(10);

			$sql = "call agregarAdmin('$correo','$clave','Administrador',@res)";

			$consulta=$conexion->query($sql);

			if($consulta>0) {
				mensaje("Se agregó un nuevo Admin.", "infoSub.php ", "bueno.png");
			} else {
				mensaje("Error en la agregación", "infoSub.php", "incorrecto.png");
			}

			break;

		case 8:

			$correo = $_REQUEST ['correo'];
				$sql ="call eliminarAdmin('$correo', @res)";
				$consulta = $conexion -> query($sql);
	
				if ($consulta>0){
					mensaje("Administrador eliminado", "infoSub.php", "bueno.png");
				}
				else{
					mensaje("Error en la eliminación", "infoSub.php", "incorrecto.png");
	
				}


	} // fin del switch

	function correo($correo, $clave) {
		$msg = "Usuario: " .$correo. "\n Contraseña: " .$clave;
		mail($correo, "Biblioteca municipal", $msg);
		mensaje("Contraseña enviada", "login.php", "ok.png");
	}

	function generar($canti) {
		$password = "";
		$pattern = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$max = strlen($pattern)-1;

		for($i = 0; $i < $canti; $i++) {
			$password .= substr($pattern, mt_rand(0,$max), 1);
		}

		return $password;
	}

?>