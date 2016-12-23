<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>MySQL</title>
<style type="text/css">

table{
text-align:center;
}

</style>

</head>

    <body>
    	<center>
    	<form action="" method="post">
    		<table border="1" cellspacing="0" cellpadding="5">
    			<tr>
    				<td bgcolor="#FE9A2E" >Introduce el nombre de la tabla:</td>
    			</tr>
    			<tr>
    				<td bgcolor="#FE9A2E"><input type=text name="Tabla"><br></td>
    			</tr>
    			<tr>
    				<td bgcolor="#FE9A2E">Ingrese aqui la estructura de la tabla:<br>
    				(Nota: No incluir los paréntesis en el inicio del cierre)</td>
    			</tr>
    			<tr>
    				<td bgcolor="#A9D0F5"> 
    					<textarea name='DatosCampos' rows="4" cols="50">			
    					</textarea> <br>
    				</td>
    			</tr>
    			<tr>
    				<td bgcolor="#A9D0F5"><input name='enviar' value="Crear Base Datos" type="submit">
						<input  name='Borrar' value="Borrar" type="submit"><br><br>
    					<a href="">Restaurar Formulario</a></td>
    			</tr>
    		</table>
    	</form>
    	</center>

	  <?php 
		if (isset($_REQUEST['enviar'])){
			include ("Actividad02-Conexion.php");
				
			$tabla="CREATE TABLE IF NOT EXISTS ".$_POST['Tabla']. "( " . $_POST['DatosCampos'] . " )";
			
			$crear_tabla=mysql_query($tabla,$conexion);
			if(!$crear_tabla){
				echo '<h2>Error al crear la table en la base de datos</h2>';
			}else{
				echo '<h2> La tabla se ha creado correctamente </h2>';
			}
		}
	?>
    </body>

</html>