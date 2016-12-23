<?php 
session_start(); // Usaremos sesiones.

// Si todav�ｿｽa no est�ｿｽn establecidas las variables de sesi�ｿｽn obligatorias...
if (!isset($_SESSION['usuario']) && !isset($_SESSION['tipo']))
{
	$_SESSION['usuario']="an&oacute;nimo";
	$_SESSION['tipo']="invitado"; // En principio todos son usuarios invitados.
}
?>

<html><head><title>FILMOTECA - Listado de opiniones sobre pel&iacuteculas</title>

        <!-- CSS -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
<div class="page-container">
<?php


$tema=$_GET['tema'];
// Datos generales para la aplicaci�ｿｽn web:
$servidor="localhost"; // "localhost"
$usuario_bd="root"; // Usuario Administrador de MySQL
$clave_bd=""; // Clave del Usuario Administrador de MySQL
$basedatos="filmoteca";
$tabla="opiniones";

/*$conexion = new mysqli($servidor,$usuario_bd,$clave_bd);
$conexion->select_db($basedatos);

echo "<center>";
echo "<h2> Opiniones </h2>";

$consulta1=$conexion->query("SELECT * FROM $tabla where tema='$tema'");

if( $row = $consulta1->fetch_array(MYSQLI_ASSOC)){
	 
	echo "<table border = '1'> \n";
	echo "<tr><td>ID</td><td>USUARIO</td><td>FECHA</td><td>NOMBRE</td><td>OPINION</td><td>TEMA</td></tr> \n";
	do {
		echo "<tr><td>".$row["id"]."</td>
				  <td>".$row["usuario"]."</td>
		          <td>".$row["fechahora"]."</td>
				  <td>".$row["nombre"]."</td>
		          <td>".$row["opinion"]."</td>
				  <td>".$row["tema"]."</td>
		     </tr> \n";
	}while ($row = $consulta1->fetch_array(MYSQLI_ASSOC));
	echo "</table> \n";
}
else{
	echo "¡ No se ha encontrado ningún registro !";
}*/

$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
if (! $conexion){
	echo "ERROR: Imposible establecer conexiﾃｳn con el servidor $servidor.<br>\n";
}
else{
	$resultado=mysqli_select_db($conexion,$basedatos);
	if (! $resultado){
		echo "ERROR: Imposible seleccionar la base de datos $basedatos.<br>\n";
	}
	else{
		$sql = "SELECT * FROM $tabla where tema='$tema';";
		//echo "<br>$sql<br>";
		
		$resultado = mysqli_query($conexion,$sql);
		if(!$resultado){
			echo "ERROR: Imposible consultar los datos en la tabla $tabla.<br>\n";
		}
		else{
		 	$numeroregistros=mysqli_num_rows($resultado);
			if($numeroregistros>0)
			{
			 	echo "<h1>OPINIONES DE: '$tema' <br><br></h1>\n";
				// Mostraremos los datos: Si no hubiese registros ni siquiera entrar�ｿｽa en el bucle while.
				while($fila=mysqli_fetch_array($resultado))
				{
						
					echo "<hr>\n";
					echo "<b>Id: </b>" . $fila['id'];
					
					// Si es administrador o usuario registrado...
					if($_SESSION['tipo']=='administrador' || $_SESSION['tipo']=='registrado')
					{
						echo " <b>Usuario: </b>" . $fila['usuario']; // Mostrar el autor de la opini�ｿｽn.
					}
					
					echo " <b>Fecha y Hora: </b>" . $fila['fechahora'] . 
						" <b>Titulo: </b>" . $fila['nombre'] .
						"<br><br>\n<b>Opinion:</b><br>\n" . nl2br($fila['opinion']);
	
					$id=$fila['id'];
					if($_SESSION['tipo']=='administrador') // Si es administrador...
					{
					 	// En el enlace enviamos el id por el m�ｿｽtodo GET a la p�ｿｽgina eliminar.php.
						$enlace="eliminar.php?id=$id";
					 	echo "<br><a href='$enlace'><button style='width:60px; height:30px'>Eliminar</button></a>"; // Mostrar el enlace Eliminar.
					}
					echo "<hr>\n";
				}
			}
			else
			{
				echo "No se encontraron opiniones para mostrar.<br>\n";
			}
		}
	}
	echo "<br><a href='borra.php'><button>Salir de la sesion</button></a><br>\n";
	mysqli_close($conexion); // Debe cerrarse la conexi�ｿｽn, que todav�ｿｽa sigue abierta.
}		

echo "<br><a href='titulos.php'><button>Escoger un Otro Tema</button></a><br>\n";

// Enlace para Crear Opinion
echo "<br><a href='CrearOpinion.php?tema=". $tema ."'><button> Crear Opinion</button></a><br>\n";

// En el pie de cada p�ｿｽgina informaremos del usuario y su tipo:
echo "<br>Bienvenido: <b>" . $_SESSION['usuario'] . "</b> - Tipo de usuario: <b>" . $_SESSION['tipo'] . "</b>";
?>
</div>
<script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body></html>
