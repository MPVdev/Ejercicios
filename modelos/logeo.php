<?php
require("../config/conexion.php");
	class usuario{
		function validar($usuario, $clave){
			$sql = "call sp_Usuario('0', 0, '', '', '$usuario', '$clave')";
			return ejecutarConsultaSP($sql);
		}
	}
?>