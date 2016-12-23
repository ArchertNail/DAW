 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulario</title>
<meta charset="utf-8">
</head>
<body>

	<form name="formularioDatos" method="post" action="">

		<p> Funcion Count_Chars y strlen </p>
		
		<input type="text" name="cadena" value="">


		<input value="aceptar" type="submit" />

	</form>
	
	
	 <?php 
		
 	if (isset($_POST['cadena'])) { //Que es este if y porque sino lo pongo da fallo??
		$cadena=utf8_decode(($_POST['cadena']));
		
		echo "Cadena: <strong>" . utf8_encode($cadena) . "</strong> <br>";
		
		echo "<table border='2'>";
		foreach (count_chars($cadena,1) as $i => $val) {
			echo "<tr>";
				echo "<td> caracter: " . utf8_encode(chr($i)) . " Frecuencia: " .  $val . "</td> <br>";
			echo "</tr>";
		}
		
		echo "</table>";
 	}
		
	?>

</body>

</html>
