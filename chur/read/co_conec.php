<?php
session_start();
/*
* Clase dedicada a la conexion 
*		a la Base Datos
*/
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
?>
