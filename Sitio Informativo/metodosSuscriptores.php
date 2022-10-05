<?php
	include('inc/mensaje.php');
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
				mensaje("Correo no registrado", "recuperar.php", "error.png");
			}
			break;

		case "2":

			$nom = $_REQUEST['nom'];
			$ap = $_REQUEST['apellido'];
			$correo = $_REQUEST['usuario'];
		
		
			$clave = generar(10);

			$sql = "call agregarSub('$nom','$ap','$correo','Activo',@res)";

			$consulta=$conexion->query($sql);

			if($consulta>0) {
				mensaje("Se agregó al usuario", "informacionSuscriptor.php ", "ok.png");
			} else {
				mensaje("Error", "informacionSuscriptor.php", "error.png");
			}

			break;

			case "3":

			$nom = $_REQUEST['nom'];
			$ap = $_REQUEST['apaterno'];
			$am = $_REQUEST['amaterno'];
			$tel = $_REQUEST['tel'];
			$tipo = $_REQUEST['tipo'];
			$correo = $_REQUEST['correo'];

			$sql = "CALL actualizarUsuario('$correo', '$tipo', '$nom', '$ap', '$am', '$tel', @res);";
			$consulta=$conexion->query($sql);
			
			if($consulta>0) {
				mensaje("Se actualizó el usuario", "informacionSuscriptor.php", "ok.png");
			} else {
				mensaje("Error", "informacionSuscriptor.php", "error.png");
			}

			break;

			case "4":
			$correo = $_REQUEST['correo'];
			$sql = "call bajaSub('$correo',@res)";
			$consulta = $conexion -> query($sql);
			
			if($consulta>0) {
				header('Location: informacionSuscriptor.php');
			}

			break;

			case "5":
			$correo = $_REQUEST['correo'];
			$sql = "CALL activarSub('$correo', @res);";
			$consulta = $conexion->query($sql);
			
			if($consulta>0) {
				header('Location: informacionSuscriptor.php');
			}

			break;


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