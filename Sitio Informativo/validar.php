<?php

	session_start();
	include('inc/modal.php');
	include('inc/conexion.php');

	$usuario = $_REQUEST['usuario'];
	$clave = $_REQUEST['clave'];

	$sql = "SELECT * FROM `login` WHERE `login`.correo = '$usuario' AND login.contraseña = '$clave'";

	$consulta = $conexion -> query($sql);

	if($resultado = mysqli_fetch_array($consulta)) {

		$_SESSION['tipoUsuario'] = $resultado[2];
		$_SESSION['correo']=$resultado[10];
		$dato = $resultado[2];

		switch($dato) {
			case 'Administrador':
				header('Location: infoSub.php');
				break;


		default:
			mensaje("Revisa usuario y/o contraseña", "login.php", "error.png");

		} // Fin del switch

	} else {
		mensaje("Revisa usuario y/o contraseña", "login.php", "error.png");
	}// Fin del if

?>