<?php
session_start();
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>
<html><head><title>Filmoeteca</title>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="page-container">
<form method="POST" action="">
<center>
	<h1>Crear Tema</h1>
	<input type="text" class="username" name="TemaNuevo" placeholder="Nuevo Tema"><br>
<button type="submit" style='width:120px; height:30px'>Crear</button>
</center>
</form>

<?php 

if(empty($_POST['TemaNuevo'])){
	
	echo "";
}
else{
	
	@$tema=$_GET['tema'];
	// Datos generales para la aplicaci�ｿｽn web:
	$servidor="localhost"; // "localhost"
	$usuario_bd="root"; // Usuario Administrador de MySQL
	$clave_bd=""; // Clave del Usuario Administrador de MySQL
	$basedatos="filmoteca";
	$tabla="temas";
	
	$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
	mysqli_select_db($conexion,$basedatos);
	@$tildes = $conexion->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
	
	mysqli_query($conexion, "INSERT INTO temas VALUES ('{$_POST['TemaNuevo']}', '{$_SESSION['usuario']}',null ,'2009-01-25 12:30:12')");
	echo "<center>";
	echo "<br><h1>El Tema se ha creado Correctamente</h1>";
	
	echo "<br><a href='titulos.php'><button> Ir a lista de Temas</button></a><br>\n";
	echo "<br><a href='index.php'><button> Cambiar Usuario</button></a><br>\n";
	echo "<center>";
}

?>
<a href='titulos.php'><button>Volver a Temas</button></a>

<script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</div>
</body>
</html>