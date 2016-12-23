<?php

$conexion=mysqli_connect("localhost","root","","letras") or
    die("Problemas con la conexión");
  
$registros=mysqli_query($conexion,"select letra,x,y,codigo from letra") or die("Problemas en el select".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
}
mysqli_close($conexion);

$cad=json_encode ($vec);
echo $cad;
?>