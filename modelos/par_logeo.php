<?php
	function logeo($usu, $clave){
		if ($usu == "admin" && $clave == "admin"){
			return 1;
		}
		return 0;
	}
?>