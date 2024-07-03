<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Documento sin titulo</title>
<meta name="description" content="Login">
<script src="../files/jquery-3.7.1.min.js"></script> 
<script src="js/par_logeo.js"></script>
	<link rel="stylesheet" href="../files/styles.css">
</head>
<body>
<div>
  <h2>INGRESO AL SISTEMA</h2>
  <form id="logeo" name="logeo" method="POST">
	  <p><input type="text" id="usuario"  placeholder="Usuario" name="usuario"></p>
    <p><input type="text" id="clave" placeholder="Clave" name="clave"></p>
    <button name="ingresar" id="ingresar" type="submit">Entrar</button>
  </form>
</div> 
</body>
</html>