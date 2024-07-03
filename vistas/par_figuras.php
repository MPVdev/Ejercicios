<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Documento sin título</title>
<script src="../files/jquery-3.7.1.min.js"></script> 
<script src="js/par_figuras.js"></script>
	<link rel="stylesheet" href="../files/styles.css">
</head>
<body>
	<form id="figuras" name="figuras">
    <h2>Figuras</h2>

	<label>Selecciona las figuras a calcular:</label>
		<select id="seleccionFigura" name="seleccionFigura">
        <option value="Cuadrado">Cuadrado</option>
        <option value="Circulo">Círculo</option>
    </select>
    
    <div id="medidasCuadrado" class="medidas">
        <label>Lado:</label>
        <input type="number" name="ladoCuadrado" required>
    </div>
    
    <div id="medidasCirculo" class="medidas">
        <label>Radio:</label>
        <input type="number" name="radioCirculo" required>
    </div>
    <button type="submit" id="calcular">Calcular</button>
		</form>
</body>
</html>
