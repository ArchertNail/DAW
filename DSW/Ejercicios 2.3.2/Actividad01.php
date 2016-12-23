<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Comandos gettype y settype con isset y empty</title>
</head>
    <body>
    <center>
    <h1>Uso de gettype(), settype(), isset() y empty()</h1>
    
    <?php
    	$cadena="3.1416 es el valor de PI";
    	$PI = "3.1416 es el valor de PI";
    	
    	echo 'el valor de $cadena es: <strong>' . $cadena . "</strong> <br>";
    	echo "Es de tipo <strong>" . gettype($cadena) . "</strong> <br>";
    	
    	echo "<br>";
    	
    	settype($PI, "double"); 	
    	echo "El valor real con su decimal es: " . $PI . "<br>";
    	settype($PI, "integer");
    	echo "Si lo paso a entero obtengo: " . $PI . "<br>";
    	//settype($cadena, "string");
    	
    	echo empty($PI)? "No esta inicializada " . $PI: "Esta inicializada <br>"; //empty: si no hay valor en la variable. la mieerda de '?' es un IF, nunca mas lo hare asi.
    	echo $cadena . " y " . $PI . " su parte entera";
    	
    
	?>
	
	</center>
    </body>
</html>