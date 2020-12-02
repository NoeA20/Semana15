<?php
require_once("conexion.php");

if(isset($_POST['submit']))
{
	if(empty($_POST['id']) || empty($_POST['nombre']) || empty($_POST['login']) || empty($_POST['pass']))
	{
		echo 'Por favor rellene los espacios en blanco';
	}
	else
	{
		$Xid = $_POST['id'];
		$Xnombre = $_POST['nombre'];
		$Xlogin = $_POST['login'];
		$Xpass = MD5($_POST['pass']);

		$query = "INSERT INTO usuarios (id,nombre,login,pass) VALUES ('$Xid','$Xnombre','$Xlogin','$Xpass')";

		$result = mysqli_query($connect,$query);

		if($result)
		{
			header("Location: home.php");
		}
		else
		{
			echo "Por favor revise su consulta";
		}
	}
}
else
{
	header("Location: home.php");
}