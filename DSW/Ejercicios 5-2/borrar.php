<?php

if(isset($_COOKIE['contador'])){

	setcookie('contador','',time() - 4800);
	echo "<center>";
	echo "<h3>La cookie ha sido eleminada</h3>";
	echo "<a href='Actividad01-Formulario.php' name=''> Volver </a>";
	echo "</center>";
}
?>