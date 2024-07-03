<?php
require "../modelos/estudiante.php";
$est = new estudiante();
switch ( $_GET[ "op" ] ) {
  case "IngreseEstudiante":
    $respuesta = $est->ingresoEst( $_POST[ "Cedula" ], $_POST[ "Nombre" ], $_POST[ "Apellido" ], $_POST[ "Usuario" ], $_POST[ "Clave" ] );
    $fila = $respuesta->fetch_row();
    echo $fila[ 0 ];
    break;
	case "listar":
    $respuesta = $est->listar();
    
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
             $datos[] = array(
        "botones" => "<button name='btnEliminar' onClick='eliminar(" . $fila["est_cedula"] . ")'>Eliminar</button><button name='btnEditar' onClick='editar(\"" . $fila['est_cedula'] . "*" . $fila['est_nombre'] ."*" . $fila['est_apellido'] . "*" . $fila['est_usuario'] .  "\")'>Editar</button>",
        "cedula" => $fila["est_cedula"],
        "nombre" => $fila["est_nombre"],
        "apellido" => $fila["est_apellido"],
        "usuario" => $fila["est_usuario"],
    );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => []));
    }
    break;
	case "eliminar":
		$respuesta = $est->eliminar( $_GET[ "id" ]);
    $fila = $respuesta->fetch_row();
    echo $fila[ 0 ];
    break;
}
?>