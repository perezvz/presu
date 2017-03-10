<?php
session_start( ); // allows us to retrieve our key form the session
$user = strtolower($_POST["user"]);
$pass = $_POST["pass"];
	if($user=="lola" && $pass=="mass"){
		$_SESSION['inside'] = md5( $user );
		header("refresh:0; url=../chur/un.html");		
	}
	else{
		echo "<script type='text/javascript'>
	alert('Error en Usuario y/o Contraseña');
	window.location='../index.php';
	</script>";
	}


?>