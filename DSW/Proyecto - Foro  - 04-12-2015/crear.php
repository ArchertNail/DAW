<?php
header("Content-Type: text/html;charset=utf-8");
// Archivo php para el "administrador" para crear la base de datos necesaria
// y las tablas, con los campos requeridos.

// Datos generales para la aplicación web:
$servidor="127.0.0.1:8889"; // "localhost"
$usuario_bd="8user8"; // Usuario Administrador de MySQL
$clave_bd="6pass9"; // Clave del Usuario Administrador de MySQL
$basedatos="filmoteca";
$tabla1="usuarios";
$tabla2="opiniones";

$sql_crearbasedatos = "CREATE DATABASE $basedatos CHARACTER SET utf8 COLLATE utf8_spanish_ci";

$sql_creartabla1 = "CREATE TABLE $tabla1(";
$sql_creartabla1.= "usuario CHAR(15) PRIMARY KEY NOT NULL, clave CHAR(15) NOT NULL, tipo CHAR(15) NOT NULL);";

$sql_insertarregistros1 = "INSERT INTO $tabla1 VALUES ";

$sql_insertarregistros1.= "('felipe','feli','registrado'),";
$sql_insertarregistros1.= "('ana','anita','registrado'),";
$sql_insertarregistros1.= "('juan','admin','administrador');";

$sql_creartabla2 = "CREATE TABLE $tabla2(";
$sql_creartabla2.= "id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, usuario CHAR(15) NOT NULL, ";
$sql_creartabla2.= "fechahora DATETIME NOT NULL, nombre CHAR(50) NOT NULL, opinion TEXT NOT NULL);";

$sql_insertarregistros2 = "INSERT INTO $tabla2 VALUES ";
$sql_insertarregistros2.= "(null,'felipe','2009-01-25 12:30:12','Watchmen','Buenos efectos especiales.\nPero nada más...'),";
$sql_insertarregistros2.= "(null,'ana','2009-02-10 14:10:00','Gran Torino','Es Magnífica.\nLo mejor que he visto de Clint Eastwood.');";

// Inicialmente intentaremos conectar con el servidor MySQL instalado en el servidor web.
$conexion=mysqli_connect($servidor,$usuario_bd,$clave_bd);
mysqli_query($conexion,"SET NAMES 'utf8'");
if (! $conexion){
	echo "ERROR: Imposible establecer conexión con el servidor (puede que esté desactivado o que no se encuentre en el servidor $servidor).<br>\n";
}
else{
 	// Como pudo conectarse con el servidor, intentaremos crear la base de datos, y después la seleccionaremos para poder trabajar sobre ella.
 	echo "Conexión realizada con el servidor.<br>\n";
	
	// CREAR LA BASE DE DATOS:
	$resultado=mysqli_query($conexion,$sql_crearbasedatos);
	if (! $resultado) {
		echo "ERROR: Imposible crear base de datos $basedatos (puede que ya exista o que no se tenga permiso para crearla).<br>\n";
	}
	else{ 
	 	echo "Base de datos $basedatos creada.<br>\n"; 
	}
	
	// SELECCIONAR LA BASE DE DATOS:
	$resultado=mysqli_select_db($conexion,$basedatos); 
	if (! $resultado){
		echo "ERROR: Imposible seleccionar la base de datos $basedatos (puede que no exista o que no se tenga permiso para usarla).<br>\n";
	}
	else{
	 	// Como pudo seleccionarse la base de datos, entonces intentaremos crear las tablas dentro, junto con registros iniciales para pruebas.
	 	echo "Base de datos $basedatos seleccionada.<br>\n";
		// CREAR TABLA 1:
		$resultado=mysqli_query($conexion,$sql_creartabla1);
		if (! $resultado) {
			echo "ERROR: Imposible crear la tabla $tabla1 (puede que ya exista o que no se tenga permiso para crearla).<br>\n";
		}
		else
		{
			echo "Tabla $tabla1 creada.<br>\n";
		}
		// INSERTAR REGISTROS EN TABLA 1:
		$resultado=mysqli_query($conexion,$sql_insertarregistros1);
		if (! $resultado) {
			echo "ERROR: Imposible insertar registros iniciales en tabla $tabla1 (puede que ya existan esos registros o que no se tengan los permisos).<br>\n";
		}
		else
		{
			echo "Registros iniciales insertados satisfactoriamente en la Tabla $tabla1.<br>\n";
		}
		
		// CREAR TABLA 2:
		$resultado=mysqli_query($conexion,$sql_creartabla2);
		if (! $resultado) {
			echo "ERROR: Imposible crear la tabla $tabla2 (puede que ya exista o que no se tenga permiso para crearla).<br>\n";
		}
		else
		{
			echo "Tabla $tabla2 creada.<br>\n";
		}
		// INSERTAR REGISTROS EN TABLA 2:
		$resultado=mysqli_query($conexion,$sql_insertarregistros2);
		if (! $resultado) {
			echo "ERROR: Imposible insertar registros iniciales en tabla $tabla2 (puede que ya existan esos registros o que no se tengan los permisos).<br>\n";
		}
		else
		{
			echo "Registros iniciales insertados satisfactoriamente en la Tabla $tabla2.<br>\n";
		}
					
	}
	// Antes de terminar, debe cerrarse la conexión con el servidor (pues sigue abierta)).
	echo "Cerrando la conexión con el servidor...<br>\n";
	mysqli_close($conexion);
}

echo "Fin del programa.<br>\n";
?>
