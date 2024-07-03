<?php
require("../config/conexion.php");
	class estudiante{
		function ingresoEst($cedula,$nombre,$apellido,$usuario,$clave){
			$sql = "call sp_Usuario(1, '$cedula', '$nombre', '$apellido', '$usuario', '$clave')";
			return ejecutarConsultaSP($sql);
		}
		function listar(){
			$sql = "call sp_Usuario(2,0,'','','','')";
			return ejecutarConsultaSP($sql);
		}
		
		function eliminar($cedula){
			$sql = "call sp_Usuario(3,$cedula,'','','','')";
			return ejecutarConsultaSP($sql);
		}
	}
?>