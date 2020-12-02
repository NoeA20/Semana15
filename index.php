<?php
// conexión
require_once 'conexion.php';

// sesión
session_start();

// Botón enviar
if(isset($_POST['btn-enviar'])):
	$errores = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$pass = mysqli_escape_string($connect, $_POST['pass']);

	if(isset($_POST['recordar-pass'])):

		setcookie('login', $login, time()+3600);
		setcookie('pass', md5($pass), time()+3600);
	endif;

	if(empty($login) or empty($pass)):
	$errores[] = "<li> El campo Login/Contraseña debe ser llenado </li>";
	else:
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$pass = md5($pass);       
$sql = "SELECT * FROM usuarios WHERE login = '$login' AND pass = '$pass'";

		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$datos = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['conectado'] = true;
				$_SESSION['id_usuario'] = $datos['id'];
				header('Location: admin/home.php');
			else:
		$errores[] = "<li> Usuario y contraseña no coinciden </li>";
			endif;

		else:
			$errores[] = "<li> Usuario inexistente </li>";
		endif;

	endif;

endif;
?>

<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>

<h1> Login </h1>
<?php 
if(!empty($errores)):
	foreach($errores as $error):
		echo $error;
	endforeach;
endif;
?>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
Contraseña: <input type="password" name="pass" value="<?php echo isset($_COOKIE['pass']) ? $_COOKIE['pass'] : '' ?>"><br>

Recordar contraseña: <input type="checkbox" name="recordar-pass">
<button type="submit" name="btn-enviar"> Enviar </button>
</form>

</body>
</html>
