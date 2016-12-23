<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Insert title here</title>
</head>
		
    <body>


<?php
    if (!empty($_POST['Sueldo']) && !empty($_POST['Nombre'])&& !empty($_POST['DNI'])) {  //Entra si Nceldas esta declarado
    	
    	$nombre = $_POST['Nombre'];
    	$DNI = $_POST['DNI'];
    	$sueldo = $_POST['Sueldo'];
    
    	if ($sueldo ==""){
    			
    	}
    	else if($sueldo>=2000){
    		
    		echo $nombre . " tiene un sueldo eficiente";
    	}
    	else if ($sueldo<2000){
    		
    		echo $nombre . " tiene un sueldo Ineficiente";
    	}
    	
    	
    }	
    
    if (empty($_POST['Nombre'])||empty($_POST['DNI']) ) {  //Entra si Nceldas esta declarado
    	 
    		echo "<h3> Falta ingresar algun dato </h3>";
    		echo "<h3> Los datos marcados (*) son obligatorios </h3>";
    		echo "<h3> Pulse el boton volver para volver al formularios </h3>";
    		
    		echo "<input value=volver type=button onclick=location='Actividad01.php'>";
    	} 	
   
	?>
	
	</body>
    
</html>
	