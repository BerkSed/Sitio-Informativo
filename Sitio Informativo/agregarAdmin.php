<?php
	session_start();
	include('privilegio.php');

	if(permitirAcceso($_SESSION['tipoUsuario'], 'inf_usuario')) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Suscríbete</title>

    <script type="text/javascript">
        function enableSending(){
            document.sub.submit.disabled = !document.sub.aceptar.checked;
        }

    </script>
</head>
<body>

<style>

    body{
        background-color: #B1F1BF;
    }

    .titulo{
        /*Color verde de título*/ 
        color: #20D749;
    }

</style>

<div class="section container ">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row ">
        <div class="col s2"></div>

        <form class="col s8" action="metAdmin.php" name="sub">

            <input type="hidden" name="opcion" value="7">

            <div class="row card panel z-depth-4 ">
                <br>
                <div>
                    <h3 class="center-align titulo">Agregar Administrador</h3>
                </div>

                <div class="input-field col s12">
                    <input type="email"  id="correo" name="correo" class="validate" required>
                    <label for="correo">Correo:</label>
                </div>

                <br>

                <div class=" center-align inpu-field ">
                    <button type="submit" name="submit" class="green accent-4 btn">Agregar Administrador</button>
                    <button type="button" class=" blue-grey btn" onclick="location.href ='infoSub.php' ">Cancelar</button>
                </div>

                <br>

            </div>
        </form>
        <div class="col s2"></div>
    </div>
</div>   >     

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>

<?php
	}

	else {
		header('Location: index.php');
	}
?>