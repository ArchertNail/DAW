<?php
$contrasenia=$_POST['Contrasenia'];

if(strlen($contrasenia)>7 && strlen($contrasenia)<15 && preg_match('`[0-9]`', $_POST['Contrasenia'])){
	
	@$usuario=$_POST["nombre"];
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("indetificate2015",$conexion);
	
	@$valores=mysql_query("SELECT * FROM passwords2015 WHERE usuario='$usuario'"); //Almacena 'mas o menos' el valor de la consulta
	
	if (mysql_num_rows ($valores) > 0){//numero de filas de la consulta, si la consulta se cumple tendremos como minimo una fila!
		echo "<h2>Mensaje de Aceptacion</h2>";
		echo "Se han encontrado " . mysql_num_rows ($valores) . " registro en la tabla:<br />";
		while ($row = mysql_fetch_array ($valores)){
			echo "Bienvenido " . $row["usuario"] . ".Login Correcto";
			echo "<a href='Actividad01-Formulario.php'> Salir</a>";
		}
	}
	else{
		echo "PASSWORD VALIDA <br>";
		echo "Usuario no registrado.Volver a la pagina e ingresar de nuevo<br>";
		echo "<a href='Actividad01-Formulario.php'> Volver a la pagina de Inicio </a>";
	}
}
else{
	
	echo "PASSWORD INCORRECTA!!<br>";
	echo "<a href='Actividad01-Formulario.php'> Volver a la pagina de Inicio </a>";
}



?>
