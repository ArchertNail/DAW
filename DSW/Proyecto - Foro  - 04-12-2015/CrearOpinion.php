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
	<h1>Crea tu Opinion:</h1>
	<input type="text" name="TituloNuevo" class="username" placeholder="NuevoTitulo"><br>
	<input type="text" name="DescripcionNueva" class="username" placeholder="Descripcion"> <br>
<button type="submit">Enviar</button>
</form>


<?php 

if(empty($_POST['TituloNuevo']) || empty($_POST['DescripcionNueva']) ){
	$tema=$_GET['tema'];
	echo "Por favor introduce un Tema y una Opinion <br>\n";
	echo "<br><a href='listado.php?tema=". $tema ."'> <button>Volver a Opiniones </button></a><br>\n";
	echo "<br><a href='titulos.php'><button> Escoger Nuevo Tema</button></a><br>\n";
}
else{
	
	$tema=$_GET['tema'];
	// Datos generales para la aplicaci�ｿｽn web:
	$servidor="localhost"; // "localhost"
	$usuario_bd="root"; // Usuario Administrador de MySQL
	$clave_bd=""; // Clave del Usuario Administrador de MySQL
	$basedatos="filmoteca";
	$tabla="opiniones";
	
	$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
	mysqli_select_db($conexion,$basedatos);
	$tildes = $conexion->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
	
	mysqli_query($conexion, "INSERT INTO opiniones VALUES (null, '{$_SESSION['usuario']}', '2009-01-25 12:30:12', '{$_POST['TituloNuevo']}', '{$_POST['DescripcionNueva']}', '$tema')");
	
	echo "<br><h1>Se ha introducido Correctamente tu Opinion</h1>";
	
	echo "<br><a href='listado.php?tema=". $tema ."'> <button>Volver a Opiniones</button></a><br>\n";
	echo "<br><a href='titulos.php'> <button> Escoger Nuevo Tema</button></a><br>\n";
}

?>
<script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</div>
</body>
</html>