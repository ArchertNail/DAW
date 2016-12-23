<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Insert title here</title>
	
	
</head>


<center>
<h2> Suma de Vectores Variables </h2>
	<form name="formularioDatos" method="get" action="">
		<input type="text" name="Nceldas" value="">
		<input value="aceptar" type="submit" />
		
	<p> Pon cuantos elementos quieres llenar <p>
	</form>
	
	<?php
	
	
		if (isset($_GET['Nceldas'])) {  //Entra si Nceldas esta declarado 
			
			$celdas = $_GET['Nceldas'];
		
			echo "<form name='formulario2datos' method='get' action=''>";
			
	         	for ($i=1; $i<=$celdas;$i++){
	         		
	         		echo $i . "<input type='text' name='vectores[]'> <br>";
	         		
	         	}
	         	
	            echo "<input value='calcular' type='submit'/>"; //cada vez que le demos a un submit la pagina se recarga
	            
	       echo "</form>";
		}
		
		if (isset($_GET['vectores'])){ //entra cuando 'vectores' este declarada
				
			$vectori=$_GET['vectores'];
			$suma=0;
				
			echo "El vector tiene: " .count($vectori). "elementos <br>";
			
			for($i=0; $i<count($vectori);$i++){
				
				echo $i . " = " . $vectori[$i] . "<br>";
				$suma += $vectori[$i];
			}
			
			echo "La suma es: " . $suma ;
		}
		
		
		
		/*if (isset($_GET['Nceldas'])) {
			$contador=1;
			for ($i=0; $i<count($vectores); $i++){
		
				$vectores[$i]=$_GET[$contador];
				echo $contador . " = " . $vectores[$i] . "<br>";
				$contador++;
					
			}
		}*/
		//echo "El vector tiene: " . count($vectores) . " Elementos";
		
		 //Si recibimos un valor se realizara lo sigiente:
		
				
		/*	
		$a=$_GET["1"];
		$b=$_GET["2"];
		$c=$_GET["3"];
		
		
		echo "1 = " . $a . "<br>";
		echo "2 = " . $b . "<br>";
		echo "3 = " . $c . "<br>";
		
		$suma= $a + $b + $c;
		
		echo  $suma
		*/
		
		
		?>
		
		
	
</html>