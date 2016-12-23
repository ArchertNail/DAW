<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Conversor-Moneda</title>
</head>
    <body>
    
    <h1>Operadores aritméticos</h1>
      <p> El valor de la constante 'euro' es: <strong>166.368pts.</strong>
    <?php
		
    	$moneda = 1000;
    	$cambioeur = 1000*166.368;
    	$cambiopst = 1000/166.368;
    	
    	$euros = 157; 
    	$billetes =50; 
    	
    	$contador=0;
    	
    	while ($billetes<$euros){
    		
    		$billetes = $billetes + 50;
    		$contador++;
    	}
    	
    	$monedas = $euros - ($billetes /($contador +1)* $contador);
    	
    	echo "<p>" . $moneda . "€". " son " . $cambioeur . "pst" . "</p>";
    	echo "<p>" . $moneda . "pst". " son " . round( $cambiopst,2) . "€" . "</p>";
    	
    	echo "<p>" . $euros . "€" . " son " . $contador . " billetes de 50€" . " con " . $monedas . "€" . "</p>";
    	

   
    	
     	
	?>
	
    </body>
</html>