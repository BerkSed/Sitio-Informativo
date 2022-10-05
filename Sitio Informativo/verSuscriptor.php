<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  	<script src="https://kit.fontawesome.com/2794c16ed8.js" crossorigin="anonymous"></script>
	<title>Ver informacion</title>
</head>
<body>


<div class="container">
        <div class="row">
       <main>
       <h2 align="center">Informacion de suscriptor</h2>
        <center>
         <div class="container">
            <div  class="z-depth-3 y-depth-3 x-depth-3 grey  lighten-4 row" style="display: inline-block; padding: 32px 58px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">  
        

            <?php
                	include('inc/modal.php');
                    include('inc/conexion.php');
                    $correo=$_REQUEST['correo'];

                    $sql="SELECT * FROM `suscripcion`, suscriptor WHERE suscriptor.correo = suscripcion.suscriptor_correo AND suscriptor.correo = '$correo'";

                    $consulta=$conexion->query($sql);
                    
                        if($fila=mysqli_fetch_array($consulta)){

                            echo "<div align='left'><h6>Nombre:</h6><p> " .$fila[1]. "</p></div>";
                            echo "<div align='left'><h6>Apellidos:</h6><p> " .$fila[2]. "</p></div>";
                            echo "<div align='left'><h6>Correo:</h6><p> " .$fila[10]. "</p></div>"; 
                            echo "<div align='left'><h6>Fecha de suscripcion:</h6><p> " .$fila[3]. "</p></div>";

                        }
            ?>
            <br>
            <p align="center"><button class=" waves-effect waves-light btn red"onclick="location.href='infoSub.php'" >Cerrar</button></p>
         
            </div>
           </div>
          </center>
          </main>
    
        </div>
    </div>


 



</body>
</html> 