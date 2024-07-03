$(document).ready(function () {
      $("#Formulario1").on('submit', function (e) {
        e.preventDefault();
        calcular();
      });

      function calcular() {
        $("#div1").hide();
        $("#resultados").show();
		var form = $("#Formulario1").serialize();
        $.ajax({
          url: "../AJAX/practica1.php",
          contentType: false,
          processData: false,
          async: false,
			data: form,
          success: function (datos) {
            $("#resultados").html(datos);
          }
        });
      }
    });