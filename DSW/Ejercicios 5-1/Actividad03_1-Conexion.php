<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>MySQL</title>
</head>

    <body>
    	<center>
		<h1>Crear Base de Datos y Tablas</h1>;
		
    	<form action="Actividad03_2-Respuesta.php" method="post">
    		<table border="1">
    			<tr>
    				<td>Escribe el Nombre de la Base de Datos:</td>
    				<td><input type=text name="NomBD"><br></td>
    			</tr>
    			<tr>
    				<td>Escribe el Nombre de tu Usuario:</td>
    				<td><input type=text name="Usuario"><br></td>
    			</tr>
    			<tr>
    				<td>Elige un Password:</td>
    				<td><input type=password name="Contrasenia"><br></td>
    			</tr>
    			<tr>
    				<td>Nombre del Servidor:</td>
    				<td><input type=text name="NomServer"><br></td>
    			</tr>
    			<tr>
    				<td>Elegir nombres cortos: <br> (No escoger caracteres como 'y'|'o')</td>
    				<td><input name='enviar' value="Crear Base Datos" type="submit"></td>
    				<td><input  name='Borrar' value="Borrar" type="submit"><br>
    					<a href="">Restaurar Formulario</a></td>
    			</tr>
    		</table>
    	</form>
    	</center>
  
    </body>

</html>