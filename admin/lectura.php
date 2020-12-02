<?php
session_start();

if(!isset($_SESSION['conectado'])):
	header('Location: ../index.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Visualiar Usuarios</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1><div align="center">Lectura de la Tabla Usuarios</div></h1>
	<?php
	require_once("conexion.php");

	$result=mysqli_query($connect,"SELECT * FROM usuarios");
	?>

	<table align="center">
		<tr>
			<th>ID</th>
			<th>Login</th>
			<th>Nombre</th>
			<th>Contraseña</th>
		</tr>

		<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo '<td>'.$row["id"].'</td>';
			echo '<td>'.$row["login"].'</td>';
			echo '<td>'.$row["nombre"].'</td>';
			echo '<td>'.$row["pass"].'</td>';
			echo '</tr>';
		}
		mysqli_free_result($result);

		?>
	</table>
	<div align="center">
		<a href="formulario.php">Añadir un Nuevo Usuario</a><br>
		<a href="salir.php">Salir</a>
</html>