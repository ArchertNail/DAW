<?php

@$host= "localhost";
@$user="root";
@$pass="";
	
$conexion=mysql_connect($host,$user,$pass) or die ("ERROR FATAL" . mysql_error());
mysql_select_db("agenda",$conexion);
/*if(!$insertar){
	echo '<h2>Error de Conexion con la Base de Datos</h2><br/>';
}
else{

	mysql_select_db("Agenda",$conexion); //seleccionamos la base de datos de 'tal' usuario y creamos una tabla que almacenara en una variable
	$tabla="CREATE TABLE IF NOT EXISTS" . $_POST['Tabla'] ." (
                  `id_contacto` int NOT NULL AUTO_INCREMENT,
                  `nombre` varchar(50) NOT NULL,
                  `direccion` varchar(100) NOT NULL,
                  `telefono` varchar(15) NOT NULL,
    			  `email` varchar(50) NOT NULL,
                  PRIMARY KEY (`id_contacto`)
                )";
}*/


?>