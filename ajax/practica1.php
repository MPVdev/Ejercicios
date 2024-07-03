<?php
	require("../modelos/practica1.php");
	$practica = new Practica1();
	$numerovocales = $practica->vocales($_POST["nombre"],$_POST["apellido"]);
	echo $numerovocales;
?>