<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="../files/jquery-3.7.1.min.js"></script> 
<script src="js/par_info.js"></script>
	<link rel="stylesheet" href="../files/styles.css">
</head>

<body>
<div id="divDatos">
  <h1>Informacion Personal</h1>
  <form id="info" name="info">
    <p>
      <label>Cedula: </label>
      <input type="text" id="Cedula" name="Cedula" required>
    </p>
    <p>
      <label>Nombre: </label>
      <input type="text" id="Nombre" name="Nombre" required>
    </p>
    <p>
      <label>Apellido: </label>
      <input type="text" id="Apellido" name="Apellido" required>
    </p>
    <button type="submit" id="enviar">Guardar</button>
  </form>
</div>
</body>
</html>