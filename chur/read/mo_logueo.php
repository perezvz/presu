<?php
include ("./co_logueo.php");
	
	if(isset($_POST["open"])){
		$login = new Logueo();
		$user = strtoupper($_POST["user"]);
		$pass = strtoupper($_POST["pass"]);
		//$pass	= sha1($_POST["pass"]);
		$login->yisus($user,$pass);
		//echo $user." ".$pass;
	}
?> 