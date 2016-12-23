<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>MySQL</title>
</head>

    <body>
    	<center>
		<h1>Crear Base de Datos y Tablas</h1>
		
		<?php 
		if (isset($_REQUEST['enviar'])) //si se pulsa el boton X hace tal.
		{
			
			@$host= $_POST['NomServer'];
			@$user=$_POST['Usuario'];
			@$pass=$_POST['Contrasenia'];
			
			$conexion=mysql_connect($host,$user,$pass); //Comparamos los datos de usuarios registrados con MySQL con los parametros que le pasamos.
			
			$sql="CREATE database " .@$_POST['NomBD']; //almacenamos en una variable la base de datos que queramos crear/buscar/ediar...
			
			$insertar=mysql_query($sql,$conexion);//En la variable SQL creamos una  base de datos, y en la variable Conexion, conectamos con Mysql con 'tal' usuario, osea, que si los datos de conexion son correctos se creara una base de datos en el usuario TAL
			
			if(!$insertar){
				echo '<h2>Error de Conexion con la Base de Datos</h2><br/>';
			}
			else{
				
				mysql_select_db($_POST['NomBD'],$conexion); //seleccionamos la base de datos de 'tal' usuario y creamos una tabla que almacenara en una variable
				$tabla="CREATE TABLE IF NOT EXISTS `Contactos` (
                  `id_contacto` int NOT NULL AUTO_INCREMENT,
                  `nombre` varchar(50) NOT NULL,
                  `direccion` varchar(100) NOT NULL,
                  `telefono` varchar(15) NOT NULL,
    			  `email` varchar(50) NOT NULL,
                  PRIMARY KEY (`id_contacto`)
                )";
				 
				$crear_tabla=mysql_query($tabla,$conexion); //creamos la tabla apartir de la conexion hecha en 'tal' usuario, verificamos si esta bien creada, y se crea.
				if(!$crear_tabla){
					echo '<h2>Error al crear la table en la base de datos</h2>';
				}else{
					echo '<h2> La Base de Datos y tabla se crearon correctamente </h2>';
				}
			}
		}
		else if(isset($_REQUEST['Borrar'])){
			
		}
		
		else {
			
			echo "<h2>Para crear la base de datos introducir datos. Gracias</h2>";
		}
		?>
		
		
    	<form action="" method="post">
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
    	

 
   
    	
    <!--  
     $datos="INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`,             `clave`) VALUES(1, 'administrador', 'admin@hotmail.com', 'admin')";
            $consulta=mysql_query($datos,$conexion);
            if(!$consulta){
                echo 'Error al insertar los datos';
                }else{
                    echo 'Los datos se insertaron correctamente';
                    }

                     }
     -->
    
    
  
    </body>

</html>