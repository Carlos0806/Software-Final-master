<?php

	include_once ("lib/usuario.php");

	session_start();
	
	if(isset($_SESSION["s_user"])){	
		echo "Activo";
	}
	else{

		echo "Inactivo";
	}

?>