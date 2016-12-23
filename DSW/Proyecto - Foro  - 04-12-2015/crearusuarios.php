<?php 
session_start(); // Usaremos sesiones.

// Si todav�ｿｽa no est�ｿｽn establecidas las variables de sesi�ｿｽn obligatorias...
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>

<html>
<head>
<title>FILMOTECA - creacion de titulos</title>
<meta charset="utf-8">
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php

// Datos generales para la aplicaci�ｿｽn web:
$servidor="localhost"; // "localhost"
$usuario_bd="root"; // Usuario Administrador de MySQL
$clave_bd=""; // Clave del Usuario Administrador de MySQL
$basedatos="filmoteca";
$tabla="usuarios";

$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
if (! $conexion)
{
	echo "ERROR: Imposible establecer conexiﾃｳn con el servidor $servidor.<br>\n";
}
else
{
	$resultado=mysqli_select_db($conexion,$basedatos);
	if (! $resultado)
	{
		echo "ERROR: Imposible seleccionar la base de datos $basedatos.<br>\n";
	}
			
		if(empty($_POST['usuario']) || empty($_POST['password']) )
		{		
				echo "";	
		}
		else 
			{
				@$usuario=$_POST['usuario'];
				@$password=$_POST['password'];
				$tipo="registrado";
				
				$sql = $conexion-> query("INSERT INTO usuarios (usuario, clave, tipo) VALUES ('$usuario','$password', '$tipo')");
				echo "<h1>Felicidades, ya puede entrar al foro</h1>";				
			}
		
		mysqli_close($conexion); // Debe cerrarse la conexi�ｿｽn, que todav�ｿｽa sigue abierta.
	}

?>
	<!--  creamos un nuevo usuario-->
		<div class="page-container">
		<form method="POST" action="crearusuarios.php">
		<h1><strong>Creacion de Usuarios</h1></strong>
		<input type="text" class="username" placeholder="NewUsername" name="usuario" value=""><br>
		<input type="password" class="password" placeholder="NewPassword" name="password"><br>
		<button type="submit">Entrar</button>
		<button type="reset">Borrar Informacion</button>
			</center>
			</form>
		<a href='index.php'><button>Volver</button></a>
		
		</div>
		
 <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>