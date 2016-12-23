<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Actividad03</title>
</head>
		<h1>Crear Base de Datos y Tablas</h1>
		
    	<form action="Actividad01_2-Respuesta.php" method="post">
    		Nombre de Usuario:<input type='text' name='nombre'><br>
    		Contraseña:<input type='password' name='Contrasenia'><br>
    		<input name='enviar' value="Inicio Sesion" type="submit"><br>
    		El password a de tener entre 7 y 15 caracteres y una cifra del 0 al 9
    	</form>
    <?php
    	echo "<center>";
    		echo "<h1>Trabajando con Cookies</h1>";
    		echo "<h2>Contador de accesos</h2>";
    		
    		if(isset($_COOKIE['contador'])){
    			
    			setcookie("contador",$_COOKIE['contador']+1,time() + 3600 * 24 * 30);
    			echo "Has accedido a la página <strong>".$_COOKIE['contador']."</strong> veces.<br>";
    			echo "<a href=''>Actualizar</a><br>";
    			echo "<a href='borrar.php'>Borrar</a>";
    		}
    		else{
    			echo "Es la primera vez que accede a la página<br>";
    			echo "<a href=''>Actualizar</a>";
    			setcookie("contador",1, time() + 3600 * 24 * 30);
    		}
    	
    	echo "</center>";
	?>
    </body>
</html>