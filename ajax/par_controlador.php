<?php
session_start();

require "../modelos/par_info.php";
require "../modelos/par_figuras.php";
require "../modelos/par_logeo.php";
switch ( $_GET[ "op" ] ) {
  case "logeo":
    $info = logeo( $_POST[ "usuario" ], $_POST[ "clave" ] );
    echo $info;
    break;
  case "info":
    try {
      $usuario = new Usuario( $_POST[ "Nombre" ], $_POST[ "Apellido" ], $_POST[ "Cedula" ] );
      $_SESSION[ 'usuario' ] = $usuario;
      echo "Usuario registrado correctamente";
    } catch ( Exception $e ) {
      echo "Error al registrar usuario: " . $e->getMessage();
    }
    break;
  case "mostrar":
    if ( class_exists( 'Usuario' ) ) {
      $Usuarios = $_SESSION[ 'usuario' ];
      if ( isset( $Usuarios ) ) {
        $info = $Usuarios->obtenerInformacion();
        echo $info;
      } else {
        echo "No se ha definido un usuario";
      }
    }
    break;
}
?>
