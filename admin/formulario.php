<?php
session_start();

if(!isset($_SESSION['conectado'])):
	header('Location: ../index.php');
endif;
?>

<div align="center">
	<div>
		<h3>Formulario de Registro de Usuarios</h3>
	</div>
	<div>
		<form action="insert.php" method="POST">

			<input type="text" name="id" placeholder="ID">
			<input type="text" name="nombre" placeholder="NOMBRE">
			<input type="text" name="login" placeholder="LOGIN">
			<input type="password" name="pass" placeholder="PASSWORD">
			<button name="submit">ENVIAR</button>

		</form>
	</div>
</div>