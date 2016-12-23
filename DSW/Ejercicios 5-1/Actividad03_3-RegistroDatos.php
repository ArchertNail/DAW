<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Actividad03</title>
</head>
<center>
		<h1>Crear Base de Datos y Tablas</h1>;
		
    	<form action="Actividad03_4-RegistroAnadido.php" method="post">
    		<table border="1">
    			<tr bgcolor="orange">
    				<td>Escribe Usuario:</td>
    				<td><input type=text name="usuario"><br></td>
    			</tr>
    			<tr bgcolor="orange">
    				<td>Elige un Password:</td>
    				<td><input type=password name="Contrasenia"><br></td>
    			</tr>
    			<tr bgcolor="orange">
    				<td>(El password tiene entre 7 y 15 caracteres<br>
    					Ademas debe incorporar al menos, una Mayuscula<br>
    					una minuscula y una cifra del 0 al 8)</td>
    				<td><input name='enviar' value="Enviar Registro" type="submit"></td>
    				<td><input  name='Borrar' value="Borrar" type="submit"><br>
    			</tr>
    		</table>
    	</form>
   </center>

    <?php

	?>
    </body>
</html>