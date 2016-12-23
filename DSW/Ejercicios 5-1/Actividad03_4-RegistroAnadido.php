<?php

$usuario=$_POST['usuario'];
$contrasenia=$_POST['Contrasenia'];

if(strlen($contrasenia)>7 && strlen($contrasenia)<15 && preg_match('`[0-9]`', $_POST['Contrasenia'])){
	
	$link = mysql_connect("localhost","root","");
	mysql_select_db($_COOKIE['CookieBD'],$link);
	
	// Con esta sentencia SQL insertaremos los datos en la base de datos
	mysql_query("INSERT INTO Passwords2015 (usuario,password)
			VALUES ('{$_POST['usuario']}','{$_POST['Contrasenia']}')",$link);
	
	// Ahora comprobaremos que todo ha ido correctamente
	$my_error = mysql_error($link);
	
	if(!empty($my_error)) {
		
		echo "Ha habido un error al insertar los valores. $my_error";
	
	} else {
	
		echo "Los datos han sido introducidos satisfactoriamente";
		echo "<a href='Actividad03_3-RegistroDatos.php'> Volver a la paginade Registro </a>";
	}
	
	
	
	
	
	
	
	/*$conexion = mysql_connect("localhost" , "root" , "");
	
	mysql_select_db($_COOKIE['CookieBD'],$conexion);
	
	$datos="INSERT INTO Passwords2015 (id_usuario,usuario,password) VALUES('{$_POST['usuario']}','{$_POST['Contrasenia']}')";
	$consulta=mysql_query($datos,$conexion);
	if(!$consulta){
		echo 'Error al insertar los datos';
	}else{
		echo 'Los datos se insertaron correctamente <br>';
		echo "<a href='Actividad03_3-RegistroDatos.php'> Volver a la paginade Registro </a>";
	}*/
	
}
else{
	
	echo "<h2> PASSWORD NO VALIDO </h2>";
	echo "<a href='Actividad03_3-RegistroDatos.php'> Volver a la paginade Registro </a>";
}
?>