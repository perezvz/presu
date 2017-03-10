<?php
session_start( );
/*if(isset($_SESSION["inside"])){
    header("Location: chur/un.html");
  }
  else { */
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Presupuesto La Fuerza</title>
  <link rel='stylesheet prefetch' href='css/fonts.css'>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/validator.js"></script>
  <script type="text/javascript" src="js/npm.js"></script>
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">

      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">La Fuerza</label>
      <div class="login-form">
        <form name="access" method="POST" action="captcha/verify.php">
          <div class="sign-in-htm"><br>
            <div class="group">
              <label for="user" class="label">Usuario</label>
              <input id="user" type="text" class="input" name="user" required="" autofocus >
            </div>
            <div class="group"><br>
              <label for="pass" class="label">Contraseña</label>
              <input id="pass" type="password" class="input" data-type="password" name="pass" required="">
            </div>
            <!--<div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div> --
            <div class="group" align="center">
              <img src="captcha/captcha.php" border="2" /><br><br>
              <label for="code" class="label" align="left">Ingrese el Código</label>
              <input id="code" type="text" name="code" width="25" class="input" data-type="input" required="">

            </div>-->
            <div class="group"><br>
              <input type="submit" class="button" value="Ingresar" name="submit">
            </div>
          </div>
        </form>
        
        <div class="sign-up-htm">
          <div class="group">
            <p class="label">Servicio Hidráulico "La Fuerza"</p>
            <p class="label">Reparación de gatos, venta de bombas hidraulicas para volteos 15 y 27 gls.</p>
            <p class="label">fabricación de gatos, bombas de inyección para grasa y aceite, gruas hiab.</p>
            <p class="label">Prop. Genaro Gómez Jímenez</p>
          </div>
        </div>
      </div><br>
      <div class="hr"></div>
      <div class="foot-lnk">
        <p class="label">Servicio Hidraulico "La Fuerza"</p>
        <p class="label">Tel Oficina 2 68 08 04</p>
      </div>
    </div>

  </div>  
</body>
</html>
<?php //} ?>