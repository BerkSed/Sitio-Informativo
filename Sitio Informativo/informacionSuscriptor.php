<?php
	session_start();
	include('privilegio.php');

	if(permitirAcceso($_SESSION['tipoUsuario'], 'inf_usuario')) {

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://kit.fontawesome.com/2794c16ed8.js" crossorigin="anonymous"></script>
	<title> Informacion Usuario</title>
</head>
<body>
<nav >
 
</nav>

    <div class="container">
        <div class="row">
            <di class="col-md-2 "></di>
            <di class="col-md-8">
                <h1 align= "center">Suscriptores</h1>
                <br>

                <p align= "right"><button class="btn btn-primary" onclick="location.href='agregarSuscriptor.php'">Agregar suscriptor</button></p>
                
        <table>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Ver</th> 
                    <th scope="col">Actualizar</th>
                    <th scope="col">Inactivo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('inc/mensaje.php');
                    include('inc/conexion.php');
                    $cuenta=0;
                    $sql="SELECT * FROM `suscripcion`, suscriptor WHERE suscriptor.correo= suscripcion.suscriptor_correo"; 
                        $consulta=$conexion->query($sql);

                     while($fila=mysqli_fetch_array($consulta)){
                         $cuenta++;
                        echo "<tr><td>" . $cuenta . "</td>";
                        echo "<td>" . $fila[1] . "</td>";
                        echo "<td>" . $fila[2] . "</td>";
                        echo "<td>" . $fila[10] . "</td>";
                        echo "<td align='center'><a href='verSuscriptor.php ?correo=".$fila[10]."'><i class='fa-solid fa-eye'></i></a></td>";
                        echo "<td align='center'><a href='actualizarSuscriptor.php?correo=". $fila[10] ."'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                        if($fila[4] == 'Activo') {
                            echo "<td align='center'> <a href='metodosSuscriptores.php?correo=".$fila[10]."&opcion=4'><i class='fa-solid fa-circle-check' style='font-size: 24px;color: green;'></i></a></td>";
                        }
                        else {
                            echo "<td align='center'> <a href='metodosSuscriptores.php?correo=".$fila[10]."&opcion=5'> <i class='fa-solid fa-circle-xmark' style='font-size: 24px;color: red;'></i> </a></td>";
                        }
                      
                       

                     }
                ?>
            </tbody>
        </table>

            </di>
        </div>

    </div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html> <?php
	}

	else {
		header('Location: index.php');
	}
?>
