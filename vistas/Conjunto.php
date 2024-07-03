<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script src="../files/jquery-3.7.1.min.js"></script>
	<script src="js/Conjunto.js"></script>
	<script src="js/Comprobaciones.js"></script>
</head>

<body>
<div id="div1">
	<h1>Ingrese los conjuntos</h1>
    <form id="Formulario1" name="Formulario1">
        <p><label for="Conjunto1">Conjunto 1: { </label>
        <input type="text" name="Conjunto1" id="Conjunto1" onChange="Comprobar(1)" required> }</p>
		<p><label for="Conjunto2">Conjunto 2: { </label>
        <input type="text" name="Conjunto2" id="Conjunto2" onChange="Comprobar(2)" required> }</p>
		<p><label for="Universo">Universo: { </label><input type="text" name="universoelemen" id="universoelemen" readonly>
        <input type="text" name="Universo" id="Universo" onChange="Comprobar(3)"> }</p>
        <button type="submit" id="enviar">Enviar</button>
    </form>
</div>
<div id="resultados" name="resultados" style="display: none">
  <h1>Conjuntos</h1>
	<p><label name="union">la union es: <label id="union"></label></label></p>
	<p><label name="interseccion">la interseccion es: <label id="interseccion"></label></label></p>
	<p><label name="diferencia">la diferencia es: <label id="diferencia"></label></label></p>
	<p><label name="diferenciaSimetrica">la diferencia asimetrica es: <label id="diferenciaSimetrica"></label></label></p>
	<p><label name="complemento1">el complemento 1 es: <label id="complemento1"></label></label></p>
	<p><label name="complemento2">el complemento 2 es: <label id="complemento2"></label></label></p>
	<p><label name="conjuntoalternado">conjunto alternando es: <label id="conjuntoalternado"></label></label></p>
	<p><label name="suma">la suma es: <label id="suma"></label></label></p>
	<p><label name="resta">la resta es: <label id="resta"></label></label></p>
	<p><label name="multi">la multi es: <label id="multi"></label></label></p>
</div>
</body>
</html>
