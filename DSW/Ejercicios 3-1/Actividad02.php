<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Instrucción Continue</title>
</head>
    <body>
    <h1>Instrucción Continue</h1>
    <?php
    	 
   	/*for($i=1; $i<=4; $i++){
   		
   		for($j=1; $j<=2; $j++ ){
   			
   			echo "El valor de i es: " . $i . " y el valor de J es: " . $j . "<br>";
   		}
   	}*/
    
    for($i=1; $i<=4; $i++){
    	 
    	for($j=1; $j<=4; $j++ ){
    		
    		if ($j ==3){   //se repite 4 veces pero cuando llega a 3 se para y rompe el bucle.
    			
    			continue 2;
    		}
    
    		echo "El valor de i es: " . $i . " y el valor de J es: " . $j . "<br>";
    	}
    }
		
	?>
    </body>
</html>