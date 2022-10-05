<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Aztualizar Suscriptor</title>
</head>
<body>

<style>

    body{
        background-color:#FDDEA8;
    }

    .titulo{
        /*Color amarillo de título*/ 
        color: #FDB12B;
    }
</style>
    

<div class="section container ">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row ">
        <div class="col s2"></div>

        <?php
					include('inc/modal.php');
					include('inc/conexion.php');
					$correo = $_REQUEST['correo'];

					$sql = "SELECT * FROM `suscripcion`, suscriptor WHERE suscriptor.correo = suscripcion.suscriptor_correo AND suscriptor.correo = '$correo'";

					$consulta = $conexion -> query($sql);

					if($fila = mysqli_fetch_array($consulta)) {
				?>

        <form class="col s8" action="metAdmin.php" name="baja">

            <input type="hidden" name="correo" value="<?php  echo $fila [10] ?>">
            <input type="hidden" name="opcion" value="3">

            <div class="row card panel z-depth-4 ">

            <br>
                <div>
                    <h3 class="center-align titulo">Actualizar Suscriptor</h3>
                </div>

                <br>

                <div class="input-field col s12">
                    <input type="text"  id="nombre" name="nombre" class="validate" value="<?php echo $fila[1] ?>" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+" required>
                    <label for="nombre">Nombre:</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="apellido" id="apellido" class="validate" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+" value="<?php echo $fila[2] ?>">
                    <label class="active" for="apellido">Apellido:</label>
                </div>

                <br>

                <div class=" center-align inpu-field ">
                    <button type="submit" name="submit" class=" orange accent-3 btn">Actualizar</button>
                    <button type="button" class="blue-grey  btn" onclick="location.href ='infoSub.php' ">Cancelar</button>
                </div>

                <br>

            </div>
        </form>

        <?php
			} //Cierre del ciclo
		?>

        <div class="col s2"></div>
    </div>
</div>   >     

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>