<?php
if(isset($_SESSION["inside"])){
?>
<!DOCTYPE html>
<html>
<?php include('html/head.html'); ?>

<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php include('html/menu.html'); ?>
<h5 align="center"><b>Lista de nuevos presupuestos</b></h5>
    <div class="w3-section w3-bottombar w3-padding-16">      
    </div>
  </header><!-- Fin Header -->
  <!-- Espacio de trabajo-->
  <div class="w3-responsive">
    <table class="w3-table-all w3-centered w3-hoverable">
      <tr class="w3-red">
        <th>Folio</th>
        <th>Nombre</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Razon</th>
        <th>Telefono</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
      <tr class="w3-hover-green">
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
      </tr>
      <tr class="w3-hover-green">
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
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