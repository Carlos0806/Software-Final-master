<?php

$host = "scrumizacion-db-instance.cokqf9b6iaca.us-east-1.rds.amazonaws.com";
$password = "scrumizacion";
$db_name = "RentaVehiculos";
$username = "root";

try{
	$conexion = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

catch(PDOException $exception){
	echo "Connection error: ". $exception->getMessage();
}

?>