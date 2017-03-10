<?php
session_start( ); // allows us to retrieve our key form the session
$user = strtolower($_POST["user"]);
$pass = $_POST["pass"];
/* First encrypt the key passed by the form, then compare it to the already encrypted key we have stored inside our session variable */
if( md5( $_POST[ 'code' ] ) != $_SESSION[ 'key' ] ) {
	echo "<script type='text/javascript'>
	alert('Error en el Captcha');
	window.location='../index.php';
	</script>";

} 
else {
	
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
}

?>