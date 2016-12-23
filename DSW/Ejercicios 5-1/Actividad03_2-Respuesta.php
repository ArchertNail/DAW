<?php
@$host= $_POST['NomServer'];
@$user=$_POST['Usuario'];
@$pass=$_POST['Contrasenia'];

$conexion=mysql_connect($host,$user,$pass);

setcookie ("CookieBD", $_POST['NomBD'], time() + 30 *24 * 60);

$sql="CREATE database " .@$_POST['NomBD']; 
	
$insertar=mysql_query($sql,$conexion);

if(!$insertar){
	echo '<h2>Error de Conexion con la Base de Datos</h2><br/>';
}
else{
 	echo '<h2> Conexion Establecida con el servidor </h2>';
 	
 	/*$id_db=mysql_query("SHOW DATABASES"); //saca la id de cada base de datos, empieza en 0 
 	$num_db=mysql_num_rows($id_db); //cuenta el total de numeros de ID
 	
 	for ($i=0; $i<$num_db; $i++){
 		
 		echo mysql_db_name($id_db, $row),"<br>";  //Muesta el nombre de cada base de datos segun su Id
 	}*/
 	
 	echo '<h2> Base de datos: ' . $_POST['NomBD'] . "creada </h2>";
 	
 	
	mysql_select_db($_POST['NomBD'],$conexion); 
	$tabla="CREATE TABLE IF NOT EXISTS `Passwords2015` (
                  `id_usuario` int NOT NULL AUTO_INCREMENT,
                  `usuario` varchar(50) NOT NULL,
                  `password` varchar(15) NOT NULL,
                  PRIMARY KEY (`id_usuario`)
                )";
		
	$crear_tabla=mysql_query($tabla,$conexion); //creamos la tabla apartir de la conexion hecha en 'tal' usuario, verificamos si esta bien creada, y se crea.
	if(!$crear_tabla){
		echo '<h2>Error al crear la table en la base de datos</h2>';
	}else{
		echo '<h2> La tabla se creado con Exito </h2>';
		echo "<a href='Actividad03_3-RegistroDatos.php' name=''> Ingresa Usuario y Password </a>";
	}
}
?>