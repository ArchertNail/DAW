<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Tablas con Arrays unidimensionales sencillas</title>
</head>
    <body>
    <center>
    <h1> Tablas con Arrays unidimensionales sencillas</h1>
    
    <table border="1" CELLSPACING="2">
    <?php
    	//$fila1 = array("","Modelo","Marca","Fecha", "CC", "Motor","Potencia","Combustible");
    	
    	$fila1[0]="";
    	$fila1[1]="Modelo";
    	$fila1[2]="Marca";
    	$fila1[3]="Fecha";
    	$fila1[4]="CC";
    	$fila1[5]="Motor";
    	$fila1[6]="Potencia";
    	$fila1[7]="Combustible";
    	
    	$fila2 = array("Matriz1","Guilieta","Alfa Romeo","", "1598", "4 cilindros en línea con correa dentada con empujadores hindraulicos -4v","182","Diésel");
    	$fila3 = array("Matriz2","A5 2.0","Audi","", "1984", "4cilindros en linea, inyeccion directo TFSI -16V","211","Gasolina");
    	
    	echo "<tr>";
    	for($i=0; $i < 8; $i++){
    		
    		echo "<td>" . $fila1[$i] . "</td>";
    	}
		echo "</tr>";
		
		echo "<tr>";
		for($i=0; $i < 8; $i++){
    		
    		echo "<td>" . $fila2[$i] . "</td>";
    	}
		echo "</tr>";
		echo "<tr>";
		for($i=0; $i < 8; $i++){
    		
    		echo "<td>" . $fila3[$i] . "</td>";
    	}
		echo "</tr>";
	?>
	
	</table>
	
	</center>
    </body>
</html>