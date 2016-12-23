<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Instrucción Continue</title>
</head>
    <body>
    <h1>Instrucción Continue</h1>
    <?php
    	 
   /*	for($i=0, $j=1 , $k=1; $i<=4; $i++, $j++){
   		
   		echo "El valor de i es: " . $i . " y el valor de J es: " . $j . " y el valor de k es: " . $k . "<br>";
   	}*/
    
   for($i=0, $j=1; $i<=4; $i++, $j++){
   	
   		for ($k=0; $k<1; $k++){
   			
   			if ( $k ==1){
   				 
   				continue 1;
   			}
   			
   		}
   	
   	echo "El valor de i es: " . $i . " y el valor de J es: " . $j . " y el valor de k es: " . $k . "<br>";
   	
   }
   		
   		
    
		
	?>
    </body>
</html>