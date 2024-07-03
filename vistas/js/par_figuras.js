$(document).ready(function () {
	
	$(".medidas").hide();

    $("#seleccionFigura").change(function() {
        $(".medidas").hide();
        $("#medidas" + $(this).val()).show();
    });
	
  $("#info").on('submit', function (e) {
    e.preventDefault();
    calcular();
  });

  function calcular() {
    var form = $("#figuras").serialize();
    $.ajax({
      url: "../ajax/par_controlador.php?op=figuras",
      type: "POST",
      data: form,
      success: function (datos) {
          alert(datos);
          window.location.href = "par_menu.php";
      }
    });
  }
});
