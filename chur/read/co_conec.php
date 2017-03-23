<?php
session_start();
/*
* Clase dedicada a la conexion 
*		a la Base Datos
*/
/*
class Plug{
	public static function con(){
		$conexion=mysql_connect("localhost","u221350385_mar1k","_K2E4oS4o");
		if(!($conexion)){
			echo"Error al conectar a la base de datos";
			exit();
		}
			if(!@mysql_select_db("u221350385_zeus",$conexion)){
				echo "Error al seleccionar la base de datos";
				exit();
			}
			mysql_query("SET NAMES 'utf8'");
			return $conexion;
	}
}
*/
 class Plug {
 private $servidor = "localhost";
 private $usuario = "u221350385_mar1k";
 private $contrasena = "_K2E4oS4o";
 private $based = "u221350385_zeus";
 private $conn;

 public function conectar(){
	 $this->conn = new mysqli(
	 $this->servidor,
	 $this->usuario,
	 $this->contrasena,
	 $this->based
	 );

  if ($this->conn->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error;
  }

  echo $this->conn->host_info . "\n";

  }

  public function desconectar(){

   self::conectar();

   $this->conn->close();

  }

}
$ejemplo = new Conexion();
$ejemplo->conectar();
?>