<?php
session_start(); // Usaremos sesiones.

// Si todav�a no est�n establecidas las variables de sesi�n obligatorias...
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>
<html><head><title>FILMOTECA - Comprobaci&oacute;n de la identificaci&oacute;n del usuario</title>

<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="page-container">
<?php

echo "<h1>Opciones de Usuarios Registrados </h1>";
// Si se recibieron los campos del formulario de index.php...
if (isset($_POST['usuario']) && isset($_POST['clave'])) 
{ 
	// Si ambos campos del formulario est�n rellenos...
	if($_POST['usuario']!="" && $_POST['clave']!="") 
	{
		$servidor="localhost"; // "localhost"
		$usuario_bd="root"; // Usuario Administrador de MySQL
		$clave_bd=""; // Clave del Usuario Administrador de MySQL
		$basedatos="filmoteca";
		$tabla="usuarios"; // En esta tabla s�lo hay administradores y usuarios registrados.
		
		$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
		mysqli_query($conexion,"SET NAMES 'utf8'");
		if (! $conexion)
		{
			echo "ERROR: Imposible establecer conexi�n con el servidor $servidor.<br>\n";
		}
		else
		{
			$resultado=mysqli_select_db($conexion,$basedatos);
			if (! $resultado)
			{
				echo "ERROR: Imposible seleccionar la base de datos $basedatos.<br>\n";
			}
			else{
			 	$usuario=$_POST['usuario']; //$usuario=$_POST['']; cambiamos por $usuario=$_POST['usuario'], que recoge este nombre en el index
			 	$clave=$_POST['clave']; //$clave=$_POST['']; cambiamos por $clave=$_POST['clave'], que recoge este password en el index
			 	
				$sql = "SELECT * FROM $tabla WHERE usuario='$usuario' and clave='$clave';";
				
				$resultado = mysqli_query($conexion,$sql);
				if(!$resultado){ // Si no pudo realizarse la consulta
					echo "ERROR: Imposible ejecutar la consulta en la tabla $tabla.<br>\n";
				}
				else{
					$numeroregistros=mysqli_num_rows($resultado);
					if($numeroregistros>0){ // Si se encontr� al menos un usuario con esa clave.
						$fila=mysqli_fetch_array($resultado); // Obtenemos el registro (la fila) de la tabla con los datos del usuario.
						if(!$fila) // Si no pudo conseguirse la fila...
						{
							echo "ERROR: Imposible obtener el nombre del usuario<br>\n";
						}
						else
						{	// Establecemos las variables de sesi�n usuario y tipo al nombre y tipo del usuario encontrado.
							//comprovamos que existe en la base de datos, si existe le damos paso a listado.php, si no le devolvemos a la pagina de inicio
							$_SESSION['tipo']=$fila['tipo'];
							$_SESSION['usuario']=$fila['usuario'];
							echo "<br><a href='titulos.php'><button>Ir a Listado Temas</button></a><br>\n";
							
							if($_SESSION['tipo']=='administrador') // Si es administrador...
							{
								echo "<br><a href='CrearTema.php'><button>CrearTema</button></a><br>\n"; // Mostrar el enlace Eliminar.
							}
							
							echo "<br>Tipo del usuario: <b>" . $_SESSION['tipo'] . "</b><br>\n";
						}
					}
					else
					{
						echo "<br><h1>Usuario no encontrado</h1><br>\n";
						$enlace="crearusuarios.php";
						echo "<br><a href='$enlace'><button>Crear New Usuario</button></a>"; // Mostrar el enlace para crear Usuarios nuevos
					}
				}	
			}
			mysqli_close($conexion); 
		}
	} 
}

echo "<br><a href='borra.php'><button>Cerrar Sesion</button></a><br>\n";

echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";
?>
</div>
 <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
        
</body></html>
