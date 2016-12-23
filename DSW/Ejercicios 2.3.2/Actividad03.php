<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Conversión de variables</title>
</head>
    <body>
    <center>
    <h1> Conversión de variables</h1>
    
    <?php
    	$cadena="747E6";
    	
    	echo 'El de la $cadena es: <strong> ' . $cadena . "</strong> <br>";
    	
    	echo "El resultado de convertirla en entero es: " . intval($cadena) . "<br>";
    	echo "El resultado de convertirla en entero octal: " . intval($cadena,"8") . "<br>"; 
    	echo "El resultado de convertirla en entero hexadecimal: " . intval($cadena,"16") . "<br>";
    	echo "El resultado de convertirla en doble es: " . doubleval($cadena) . "<br>";
    	echo "El resultado de convertirla en cadena es " . strval($cadena) . "<br>";
	?>
	
	</center>
    </body>
</html>