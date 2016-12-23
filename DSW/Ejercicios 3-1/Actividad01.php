<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>tabla 10x20</title>
</head>
    <body>
    <h1>Tabla 10x20</h1>
    <?php
    	
    	define("fila", 10);
    	$contador=1;
    	echo "<table border='1'>";
    	for ($i=0; $i<fila; $i++){
    			
			if($i%2==0)	{ // Si el resto al dividir por 2 es '0' (significa que es par) si es 1 es impar.
    			echo "<tr bgcolor=grey>";
			}
			else{
				echo "<tr>";	
			}
    		
    			for ($j=0; $j<20; $j++){
    				
    				echo "<td>" . $contador++ . "</td>";
    			}
    		
    		echo "</tr>";
    	}
    	echo "</table>";
		
	?>
    </body>
</html>