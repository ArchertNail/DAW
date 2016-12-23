<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Conversión de tipos por casting de las variables</title>
</head>
    <body>
    <center>
    <h1> Conversión de tipos por <em>casting de las variables</em></h1>
    
    <?php
    	
    $cadena="3.1416 es el valor de PI";
     
    $doble = $cadena * 2;
    
    echo "El resultado de calcular el doble es: " . $doble . "<br>";
    echo "El resultado de quitar la parte entera es : " . round($doble) . "<br>"; 
   	if(empty($doble)){
   		
   		echo "No esta inicializada <br>";
   	}
   	else{
   	
   		echo "Esta inicializada <br>";
   	}
    
   	echo $doble . " es el doble del valor de PI";
   	
	?>
	
	</center>
    </body>
</html>