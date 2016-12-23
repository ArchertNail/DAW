<?php

	$conexion = new mysqli("localhost","root","");
	$conexion->select_db("datos");
	
	//consulta1
	$consulta1=$conexion->query("SELECT recursos.numserie as nums, recursos.descripcion as descr 
						FROM recursos 
						WHERE NOT EXISTS(SELECT tiempo_uso.numserie
										FROM tiempo_uso
										WHERE tiempo_uso.numserie = recursos.numserie)") or die ("ERROR: " . $conexion->error);
	
	$consulta2=$conexion->query("select profesionales.dni, profesionales.nombre_y_apellidos from profesionales 
INNER JOIN tiempo_uso on profesionales.dni = tiempo_uso.dni
inner JOIN recursos on profesionales.dni 
GROUP by profesionales.dni DESC") or die ("ERROR: " . $conexion->error);
	
	$consulta3=$conexion->query("SELECT e.codigo, e.descripcion from empresas e
inner join profesionales p
on p.empresa = e.codigo
inner join tiempo_uso t
on t.dni = p.dni
group by e.descripcion
having count(e.descripcion)>= 4") or die ("ERROR: " . $conexion->error);
	
	$consulta4=$conexion->query("select p.dni,p.nombre_y_apellidos,p.empresa,ti.numserie, re.empresa, re.descripcion,ti.fecha_inicio,ti.fecha_fin from recursos as re
INNER JOIN tiempo_uso as ti on re.numserie = ti.numserie
inner JOIN profesionales as p on ti.dni = p.dni 
where  p.empresa = re.empresa") or die ("ERROR: " . $conexion->error);
	
//-------------------------------------------------------------------------------------	
	
	echo "<h2>Apartado1</h2>";

	if( $row = $consulta1->fetch_array(MYSQLI_ASSOC)){ 
   		
		echo "<table border = '1'> \n"; 
	   		echo "<tr><td>Num_Serie</td><td>Descripcion</td></tr> \n"; 
	   		do { 
	      		echo "<tr><td>".$row["nums"]."</td><td>".utf8_encode($row["descr"])."</td></tr> \n"; 
	   		}while ($row = $consulta1->fetch_array(MYSQLI_ASSOC)); 
   		echo "</table> \n"; 
	} 
	else{ 
		echo "¡ No se ha encontrado ningún registro !"; 
	} 
	
	//---------------------------------------------------------------------
	
	echo "<h2>Apartado2</h2>";
	
	if($row=$consulta2->fetch_array(MYSQLI_ASSOC)){
		
		echo "<table border='1'>\n";
			echo "<tr><td>DNI</td><td>Nombre y Apellido</td></tr>";
		do{
			
			echo "<tr><td>".$row["dni"]."</td><td>".utf8_encode($row["nombre_y_apellidos"])."</td></tr> \n";
		}while($row=$consulta2->fetch_array(MYSQLI_ASSOC));
		echo "</table> \n";
	}
	
	//------------------------------------------------------------------------------
	
	echo "<h2>Apartado3</h2>";
		
	if($row=$consulta3->fetch_array(MYSQLI_ASSOC)){
	
		echo "<table border='1'>\n";
		echo "<tr><td>Codigo</td><td>Descripcion</td></tr>";
		do{
				
			echo "<tr><td>".$row["codigo"]."</td><td>".utf8_encode($row["descripcion"])."</td></tr> \n";
		}while($row=$consulta3->fetch_array(MYSQLI_ASSOC));
		echo "</table> \n";
	}
	
	//--------------------------------------------------------------------------
	
	echo "<h2>Apartado4</h2>";
	
	if($row=$consulta4->fetch_array(MYSQLI_ASSOC)){
	
		echo "<table border='1'>\n";
		echo "<tr>
				<td>DNI</td>
				<td>Nombre</td>
				<td>Empresa</td>
				<td>Num_Serie</td>
				<td>Empresa</td>
				<td>Descripcion</td>
				<td>Fecha_Inic</td>
				<td>Fecha_Fin</td>
			</tr>";
		do{
	
			echo "<tr>
					<td>".$row["dni"]."</td>
					<td>".utf8_encode($row["nombre_y_apellidos"])."</td>
					<td>".$row["empresa"]."</td>
					<td>".utf8_encode($row["numserie"])."</td>
					<td>".$row["empresa"]."</td>
					<td>".utf8_encode($row["descripcion"])."</td>
					<td>".$row["fecha_inicio"]."</td>
					<td>".utf8_encode($row["fecha_fin"])."</td>
				 </tr> \n";
		}while($row=$consulta4->fetch_array(MYSQLI_ASSOC));
		echo "</table> \n";
	}
?>