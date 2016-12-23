<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Operadores Lógicos</title>
</head>
    <body>
    
    <h1>Operadores Lógicos</h1>
    
    <?php
    	
    	$num1 = 3;
    	$num2 = 7;
    	$num3 = 9;
    	
    	echo "<p>" . "Los tres numeros a comparar son: <strong>" . $num1 . ", " . $num2 . ", " . $num3 . "</strong> </p>";
    	
    	if ($num1 > $num2 && $num1 > $num3){
    		
    		echo "<p>" . "El número más grande es: <strong>" . $num1 . "</strong> </p>";
    	}
    	
    	else if($num2 > $num1 && $num2 > $num3){
    		
    		echo "<p>" . "El número más grande es: <strong>" . $num2 . "</strong> </p>;";
    	}
    	
    	else{
    	
    		echo "<p>" . "El número más grande es: <strong>" . $num3 . "</strong> </p>";
    	}
	?>
	
    </body>
</html>