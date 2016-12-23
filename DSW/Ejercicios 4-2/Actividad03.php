<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MS932">
<title>Insert title here</title>
</head>

    <body>
    
    <center>
    	<form action="" method="post">
	        <h3>Funciones de Usuario</h3>
	        Introduce Precio0: <input type=text name="precio1"><br>
	        Introduce Precio1: <input type=text name="precio2"><br>
	        Introduce Precio2: <input type=text name="precio3"><br>
	        <input  value="Enviar" type="submit">
    	</form>
    	
    <?php

    if(empty($_POST['precio1'])){
    	
    	echo "<table border='2'>";
    		echo "<tr bgcolor='grey'>";
    			echo "<td> Euro </td>";
    			echo "<td> Dolar </td>";
    			echo "<td> Libras </td>";
    			echo "<td> Yenes </td>";
    		echo "</tr>";
    		echo "<tr>";
    			echo "<td> </td>";
    			echo "<td> 0.00 </td>";
    			echo "<td> 0.00 </td>";
    			echo "<td> 0.00 </td>";
    		echo "</tr>";
    		
    	echo "</table>";
    	
    }
    
    if(isset($_POST['precio1'])){
    	
    	$precio1 = $_POST['precio1'];
    	$precio2 = $_POST['precio2'];
    	$precio3 = $_POST['precio3'];
    		
    	

    		$dolares1 = $precio1 * 1.29710;
    		$libres1 = $precio1 * 0.807292;
    		$yenes1 = $precio1 * 106.518;
    		
    		$valores1=[$precio1,$dolares1,$libres1,$yenes1];
    	
    	
    	
    	
    		$dolares2 = $precio2 * 1.29710;
    		$libres2 = $precio2 * 0.807292;
    		$yenes2 = $precio2 * 106.518;
    	
    		$valores2=[$precio2,$dolares2,$libres2,$yenes2];
    	
    	
    	
    	
    		$dolares3 = $precio3 * 1.29710;
    		$libres3 = $precio3 * 0.807292;
    		$yenes3 = $precio3 * 106.518;
    	
    		$valores3=[$precio3,$dolares3,$libres3,$yenes3];
    	
    	
    	
    	echo "<table border='2'>";
	    	echo "<tr bgcolor='grey'>";
	    	echo "<td> Euro </td>";
	    	echo "<td> Dolar </td>";
	    	echo "<td> Libras </td>";
	    	echo "<td> Yenes </td>";
    	echo "</tr>";
    	echo "<tr>";
    		for ($i=0; $i<count($valores1); $i++){
    			
    			echo "<td>" . $valores1[$i] . "</td>";
    		}
    	echo "</tr>";
    	echo "<tr>";
	    	for ($i=0; $i<count($valores2); $i++){
	    		 
	    		echo "<td>" . $valores2[$i] . "</td>";
	    	}
    	echo "</tr>";
    	echo "<tr>";
	    	for ($i=0; $i<count($valores3); $i++){
	    		 
	    		echo "<td>" . $valores3[$i] . "</td>";
	    	}
    	echo "</tr>";
    	
    
    	echo "</table>";
    	 
    }
	?>
	</center>
    </body>

</html>