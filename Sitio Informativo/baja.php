<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Baja de Lista</title>
</head>
<body>

<style>

    body{
        background-color:#FCDED9 ;
    }

    .titulo{
        /*Color rojo de título*/ 
        color: #EC4D4D;
    }
</style>
    

<div class="section container ">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row ">
        <div class="col s2"></div>
        <form class="col s8" action="metSub.php" name="baja">

            <input type="hidden" name="opcion" value="2">

            <div class="row card panel z-depth-4 ">
                <br>
                <div>
                    <h3 class="center-align titulo">Baja de nuestra lista</h3>
                </div>

                <div class="input-field col s12">
                    <label for="ocupacion">Motivo</label>
                    <br>
                    <p>
                        <label>
                            <input name="motivo" id="motivo" type="radio" value="No solicite la inscripción" required/>
                            <span >No solicite la inscripción</span>
                        </label>
                        <br>
                        <label>
                            <input name="motivo" id="motivo"  type="radio" value="No me interesa la información" required/>
                            <span >No me interesa la información</span>
                        </label>
                    </p>
                </div>

                <div class="input-field col s12">
                    <input type="email" name="correo" id="correo" class="validate" required>
                    <label for="correo">Correo:</label>
                </div>

                <br>

                <div class=" center-align inpu-field ">
                    <button type="submit" name="submit" class=" red darken-2 btn">Dar de baja</button>
                    <button type="button" class="blue-grey  btn" onclick="location.href ='index.php' ">Cancelar</button>
                </div>

                <br>

            </div>
        </form>
        <div class="col s2"></div>
    </div>
</div>   >     

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>