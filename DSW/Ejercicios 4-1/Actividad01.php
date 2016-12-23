 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulario</title>
<meta charset="utf-8">
</head>
<body>

	<form name="formularioDatos" method="post" action="">

		<p> Suma de Vectores </p>
		
		0<input type="text" name="Vect0" value=""><br>
		1<input type="text" name="Vect1" value=""><br>
		2<input type="text" name="Vect2" value=""><br>
		3<input type="text" name="Vect3" value=""><br>
		4<input type="text" name="Vect4" value=""><br>
		5<input type="text" name="Vect5" value=""><br>
		6<input type="text" name="Vect6" value=""><br>
		7<input type="text" name="Vect7" value=""><br>
		8<input type="text" name="Vect8" value=""> <br>


		<input value="Calcular" type="submit" />

	</form>
	
	
	 <?php 
		
 	if (isset($_POST['Vect0'])) { //Que es este if y porque sino lo pongo da fallo??
		$vectores=[$_POST['Vect0'],$_POST['Vect1'],$_POST['Vect2'],$_POST['Vect3'],$_POST['Vect4'],$_POST['Vect5'],$_POST['Vect6'],$_POST['Vect7'],$_POST['Vect8']];
		$numero=0;
		
		echo "El vector tiene " . count($vectores) . " elementos <br>";
		
		for ($i=0; $i<count($vectores);$i++){
			
			if (is_numeric($vectores[$i]) ){
				
				$numero +=$vectores[$i];
			}
			
			echo $i . "=" . $vectores[$i] . "<br>";
			
		}
		
		echo "El resultado de la suma es: " . $numero;
 	}
		
	?>

</body>

</html>