<?php 
  include 'recaptchalib.php';
  // tu clave secreta
  $secret = "6Lea5xcUAAAAAKSo-6dgk-qZ2eyuezFRKm4iWJ-o";
  // respuesta vacía
  $response = null;
  // comprueba la clave secreta
  $reCaptcha = new ReCaptcha($secret);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Presupuesto La Fuerza</title>
  <link rel='stylesheet prefetch' href='css/fonts.css'>
  <link rel="stylesheet" href="css/style.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <div class="login-wrap">
    <div class="login-html">

      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">La Fuerza</label>
      <?php
        if ($response != null && $response->success) {
          echo "Hi " . $_POST["user"] . " (" . $_POST["pass"] . "), thanks for submitting the form!";
        } else {
      ?>
      <div class="login-form">
        <form name="peti" method="POST" action="index.php">
        <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
          <div class="sign-in-htm"><br>
            <div class="group">
              <label for="user" class="label">Usuario</label><br>
              <input id="user" type="text" class="input">
            </div>
            <div class="group"><br>
              <label for="pass" class="label">Contraseña</label><br>
              <input id="pass" type="password" class="input" data-type="password">
            </div>
            <!--<div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div> -->
            <div class="group">
              <div class="g-recaptcha" data-sitekey="6Lea5xcUAAAAAOZjDv8j47hM1k0W-fnyuisSJ22H"></div>
            </div>

            <div class="group"><br>
              <input type="submit" class="button" value="Ingresar">
            </div>
          </div>
        </form>
        <?php } ?>
        <div class="sign-up-htm">
          <div class="group">
            <p class="label">Servicio Hidráulico "La Fuerza"</p>
            <p class="label">Reparación de gatos, venta de bombas hidraulicas para volteos 15 y 27 gls.</p>
            <p class="label">fabricación de gatos, bombas de inyección para grasa y aceite, gruas hiab.</p>
            <p class="label">Prop. Genaro Gómez Jímenez</p>
          </div>
        </div>
      </div>
      <div class="hr"></div>
      <div class="foot-lnk">
        <p class="label">Servicio Hidraulico "La Fuerza"</p>
        <p class="label">Tel Oficina 2 68 08 04</p>
      </div>
    </div>

  </div>  
</body>
</html>
