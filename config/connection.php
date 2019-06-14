<?php

$user = "root";
$password = "root";
$db = "iosys";
$host = "localhost";

$connection = new mysqli($host, $user, $password, $db);

if($connection->connect_error){
	printf("¡Parece que los monos no encuentran la base de datos! \n %s \n ¡Llame al becario para que lo arregle! ",$connection->connect_error);
	exit();
}
function simpleQuery($sql){
	global $connection;
	$query = $connection->query($sql);
	return $query;
}
function showError(){
	global $connection;
	echo $connection->error;
}
?>