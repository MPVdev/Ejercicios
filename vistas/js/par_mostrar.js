$(document).ready(function () {
     $.ajax({
       url: "../ajax/par_controlador.php?op=mostrar",
       type: "POST",
       success: function (datos) {
		alert(datos);
         var resultados = datos.split(",");
         $("#cedula").text(resultados[2]);
         $("#nombre").text(resultados[0]);
         $("#apellido").text(resultados[1]);
       }
     });
   });
