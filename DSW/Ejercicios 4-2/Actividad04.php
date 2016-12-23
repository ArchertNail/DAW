<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Insert title here</title>
</head>

    <body>
    

    	<form action="" method="post">
	        <h3>Formulario de peticion de Datos</h3>
	        Nombre: <input type=text name="Nombre"><br>
	        Contrasenia: <input type=text name="contrasenia"><br>
	        <input  value="Enviar" type="submit">
    	</form>
    	
    <?php
    session_start();
    $_SESSION["UsuarioCorrecto"] = "Killian";
    $_SESSION["ContraseniaCorrecta"] = "1234";
    if (!isset($_SESSION['contador'])){ //Si no esta incializada
    	
    	$_SESSION['contador'] =0;
    }
    
    if(!empty($_POST['Nombre'])&& !empty($_POST['contrasenia'])){
	
    	$Nombre= $_POST['Nombre'];
    	$Contrasenia= $_POST['contrasenia'];
    	
    	if ($_SESSION["UsuarioCorrecto"]==$Nombre && $_SESSION["ContraseniaCorrecta"] ==$Contrasenia){
    		
    		if(isset($_SESSION['contador'])){ //si esta incializada
    			
    			$_SESSION['contador']++;
    		}
    		
    		echo "<table border='1'>";
    			echo "<tr>";
    				echo "<td colspan='2'><strong>Informacion de sesion </strong> </td>";
    			echo "</tr>";
    			echo "<tr>";
    				echo "<td> ID </td>";
    				echo "<td>". session_id() ."</td>";
    			echo "</tr>";
    			echo "<tr>";
    				echo "<td> Numero de accesos </td>";
    				echo "<td>". $_SESSION['contador'] ."</td>";
    			echo "</tr>";
    			echo "<tr>";
	    			echo "<td> Nombre Actual </td>";
	    			echo "<td>". $_SESSION['UsuarioCorrecto'] ."</td>";
    			echo "</tr>";
    			echo "<tr>";
    				echo "<td> Nombre Anterior </td>";
    				echo "<td>". $_SESSION['NombreFallido'] ."</td>";
    			echo "</tr>";
    		echo "</table> <br>";
    		echo "<a href='Actividad04.php'> Actualizar </a><br>";
    	}
    	else{
    		$_SESSION['NombreFallido'] = $_POST['Nombre'];
    		echo "FALLO AUTENTIFICACION";
    		
    	}
    	
    }
	?>
    </body>

</html>