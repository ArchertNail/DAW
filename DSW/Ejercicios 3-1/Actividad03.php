<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Instrucción Continue</title>
</head>
    <body>
    <h1>Instrucción Continue</h1>
    <?php
    	 
   	
    
   	echo "<table BORDER='1'>";
   	 	
   	/*for ($i=1; $i<=4; $i++){
   	
   		echo "<tr>";
   		
   		$numero=$i;
   		
   			for($j=1; $j<5; $j++){
   						
   				echo "<td>" . $numero  . "<td>";
   				
   				$numero=($numero*$i);//haz de guardar la operacion cada vez que quieras imprimir
   			}
   			
   			
   		echo "</tr>";
   	}*/
   	
   	for ($i =1; $i<=4; $i++){
   			
   		echo "<tr>";
   		
   			for ($j=1; $j <=4; $j++){
   				
   				echo "<td>" . (pow($i,$j) . "</td>");
   			}
   		
   		echo "</tr>";
   	}
   	
   	echo "</table>";
		
	?>
    </body>
</html>