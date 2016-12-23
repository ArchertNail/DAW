<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Incrementos-Decrementos</title>
</head>
    <body>
    
    <h1>Incrementos-Decrementos</h1>
    
    <?php
		
    $a=7;
    $b = 7;
    
    echo '<p>' . 'El valor de $a es: ' . $a . '</p>';
    echo '<p>' . 'Al preincrementar(++$a) devuelve: ' . ++$a . '</p>';
    echo '<p>' . 'Al postincrementar($a++) devuelve: ' . $a++ . '</p>';
    echo '<p>' . 'El valor final de $a es: ' . $a . '</p>';
    
    echo '<br>';
    
    echo '<p>' . 'El valor de $b es: ' . $b . '</p>';
    echo '<p>' . 'Al predecremento(--$b) devuelve: ' . --$b . '</p>';
    echo '<p>' . 'Al postdecremento($b--) devuelve: ' . $b-- . '</p>';
    echo '<p>' . 'El valor final de $b es: ' . $b . '</p>';
    
	?>
	
    </body>
</html>