<?php
include ("./co_logueo.php");
	
	if(isset($_POST["open"])){
		$xx = new Logueo();
		$user	= $_POST["user"];
		$pass		= $_POST["pass"];
		//$pass		= sha1($_POST["pass"]);
		$xx->yisus($user,$pass);
	}
?> 