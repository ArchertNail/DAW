<?php

$cad=json_decode(stripslashes($_REQUEST['cadena']));

$conexion=mysqli_connect("localhost","root","","letras") or
    die("Problemas con la conexión");

  
$registros=mysqli_query($conexion,"select letra,x,y,codigo from letra") or die("Problemas en el select".mysqli_error($conexion));

for($f=0;$f<count($cad);$f++)
{
  mysqli_query($conexion,"update letra set  x=".$cad[$f]->x.",y=".$cad[$f]->y." where codigo=".$cad[$f]->codigo) or die("Problemas en el select".mysqli_error($conexion));
}

$registros=mysqli_query($conexion,"select x,y,codigo from letra") or die("Problemas en el select".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
}
mysqli_close($conexion);
$cad=json_encode ($vec);
echo $cad;
?>