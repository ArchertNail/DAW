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
<title>FILMOTECA - Inicio de Sesi&oacute;n</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

        <!-- CSS -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="page-container">
<h1>Login</h1>
<form method="POST" action="datos_index.php">
  <input type="text" class="username" placeholder="Username" name="usuario"><br>
  <input type="password" class="password" placeholder="Password" name="clave"><br>
  <button type="submit">Entrar</button>
</form>
</div>
<?php
// En el pie de cada p�ｿｽgina informaremos del usuario y su tipo:
echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";

$enlace="crearusuarios.php";
echo "<br><a href='$enlace'><button>Crear Usuario</button></a>"; // Mostrar el enlace para crear Usuarios nuevos
?>

 <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

</body></html>