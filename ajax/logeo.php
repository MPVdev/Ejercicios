<?php
session_start();
require "../modelos/logeo.php";
$usuario = new usuario();
switch ( $_GET[ "op" ] ) {
  case "logeo":
	$respuesta = $usuario->validar($_POST["usuario"],$_POST["clave"]);
    $fila = $respuesta->fetch_row();
		$_SESSION["cedula"] = $fila[0];
    echo $fila;
    break;
}
?>