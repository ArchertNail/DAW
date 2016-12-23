<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Trabajando con Constantes</title>
</head>
    <body>
    
    <h1>Trabajando con Constantes</h1>
    
    <?php
    	
    define ("euro", 166.386); //las constantes tienen un mismo valor y no cambian como hacen las variables.
    
    echo "El valor de la constante 'euro' es: <strong>" . euro . "</strong>" . "<br>";
    echo "Luego 1€ son <strong>" . euro . "ptas" . "</strong>" . "<br>"; 
    
    echo "<br>";
    
    echo "La constante 'centimo': " . (defined("centimo")? "esta definida " . centimo:"no esta definida") . "<br>"; //Si la variable estubiese defina saldria "esta definida" y su valor.
    define("centimo", 1.66);
    echo "El valor de la constante 'centimo' es: <strong>" . centimo . "</strong>";
    
    
    
    /*
    function cuentaatras(){
    	 
    	static $a=10;
    	echo $a . "<br>";
    	$a--;
    }
    cuentaatras(); cuentaatras(); cuentaatras();*/
	?> 
    
    
	
    </body>
</html>