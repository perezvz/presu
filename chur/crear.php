<?php
session_start( );
if(isset($_SESSION["inside"])){
?>
<!DOCTYPE html>
<html>
<?php include('html/head.html'); ?>

<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php include('html/menu.html'); ?>
<h5 align="center"><b>Crear nuevos presupuestos</b></h5><br>
<div class="w3-row-padding">
    <div class="w3-half">
    <form class="w2-container" name="cliente">
      <label>Nombre y/o Razon Social</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="razon" placeholder="Nombre y/o Razon Social" autofocus style="text-transform:capitalize">
    </div>
    <div class="w3-half">
      <label>RFC (XAXX010101000)</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="rfc" placeholder="RFC " maxlength="13" onblur="ValidaRfc(this.value)" style="text-transform:uppercase;" required>
    </div>
    <div class="w3-half">
      <label>Telefono</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="telefono" placeholder="Telefono " maxlength="10" onkeyUp="return ValNumero(this);">
    </div>
    <div class="w3-half">
      <label>Direccion</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="direccion" placeholder="Direccion" style="text-transform:capitalize">
    </div>
    <div class="w3-half">
      <label>Fecha (Mes/Dia/Año)</label>
      <input class="w3-input w3-border w3-round-large" type="date" name="fecha" placeholder="Fecha">
    </div>
    <div class="w3-half"><br>
      <button type="reset" class="w3-button w3-red w3-round-xlarge" >Limpiar</button>
      <button type="submit" class="w3-button w3-green w3-round-xlarge ">Cargar</button>
    </div>
    </form>
</div>

<!--Delete-->


<div class="w3-row-padding">
    <div class="w3-half">
    <form class="w2-container" name="concepto">
      <label>Cantidad (entre 1 - 99)</label>
      <input class="w3-input w3-border w3-round-large" type="number" min="1" max="99" name="cantidad" placeholder="0" autofocus>
    </div>
    <div class="w3-half">
      <label>Unidad Medida</label>
      <select class="w3-select w3-border w3-round-large" name="unidad">
        <option value="" disabled selected>Elija su opción</option>
        <optgroup>
          <option>Pieza</option>
          <option>Cabeza</option>
          <option>Litro</option>
          <option>Par</option>
          <option>Tonelada</option>
          <option>Juego</option>
          <option>Decena</option>
          <option>Docena</option>
          <option>Caja</option>
          <option>Botella</option>
        </optgroup>
        <optgroup>
          <option>Kilo</option>
          <option>Gramo</option>
          <option>Metro Lineal</option>
          <option>Metro Cuadrado</option>
          <option>Metro Cubico</option>
          <option>Kilowatt</option>
        </optgroup>
      </select>
    </div>
    <div class="w3-half">
      <label>Concepto</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="concepto" placeholder="Concepto" style="text-transform:capitalize">
    </div>
    <div class="w3-half">
      <label>Precio Unitario</label>
      <input class="w3-input w3-border w3-round-large" type="text" name="unitario" placeholder="Precio Unitario">
    </div>
    <div class="w3-half"><br>
      <button type="reset" class="w3-button w3-red w3-round-xlarge ">Limpiar</button>
      <button type="submit" class="w3-button w3-green w3-round-xlarge ">Cargar</button>
    </div>
    </form>
</div>

    <div class="w3-section w3-bottombar w3-padding-16">      
    </div>
  </header><!-- Fin Header -->
  <!-- Espacio de trabajo-->
  <div class="w3-responsive ">
    <table class="w3-table-all w3-centered w3-hoverable">
      <tr class="w3-red">
        <th>Cantidad</th>
        <th>U/Medida</th>
        <th>Concepto</th>
        <th>P/Unitario</th>
        <th>Importe</th>
      </tr>
      <tr class="w3-hover-green">
        <td>2</td>
        <td>pzas</td>
        <td>Smsdsdfsdfs ds ds fsdfsdfs  sdfs dfsd fsf sfd sfdsdf sfith</td>
        <td>249</td>
        <td>577.68</td>
      </tr>
      <tr class="w3-hover-green">
        <td>Jill</td>
        <td>Smith</td>
        <td>5sdfs dsdfsdf sdf sdfsfdsd fsdfs 0</td>
      </tr>
      <tr class="w3-hover-green">
        <td>Jill</td>
        <td>Smith</td>
        <td>5sdfs dsdfsdf sdf sdfsfdsd fsdfs 0</td>
      </tr>
      <tr class="w3-hover-green">
        <td></td>
        <td></td>
        <td></td>
        <td class="w3-red">Total</td>
        <td></td>
      </tr>
      </table>
  </div>
  <br>
  
  

<?php include('html/footer.html'); ?>
</body>
</html>
<?php }
else { 
  header("Location: ./error/403.html");
}?>