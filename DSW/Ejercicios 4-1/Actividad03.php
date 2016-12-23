 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Formulario</title>
<meta charset="utf-8">
</head>
<body>

	<form name="formularioDatos" method="post" action="">

		<h2> Sentencia While-else y condicionales If</h2>
		
		<input type="text" name="Desfactorizar" value="">


		<input value="Aceptar" type="submit" />

	</form>
	
	
	 <?php 
		
 	if (isset($_POST['Desfactorizar'])) { 
		
 		$numero=($_POST['Desfactorizar']);
		$numerobase=$numero;
		
		$primos = [];
		
		for ($i = 1; $i <= $numero; $i++)
		{
			$nDiv = 0; // Número de divisores
			for ($n = 1; $n <= $i; $n++) // Desde 1 hasta el valor que tenga $i
			{
				if($i%$n == 0) // $n es un divisor de $i
				{
					$nDiv = $nDiv + 1; // Agregamos un divisor mas.
				}
			}
			if($nDiv == 2 or $i == 1)// Si tiene 2 divisores ó es 1 --> Es primo
			{
		
				$primos[] = $i;
			}
		}
		
		//$cociente = [2,3,5,7,11,13,17,19,23];
		
		$cadena =" ";
		
		for ($i=1; $i<count($primos); $i++){
		
			$contador=0;
		
			if ($numero%$primos[$i] ==0){ 
		
				while ($numero%$primos[$i]==0){
					$numero = $numero/$primos[$i];
					$contador++;
		
				}
				$cadena .= $primos[$i] . '<sup>'.$contador.'</sup>' .", ";  //la sentencia $cade += no funciona en php
			}
			 
		}
		
		
		echo $numerobase ." = " . $cadena;
 	}
 	
		
	?>

</body>

</html>
