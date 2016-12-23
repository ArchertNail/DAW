<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$bd = "examen";
 
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos");
 
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