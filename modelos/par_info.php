<?php
class Usuario {

  private $nombre;
  private $apellido;
  private $cedula;

  public function __construct($nombre, $apellido, $cedula) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->cedula = $cedula;
  }

  public function obtenerInformacion() {
    return $this->nombre . "," . $this->apellido . "," . $this->cedula;
  }
}
?>
