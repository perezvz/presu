<!DOCTYPE html>
<html>
<?php include('html/head.html'); ?>

<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php include('html/menu.html'); ?>
<h5 align="center"><b>Crear nuevos presupuestos</b></h5><br>
<div class="w3-row-padding">
    <div class="w3-half">
    <form class="w2-container">
      <label>Nombre(s)</label>
      <input class="w3-input w3-border w3-round" type="text" name="nombre" placeholder="Nombre">
    </div>
    <div class="w3-half">
      <label>Apellido Paterno</label>
      <input class="w3-input w3-border w3-round" type="text" name="paterno" placeholder="Apellido Paterno">
    </div>
    <div class="w3-half">
      <label>Apellido Materno</label>
      <input class="w3-input w3-border w3-round" type="text" name="materno" placeholder="Apellido Materno">
    </div>
    <div class="w3-half">
      <label>Razon Social</label>
      <input class="w3-input w3-border w3-round" type="text" name="razon" placeholder="Razon Social">
    </div>
    <div class="w3-half">
      <label>Telefono</label>
      <input class="w3-input w3-border w3-round" type="text" placeholder="Telefono ">
    </div>
    <div class="w3-half">
      <label>Direccion</label>
      <input class="w3-input w3-border w3-round" type="text" name="direccion" placeholder="Direccion">
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
