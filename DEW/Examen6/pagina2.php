<?php 
$server = "localhost";
$user = "root";
$pass = "";
$bd = "examen";
 
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//Recogemos los parámetros
$cad=json_decode(stripslashes($_REQUEST['param']));

$sql = "insert into clientes (id, nombre, edad, genero, email, localidad,telefono) VALUES (NULL,'".$cad[0]->nombre."',".$cad[0]->edad.",'".$cad[0]->genero."','".$cad[0]->email."','".$cad[0]->localidad."','".$cad[0]->telefono."')";

mysqli_query($conexion,$sql) or die("Problemas en el select".mysqli_error($conexion));

//generamos la consulta
$sql = "SELECT * FROM clientes";
 
if(!$result = mysqli_query($conexion, $sql)) die();
 
 
while($row = mysqli_fetch_array($result)) 
{ 
 $clientes[] = $row;
 
}
    
//desconectamos la base de datos
mysqli_close($conexion) or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
 
//Creamos el JSON
$cad = json_encode($clientes);
echo $cad;
?>