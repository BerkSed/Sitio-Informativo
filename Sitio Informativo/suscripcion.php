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
        background-color: #D2EEF9 ;
    }

    .titulo{
        /*Color azul de título*/ 
        color: #0966C4;
    }

</style>

<div class="section container ">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row ">
        <div class="col s2"></div>

        <form class="col s8" action="metSub.php" name="sub">

            <input type="hidden" name="opcion" value="1">

            <div class="row card panel z-depth-4 ">
                <br>
                <div>
                    <h3 class="center-align titulo">Suscribete a nuestro boletín</h3>
                </div>

                <div class="input-field col s6">
                    <input type="text"  id="nombre" name="nombre" class="validate" required>
                    <label for="nombre">Nombre:</label>
                </div>

                <div class="input-field col s6">
                    <input type="text" name="apellido" id="apellido" class="validate" required>
                    <label for="apellido">Apellido:</label>
                </div>

                <div class="input-field col s12">
                    <input type="email" name="correo" id="correo" class="validate" required>
                    <label for="correo">Correo:</label>
                </div>

                <div class="center-align inpu-field ">
                    <label>
                        <input type="checkbox" name="aceptar" class="blue accent-3 filled-in" onclick="enableSending()">
                        <span>Acepto términos y condiciones</span>
                    </label>
                </div>

                <br>

                <div class=" center-align inpu-field ">
                    <button type="submit" name="submit" class=" blue darken-3 btn" disabled>Suscribirse</button>
                    <button type="button" class=" blue-grey btn" onclick="location.href ='index.php' ">Cancelar</button>
                </div>

                <br>

            </div>
        </form>
        <div class="col s2"></div>
    </div>
</div>   >     

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>