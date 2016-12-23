<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Formulario</title>
</head>
    <body>
    <h2>Arrays funcion Count o Sizeof</h2>
    
    
    <?php
		
    echo "<form name='formularioDatos' method='post' action=''>";
     
     for ($i=0; $i<3;$i++){
		echo "Introduce tipo Moneda$i: <input type='text' name='Moneda[]' value=''> <br>";
     }
     for ($i=0; $i<3;$i++){
     	echo "Introduce Tipo Cambio$i: <input type='text' name='Cambio[]' value=''> <br>";
     }
     
     echo "<input value='aceptar' type='submit' />";
	echo "</form>";
	
	if(isset($_POST['Moneda']) & isset($_POST['Moneda'])){
	
		$ArrayMoneda = $_POST['Moneda'];
		$ArrayCambio = $_POST['Cambio'];
		
		echo "<table border='1'>";
			
			echo "<tr bgcolor='grey'> <td> </td> <td>Moneda</td><td>Cambio</td></tr>";
		
			for ($i=0; $i<count($ArrayMoneda); $i++){
				
				echo "<tr>";
					echo "<td bgcolor='grey'> \$matrix[$i] </td>";
					echo "<td> $ArrayMoneda[$i] </td>";
					echo "<td> $ArrayCambio[$i] </td>";

     			echo "</tr>";
				
			}
			
		echo "</table>";
	}
	?>
    </body>
</html>