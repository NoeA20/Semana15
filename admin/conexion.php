<?php
// Conexión con base de datos
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "colegio20";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Error de conexión: ".mysqli_connect_error();
endif;
?>
