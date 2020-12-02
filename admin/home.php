<?php
// Conexion
require_once 'conexion.php';

// Sesión
session_start();

// Verificación
if(!isset($_SESSION['conectado'])):
	header('Location: ../index.php');
endif;

//Datos
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";

$resultado = mysqli_query($connect,$sql);
$datos = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Página Restringida</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>¡Hola! <?php echo $datos['nombre']; ?> </h1>
	<div align="center">
		<a href="formulario.php">Añadir Nuevos Usuarios</a><br>
		<a href="lectura.php">Visualizar los Usuarios</a><br>
		<a href="salir.php"> Salir </a><br>
	</div>
	
</body>
</html>

