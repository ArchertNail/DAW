<?php
session_start(); // Usaremos sesiones.

// Si todav�a no est�n establecidas las variables de sesi�n obligatorias...
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>

<html><head><title>FILMOTECA - Eliminaci&oacute;n de una opini&oacute;n</title>

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="page-container">
<?php
// Si es un administrador...
if($_SESSION['tipo']=="administrador")
{
	// Si se recibi� el campo "id" por el m�todo GET desde el enlace en foro.php...
	if (isset($_GET['id']))
	{ 
		// Datos generales para la aplicaci�n web:
		$servidor="localhost"; // "localhost"
		$usuario_bd="root"; // Usuario Administrador de MySQL
		$clave_bd=""; // Clave del Usuario Administrador de MySQL
		$basedatos="filmoteca";
		$tabla2="opiniones";
		
		// Por comodidad...
		$id=$_GET['id'];
		
		// Instrucci�n SQL que inserta un nuevo registro en la tabla.
		$sql = "DELETE FROM $tabla2 WHERE id=$id;"; // Como el campo id es num�rico, no necesita comillas simples en la cl�usula WHERE.
	
		// Inicialmente intentaremos conectar con el servidor MySQL instalado en el servidor web.
		$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
		mysqli_query($conexion,"SET NAMES 'utf8'");
		if (! $conexion){
			echo "ERROR: Imposible establecer conexi�n con el servidor $servidor.<br>\n";
		}else{
		 	// Como pudo conectarse con el servidor, intentaremos seleccionar la base de datos, para poder operar sobre ella.
			$resultado=mysqli_select_db($conexion,$basedatos);
			if (! $resultado){
				echo "ERROR: Imposible seleccionar la base de datos $basedatos.<br>\n";
			}else{
				// Como pudo seleccionarse la base de datos, entonces intentaremos realizar una operaci�n en una de sus tablas.
				$resultado = mysqli_query($conexion,$sql);
				// Si no pudo realizarse la operaci�n...
				if(!$resultado){
				 	echo "ERROR: No pudo realizarse la operaci�n sobre la tabla $tabla2.<br>\n";
				}
				else{
				 	$numero_registros_afectados=mysqli_affected_rows($conexion);
				 	echo "<h1>CORRECTO: Eliminación correcta de $numero_registros_afectados registros en la tabla $tabla2.</h1><br>\n";
				}
			}
			// Antes de terminar, debe cerrarse la conexi�n con el servidor (pues sigue abierta)).
			mysqli_close($conexion);
		}

	} // if (isset($_GET['id']))
	else
	{
		echo "ERROR: Necesita cargar esta p�gina desde el listado de opiniones.<br>\n";
	}
} // if($_SESSION['tipo']=="administrador")
else
{
	echo "ERROR: Acceso restringido. Únicamente los administradores pueden acceder a esta página.<br>\n";
}

// Enlace para navegar por las p�ginas...
echo "<br><a href='titulos.php'><button>Ir al listado de Temas</button></a><br>\n";
echo "<br><a href='index.php'><button>Cambiar de usuario</button></a><br>\n";

// En el pie de cada p�gina informaremos del usuario y su tipo:
echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";

	// Si se recibi� el campo "id" por el m�todo GET desde el enlace en foro.php...

?>

<script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</div>
</body>
</html>

