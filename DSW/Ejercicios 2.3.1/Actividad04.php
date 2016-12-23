<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Operadores de omisión de errores</title>
</head>
    <body>
    
    <h1>Operadores de omisión de errores</h1>
    
    <?php
    	
    $num1 = 0;
    $num2 = 10;
   
    @$resultado = $num2/$num1;
    
    echo "Se ha producido un error: <strong>" . $php_errormsg . "</strong>";
	?>
	
    </body>
</html>