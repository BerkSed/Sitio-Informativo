<?php

	$conexion = new mysqli("localhost","root","","unity");
	if ($conexion->connect_errno) {
		echo "Fallo al conectarse a MySQL: (" . $conexion->connect_errno . ")" . $conexion->connect_errno;
	}
    

?> 