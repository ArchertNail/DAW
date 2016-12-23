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

        <!-- CSS -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<div class="page-container">
<?php

		$servidor="localhost"; // "localhost"
		$usuario_bd="root"; // Usuario Administrador de MySQL
		$clave_bd=""; // Clave del Usuario Administrador de MySQL
		$basedatos="filmoteca";
		$tabla="temas"; // En esta tabla s�lo hay administradores y usuarios registrados.
		
		$conexion = new mysqli($servidor,$usuario_bd,$clave_bd);
		$conexion->select_db($basedatos);
		echo "<center>";
		echo "<h1> TEMAS PELICULAS</h1>";
		$consulta1=$conexion->query("SELECT tema FROM temas");
		
		if( $row = $consulta1->fetch_array(MYSQLI_ASSOC)){ 
			if($_SESSION['tipo']=='administrador') // Si es administrador...
			{
				echo "<table border = '1'> \n";
				
				do {
					echo "<tr><td><a href='listado.php?tema=" . $row["tema"] . "'><button>".$row["tema"]."</button></a></td>
							  <td><a href='EliminarTema.php?tema=" . $row["tema"] . "'><button> Eliminar </button> </a>
						  </tr> \n";
				}while ($row = $consulta1->fetch_array(MYSQLI_ASSOC));
				echo "</table> \n";
				
			}
			else{
				echo "<table border = '1'> \n"; 
			   		
			   		do { 
			      		echo "<tr><td><a href='listado.php?tema=" . $row["tema"] . "'><button>".$row["tema"]."</button></a></td></tr> \n"; 
			   		}while ($row = $consulta1->fetch_array(MYSQLI_ASSOC)); 
		   		echo "</table> \n";
			}
		} 
		else{ 
			echo "¡ No se ha encontrado ningún registro !"; 
		}
		
		echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";
		
		echo "<br><br><a href='borra.php'><button>Cerrar Sesion</button></a><br>\n";
		
		if($_SESSION['tipo']=='administrador') // Si es administrador...
		{
			// En el enlace enviamos el id por el m�ｿｽtodo GET a la p�ｿｽgina eliminar.php.
			echo "<br><a href='CrearTema.php'><button>CrearTema</button></a>"; // Mostrar el enlace Eliminar.
		}
		
		echo "</center>";

?>
</div>
 <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>

</html>
