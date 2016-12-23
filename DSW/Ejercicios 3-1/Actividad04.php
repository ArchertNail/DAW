<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Bucles For,Foreach y While</title>
</head>
    <body>
    <h1>Bucles For,Foreach y While</h1>
    <?php
  
    
  
    	echo "<h1> Bucle For </h1>"; 
    		for($j=0; $j<10; $j++){
    				
    			echo "El vector con indice " . $j . " tiene el valor: " . rand() . "<br>";
    			}
    		
    	echo "<h1> Bucle FOREACH </h1>";
    		
    	$numeros = array("0","1","2","3","4","5","6","7","8","9");
    	
    	foreach ($numeros as $valor){
    		
    		echo "El vector con indice " . $valor . " tiene el valor: " . rand() . "<br>";
    	}
    		
    		
    	echo "<h1> Bucle While </h1>";
    	
    	$contador=0;
    	while ($contador<10){
    		
    		echo "El vector con indice " . $contador . " tiene el valor: " . rand() . "<br>";
    		$contador++;
    	}
    		
 
		
	?>
    </body>
</html>