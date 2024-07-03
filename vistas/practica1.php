<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script src="../files/jquery-3.7.1.min.js"></script>
	<script src="js/practica1.js"></script>
</head>

<body>
<div id="div1">
    <form id="Formulario1">
        <label for="cedula">Cedula:</label>
        <input type="text" name="cedula">
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido">
        <br>
        <label for="carreras">fecha:</label>
        <input type="date" name="fecha">
        <br><br>
        <button type="submit" id="enviar">Enviar</button>
    </form>
</div>
<div id="resultados" style="display: none">
  <h1>Practica 1</h1>
	<p><label id="vocales" name="vocales"></label></p>
	<p><label id="separado" name="separado"></label></p>
	<p><label id="cedula" name="cedula"></label></p>
	<p><label id="provincia" name="provincia"></label></p>
	<p><label id="edad" name="edad"></label></p>
</div>
</body>
</html>
