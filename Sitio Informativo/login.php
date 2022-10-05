<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
  
    <div class="container">
        <div class="row">
       <main>
        <center>
         <div class="container">
            
            <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">  
                <p align="center">
                <br>
                <img src="img/login.png" width="90%" style="filter: brightness(1.1); mix-blend-mode: multiply;">
            </p>
            <form action="validar.php" method="post">
                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='validate' type="email" id="usuario" name="usuario" placeholder="ejemplo@hotmail.com" required />
                    <label for='email'>Usuario</label>
                  </div>
                </div>
                <div class='row'>
                  <div class='input-field col m12'>
                    <input class='validate' type='password' id="clave" name="clave" placeholder="**********" maxlength="10" required/>
                    <label for='password'>Password</label>
                  </div>
                </div>
                <br/>
                
                  <div class='row'>
                    <button style="margin-left:75px;"  type='submit' name='enviar' class='col  s6 btn btn-small light-blue white-text  waves-effect z-depth-1 y-depth-1'>Entrar</button>
                  </div>
            </form>
                <center>
                  <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
                  <br><br>
                  <a href="index.php">Inicio</a>
                  <br><br>
                </center>
         
            </div>
           </div>
          </center>
          </main>
    
        </div>
    </div>
</body>
</html>