<?php
class Practica1{
	function vocales($nombre, $apellido){
		$contador = 0;
		for ($i = 0; $i < strlen($nombre); $i++){
			if ($nombre[$i] == "a" || $nombre[$i] == "A" ||$nombre[$i] == "e" ||$nombre[$i] == "E" ||$nombre[$i] == "i" ||$nombre[$i] == "I" ||$nombre[$i] == "o" ||$nombre[$i] == "O" ||$nombre[$i] == "u" ||$nombre[$i] == "U"){
				$contador = $contador + 1;
			}
		}
		for ($i = 0; $i < strlen($apellido); $i++){
			 if ($apellido[$i] == "a" || $apellido[$i] == "A" || $apellido[$i] == "e" || $apellido[$i] == "E" || $apellido[$i] == "i" || $apellido[$i] == "I" || $apellido[$i] == "o" || $apellido[$i] == "O" || $apellido[$i] == "u" || $apellido[$i] == "U") {
				$contador = $contador + 1;
			}
		}
		return($contador);
	}
}
?>