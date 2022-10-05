<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<title>Actualizar Suscriptor</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">

				<?php
					include('inc/mensaje.php');
					include('inc/conexion.php');
					$correo = $_REQUEST['correo'];

					$sql = "SELECT * FROM `suscripcion`, suscriptor WHERE suscriptor.correo = suscripcion.suscriptor_correo AND suscriptor.correo = '$correo'";

					$consulta = $conexion -> query($sql);

					if($fila = mysqli_fetch_array($consulta)) {
				?>

				<h1 align="center">Actualizar usuario</h1>

				<form action="metodosUsuario.php" name="agregar" method="post">

					<input type="hidden" name="opcion" value="3">
					<input type="hidden" name="correo" value="<?php echo $fila[10] ?>">

					<div class="form-group">
						<label for="nombre" class="form-label">Nombre</label>
					    <input type="text" class="form-control" id="nom" name="nom" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+" value="<?php echo $fila[1] ?>">
					</div>

					<div class="form-group">
						<label for="apaterno" class="form-label">Apellidos</label>
					    <input type="text" class="form-control" id="apaterno" name="apaterno" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+" value="<?php echo $fila[2] ?>">
					</div>

					<div class="form-group">
						<label for="tel" class="form-label">Correo</label>
					    <input type="text" class="form-control" id="tel" name="tel" maxlength="10" pattern="[0-9]+" value="<?php echo $fila[10] ?>">
					</div>

					<div class="form-group">
						<label for="tel" class="form-label">Fecha de suscripcion</label>
					    <input type="text" class="form-control" id="tel" name="tel" maxlength="10" pattern="[0-9]+" value="<?php echo $fila[3] ?>">
					</div>


					<p align="center">
						<br>
						<input class="btn btn-primary" type="submit" name="enviar" value="Actualizar usuario">

						<button class="btn btn-danger" onclick="location.href='informacionSuscriptor.php'">Cancelar</button>
					</p>

				</form>
			</div>
            <?php
				} //Cierre del ciclo
			?>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>