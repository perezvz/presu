<?php
include("./co_conec.php");
/**
* Clase dedicada al logueo de usuarios
*		===LOGUEOS + SESSIONES===
*/
class Logueo { 
/*Logueos Usuarios*/
function yisus($user,$pass){
	$sql=" SELECT * FROM gnr_pink WHERE qu13n='$user' and k0m0='$pass' ";
	$res=mysql_query($sql,Plug::con());	
	//mysql_num_rows($res);
	$reg=mysql_fetch_array($res);
	$vas=$reg["nivl"];
	$key=md5( microtime( ) * mktime( ) + $vas );
	$salt = substr( $key, 0, 10 );
	echo $key." - ".$salt." - ";
	if ($vas=="1") {
		$_SESSION["inside"] =$reg['qu13n'].$salt;
		//$_SESSION["n"] =$reg["nivl"];
		//header("Location: ../listar.php");
		echo $_SESSION["inside"];
	}
	/*
	if ($vas=="2") {
		$_SESSION["ser_comun"] =$reg["user"];
		$_SESSION["n"] =$reg["nivel"];
		header("Location: ../registro.php");
	}
	elseif ($vas=="1") {
		$_SESSION["ser_admin"] =$reg["user"];
		$_SESSION["n"] =$reg["nivel"];
		header("Location: ../registro.php");
	}
	elseif(($user=='UserMaster')AND($pw=='fc19318dd13128ce14344d066510a982269c241b')){
	        $_SESSION['ser_god']="Super Administrador";
	        $_SESSION["n"] ="0";
	        header("Location: ../registro.php");
    	}
	elseif (mysql_num_rows($res)==0){
				echo "<script type='text/javascript'>
				alert('Datos son Incorretos');
				window.location='../index.php';
				</script>";
	}
	*/

}

}/*Llave cierra la clase Logueo*/

?>