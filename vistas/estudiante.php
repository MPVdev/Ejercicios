<?php
session_start();
if (!isset($_SESSION['cedula'])) {
    header("Location: logeo.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<link href="../files/datatables.min.css" rel="stylesheet">
<body>
<form id="IngresoEstudiante" name="IngresoEstudiante">
  <p> Cedula:
    <input type="text" id="Cedula" name="Cedula" >
  </p>
  <p> Nombre:
    <input type="text" id="Nombre" name="Nombre">
  </p>
  <p> Apellido:
    <input type="text" id="Apellido" name="Apellido">
  </p>
  <p> Usuario:
    <input type="text" id="Usuario" name="Usuario">
  </p>
  <p> Clave:
    <input type="text" id="Clave" name="Clave">
  </p>
  <button type="submit" id="guardar" name="guardar">Guardar</button>
	<button type="submit" id="nuevo" name="nuevo" style="display: none;" onClick="nuevo()">Nuevo</button>
</form>
	<h1>Lista</h1>
	<table id="Estudiantes" name="Estudiantes">
  <thead>
    <tr>
		<th>Opciones</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellido</th>
		<th>usuario</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</body>
<script src="../files/jquery-3.7.1.min.js"></script>
	<script src="../files/datatables.min.js"></script>
	<script src="js/estudiante.js"></script>
</html>