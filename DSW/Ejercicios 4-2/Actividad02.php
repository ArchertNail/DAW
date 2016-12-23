<html>
<head>
</head>
<body>
    
    <form action="Actividad02.php" method="post" name="Actividad02">
    
        tipo de mascota que desea tener?<br><br>
        <select size="6" name="Mascotas[]" multiple>
            <option>Jaguar sin adiestrar</option>
            <option>Pastor Suizo</option>
            <option>Ardilla Salvaje</option>
            <option>Mantis Cabreada</option>
            <option>Lechuza</option>
            <option>Osito de Peluche</option>
        </select><br><br>
        Nombre: <input type=text name="nombre"><br><br>
        Apellidos: <input type=text name="apellidos"><br><br>
        Email: <input type=text name="email"><br><br>
        <input  value="enviar datos" type="submit">
    
    </form>
    
    <?php
    
    if (isset($_POST['Mascotas'])){
    	
	    $nombre = $_POST["nombre"];
	    $apellidos = $_POST["apellidos"];
	    $email = $_POST["email"];
	    $ArrayMascotas = $_POST['Mascotas'];
	    
	    
	    
	        echo "Nombre: ".$nombre."<br>";
	        echo "Apellidos: ".$apellidos."<br>";
	        echo "Email: ".$email."<br>";
	    
	        foreach ($ArrayMascotas as $indice => $valor){
	        	echo "Mascotas".$indice . " = " . $valor ."<br>";
	        }
    }
    ?>
</body>
</html>