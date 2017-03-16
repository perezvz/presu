<?php
session_start( );
if(isset($_SESSION["inside"])){
  header("Location: listar.php");
}
else { 
  header("Location: ./error/403.html");
}?>